<?php

namespace App\Models\Package;

use App\Models\Package\Attribute\InvoiceAttribute;
use App\Models\Package\Relationship\InvoiceRelationship;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Invoice extends Model
{
    use InvoiceRelationship,InvoiceAttribute;
    //

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }
}
