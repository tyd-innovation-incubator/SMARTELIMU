<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 9/12/19
 * Time: 2:42 PM
 */

namespace App\Models\Package\Relationship;


use App\Models\Package\Chapter;

trait SectionRelationship
{

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}