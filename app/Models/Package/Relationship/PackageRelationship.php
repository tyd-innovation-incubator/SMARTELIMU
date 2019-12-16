<?php
namespace App\Models\Package\Relationship;


use App\Models\Package\Invoice;
use App\Models\Package\Subject;
use App\User;

trait PackageRelationship
{

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public  function users()
    {
        return $this->belongsToMany(User::class);
    }

}
