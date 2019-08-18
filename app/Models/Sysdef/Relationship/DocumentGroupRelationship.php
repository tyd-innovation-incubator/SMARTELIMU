<?php

namespace App\Models\Sysdef\Relationship;

use App\Models\Sysdef\Document;

trait DocumentGroupRelationship
{

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

}