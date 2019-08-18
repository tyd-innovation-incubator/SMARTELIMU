<?php

namespace App\Models\Sysdef\Relationship;

use App\Models\Sysdef\SysdefGroup;

trait SysdefRelationship
{
    public function sysdefGroup()
    {
        $this->belongsTo(SysdefGroup::class);
    }
}
