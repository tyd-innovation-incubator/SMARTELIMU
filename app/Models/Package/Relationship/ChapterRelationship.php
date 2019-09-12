<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 9/12/19
 * Time: 2:41 PM
 */

namespace App\Models\Package\Relationship;


use App\Models\Package\Section;
use App\Models\Package\Subject;

trait ChapterRelationship
{

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

}