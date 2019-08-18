<?php

namespace App\Models\Sysdef;

use App\Models\Sysdef\Attribute\DocumentAttribute;
use App\Models\Sysdef\Relationship\DocumentRelationship;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use DocumentAttribute, DocumentRelationship;

}
