<?php

namespace App\Models\Sysdef\Relationship;

use App\Models\Sysdef\DocumentGroup;

trait DocumentRelationship
{

    public function documentGroup()
    {
        return $this->belongsTo(DocumentGroup::class);
    }

}