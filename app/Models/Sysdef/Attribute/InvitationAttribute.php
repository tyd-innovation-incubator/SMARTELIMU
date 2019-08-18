<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 6/25/19
 * Time: 11:38 AM
 */

namespace App\Models\Sysdef\Attribute;


use App\Repositories\Sysdef\DocumentRepository;

trait InvitationAttribute
{



    /*Get attachment file document -full path from directory*/
    public function invitationAttachmentFile($uploaded_doc_id)
    {
        $documents = new DocumentRepository();
        $document_id = $documents->getInvitationMembersDocumentId();
        if ($this->documents()->where("document_id", $document_id)->count() > 0){
            $uploadedDocument = $this->documents()->where("document_resource.id", $uploaded_doc_id)->first()->pivot;
            return invitation_dir() . DIRECTORY_SEPARATOR . $this->id . DIRECTORY_SEPARATOR . $document_id . DIRECTORY_SEPARATOR. $uploadedDocument->id . '.' .  $uploadedDocument->ext;
        }else{
            return null;
        }
    }


    /*Get Logo url path for display  source on view blade*/
    public function invitationLogoFileUrl()
    {
        $documents = new DocumentRepository();
        $document_logo_id = $documents->getInvitationMembersDocumentId();
        if (count($this->documents()->where("document_id", $document_logo_id)->first())){
            $uploadedDocument = $this->documents()->where("document_id", $document_logo_id)->first()->pivot;
            return invitation_url() . DIRECTORY_SEPARATOR . $this->id . DIRECTORY_SEPARATOR . $document_logo_id . DIRECTORY_SEPARATOR. $uploadedDocument->id . '.' .  $uploadedDocument->ext;
        }else{
            return null;
        }
    }

    public function invitationMemberDocumentFileUrl($document_id)
    {
        if (count($this->documents()->where("document_id", $document_id)->first())){
            $uploadedDocument = $this->documents()->where("document_id", $document_id)->first()->pivot;
            return invitation_url() . DIRECTORY_SEPARATOR . $this->id . DIRECTORY_SEPARATOR . $document_id . DIRECTORY_SEPARATOR. $uploadedDocument->id . '.' .  $uploadedDocument->ext;
        }else{
            return null;
        }
    }

}