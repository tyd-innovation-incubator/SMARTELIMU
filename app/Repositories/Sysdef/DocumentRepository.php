<?php

namespace App\Repositories\Sysdef;


use App\Models\Sysdef\Document;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DocumentRepository extends BaseRepository
{
    const MODEL = Document::class;


    /*Company logo document id*/
    public function getCompanyLogoDocumentId()
    {
        return 11;
    }


    /*Commodity Images */
    public function getCommodityImageDocumentId()
    {
        return 12;
    }

    /*News Image */
    public function getNewsImageDocumentId()
    {
        return 6;
    }

    /*Event Image */
    public function getEventImageDocumentId()
    {
        return 7;
    }
    public function getForumImageDocumentId()
    {
        return 8;
    }
    /*cargo owner documents */
    public function getCargoOwnerDocumentId()
    {
        return 13;
    }
    /*service provider documents */
    public function getServiceProviderDocumentId()
    {
        return 14;
    }


    /*Regulation / legislation files */
    public function getRegulationFileDocumentId()
    {
        return 10;
    }

    public function getDocumentsByGroupFilter(array $filter)
    {
        $documents = $this->query()->whereHas('documentGroup', function ($query) use($filter){
            $query->whereIn('document_group_id', $filter);
        })->get();
        return $documents;
    }

    /**
     * Ads Images
     */
    public function getAdImageDocumentId()
    {
        return 9;
    }

    /**
     * Association members
     */
    public function getAssociationMembersDocumentId()
    {
        return 15;
    }

    /**
     * Invitation members
     */
    public function getInvitationMembersDocumentId()
    {
        return 20;
    }
    /*Commodity Images */
    public function getParkingLotImageDocumentId()
    {
        return 17;
    }

    /**
     * @param $id
     * @return bool
     * Check if document is renewable
     */
    public function checkIfDocumentIsRenewable($id)
    {
        $document = $this->find($id);
        if($document->isrenewable == 1){
            return true;
        }else{
            return false;
        }
    }

    /**
     * @param $id
     * Deactivate document resource by id
     */
    public function deactivateDocumentResource($id, Model $resource)
    {
        $document = $this->find($id);
        $documents = $resource->documents()->where('document_id', $id)->get();
        foreach($documents as $document){
            DB::table('document_resource')->where('id', $document->pivot->id)->update([
                'isactive' => 0,
            ]);
        }

    }


}
