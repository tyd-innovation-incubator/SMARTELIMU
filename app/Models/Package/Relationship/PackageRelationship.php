<?php
namespace App\Models\Package\Relationship;


use App\Models\Package\Invoice;
use App\Models\Package\Subject;

trait PackageRelationship
{

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }


}