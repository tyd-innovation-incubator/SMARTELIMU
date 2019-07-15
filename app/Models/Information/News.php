<?php

namespace App\Models\Information;


use App\Models\Information\Attribute\NewsAttribute;
use App\Models\Information\Relationship\NewsRelationship;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{


    use NewsAttribute,NewsRelationship;
    //
}
