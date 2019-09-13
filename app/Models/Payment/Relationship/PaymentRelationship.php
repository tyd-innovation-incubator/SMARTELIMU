<?php
/**
 * Created by PhpStorm.
 * User: reubenwedson
 * Date: 7/16/19
 * Time: 12:35 PM
 */

namespace App\Models\Payment\Relationship;


use App\Models\Payment\Invoice;

trait PaymentRelationship
{
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}