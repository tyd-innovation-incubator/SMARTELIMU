<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 9/12/19
 * Time: 2:43 PM
 */

namespace App\Models\Package\Relationship;



use App\Models\Package\Chapter;
use App\Models\Package\Package;

trait SubjectRelationship
{

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }

}