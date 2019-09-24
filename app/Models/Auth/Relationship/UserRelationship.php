<?php

namespace App\Models\Auth\Attribute;

use App\Models\Auth\Candidate;
use App\Models\Package\Invoice;
use App\Models\Package\Package;
use App\Models\Sysdef\Country;
use App\Models\Sysdef\Region;

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

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }
}