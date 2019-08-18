<?php

namespace App\Models\Sysdef;

use App\Models\Sysdef\Attribute\DocumentGroupAttribute;
use App\Models\Sysdef\Relationship\DocumentGroupRelationship;
use Illuminate\Database\Eloquent\Model;

class DocumentGroup extends Model
{
    use DocumentGroupAttribute, DocumentGroupRelationship;


}
