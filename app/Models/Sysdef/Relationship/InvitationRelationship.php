<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 6/25/19
 * Time: 11:41 AM
 */

namespace App\Models\Sysdef\Relationship;


use App\Models\Sysdef\Document;

trait InvitationRelationship
{

    /*Relation to documents - Many to Many*/
    public function documents(){
        return $this->morphToMany(Document::class, 'resource', 'document_resource')->withPivot('id','name', 'description', 'ext', 'size', 'mime');
    }

}