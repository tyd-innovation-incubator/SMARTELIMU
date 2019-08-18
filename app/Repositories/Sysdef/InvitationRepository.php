<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 1/14/19
 * Time: 3:37 PM
 */

namespace App\Repositories\Sysdef;


use App\Exceptions\GeneralException;
use App\Imports\Sysdef\InvitationMemberImport;
use App\Models\Sysdef\Invitation;
use App\Notifications\System\SendAssociationInvitation;
use App\Notifications\System\SendStakeholderInvitation;
use App\Repositories\BaseRepository;
use App\Services\Storage\Traits\AttachmentHandler;
use App\Services\Storage\Traits\FileHandler;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;

class InvitationRepository extends  BaseRepository
{
    use FileHandler,AttachmentHandler;

    const MODEL = Invitation::class;
    protected $base = null;
    protected $documents;

    public  function __construct()
    {

    }

    public function  store(array $input)
    {

        return DB::transaction( function () use($input){
            $user = access()->user();
                $invitation = $this->query()->create([
                    'user_id' =>$user->id,
                    'user_account_cv_id'=>$input['user_account_type'],
                    'email'=>array_key_exists('email', $input) ? $input['email'] : null,
                ]);
                $email = $input['email'];

                if ($input['user_account_type']==6)
                {
                    $invitation->notify(new SendAssociationInvitation($email));

                }else{
                    $invitation->notify(new SendStakeholderInvitation($email));
                }

                return $invitation;



        });
    }



    /**
     * @param Model $association
     * @param $document_id => document id which is going to be attached i.e. logo, Tin
     * @param $file_key_name => name of input on the create request
     * Attach association document files i.e. tin, logo, certificates.
     */
    public function attachInvitationDocument(Model $invitation, $document_id, $file_key_name)
    {
        DB::transaction(function () use ($invitation, $file_key_name, $document_id) {
            /*Attach to document pivot table*/
            if (request()->hasFile($file_key_name)) {
                $file = request()->file($file_key_name);
                if ($file->isValid()) {
                    /*Check if already attached - if exist detach*/
                    $this->unlinkInvitationAttachmentFile($invitation, $document_id);
                    /*Save into pivot table*/
                    $invitation->documents()->sync([$document_id => [
                        'name' => $file->getClientOriginalName(),
                        'description' => $file->getClientOriginalName(),
                        'size' => $file->getSize(),
                        'mime' => $file->getMimeType(),
                        'ext' => $file->getClientOriginalExtension(),
                    ]]);
                }
                $uploadedDocument = $invitation->documents()->where('document_id', $document_id)->orderBy('document_resource.id', 'desc')->first()->pivot;
                //save to tender folder

                $this->base = null;
                $this->base = $this->real(invitation_dir() . DIRECTORY_SEPARATOR);
                $path = $this->base . DIRECTORY_SEPARATOR . $invitation->id . DIRECTORY_SEPARATOR . $document_id;
                $this->makeDirectory($path);
                $image_name = $uploadedDocument->id . '.' . $uploadedDocument->ext;
                $image_path = $path . DIRECTORY_SEPARATOR . $image_name;
                fopen($image_path, 'w');
                rename($file, $image_path);
            }
        });

    }




    /* Detach/unlink association attachment and attachment from directory*/
    public function unlinkInvitationAttachmentFile(Model $invitation, $document_id)
    {
        if (($invitation->documents()->where('document_id', $document_id)->count() > 0)){
            /*Detach attachment from dir*/
            $uploaded_doc = $invitation->documents()->where('document_id', $document_id)->orderBy('document_resource.id')->first();
            $file_path = $invitation->invitationAttachmentFile($uploaded_doc->pivot->id);
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }
    }

    /**
     * Upload association members from excel
     */
    public function uploadInvitationMembers(Model $invitation, array $input)
    {

        DB::transaction(function () use ($invitation,$input) {
            /*Start attach document*/
            $documents = new DocumentRepository();
            $document_id = $documents->getInvitationMembersDocumentId();
            $file_key_name = 'document_file20';// as reffered on the file input on the blade
            $this->attachInvitationDocument($invitation, $document_id, $file_key_name);
            /*end attach document*/

            /*Start upload members from doc to db table*/
            $most_recent_members_document = $invitation->documents()->orderBy('document_resource.id', 'desc')->first();
            $this->uploadInvitationMembersToTable($invitation, $most_recent_members_document,$input);
            /*End upload members from doc to db table*/
        });
    }


    /**
     * @param Model $association
     * @param $recent_member_doc
     * Upload members into db table from the uploaded excel
     */
    public function uploadInvitationMembersToTable(Model $invitation, $recent_member_doc,$input)
    {
        $uploaded_cod_id = $recent_member_doc->pivot->id;//document resource
        $linked_file = $invitation->invitationAttachmentFile($uploaded_cod_id);
        $pivot_doc = $recent_member_doc->pivot;
        $input = ['invitation' => $invitation, 'document_resource_id' => $pivot_doc->id,'user_account_type' =>$input['user_account_type']];

        $headings = (new HeadingRowImport())->toArray($linked_file);

//        /** start : Check if all excel headers are present */

        $verifyArr = ['email'];
        foreach ($verifyArr as $key) {
            if (!in_array($key,$headings[0][0], true)) {
                throw new GeneralException(trans('exceptions.upload.column_missing', ['column' => $key]));
            }
        }
        /** end : Check if all excel headers are present */

        /*Flag off existing members for new import*/
        /*Import Data*/
        Excel::import(new InvitationMemberImport($input), $linked_file);

    }

    public function import(array $data)
    {
        return DB::transaction(function () use ($data) {
            $invitation = $this->query()->firstOrCreate([
                'email' => $data['email'],
                'user_id'=>access()->id(),
                'user_account_cv_id' => $data['user_account_type']
            ]);

            $email = $data['email'];

            if ($data['user_account_type']==6)
            {
                $invitation->notify(new SendAssociationInvitation($email));

            }else{
                $invitation->notify(new SendStakeholderInvitation($email));
            }
        });

    }

}