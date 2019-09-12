<?php

namespace App\Models\Auth\Attribute;

use App\Models\Auth\Candidate;
use App\Models\Package\Invoice;

trait UserRelationship
{

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}