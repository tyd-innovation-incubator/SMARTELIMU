<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 9/12/19
 * Time: 6:31 PM
 */

namespace App\Models\Package\Relationship;


use App\Models\Package\Package;
use App\User;

trait InvoiceRelationship
{

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}