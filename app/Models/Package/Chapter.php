<?php

namespace App\Models\Package;

use App\Models\Package\Attribute\ChapterAttribute;
use App\Models\Package\Relationship\ChapterRelationship;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use ChapterAttribute,ChapterRelationship;
    //
}
