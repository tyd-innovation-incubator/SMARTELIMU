<?php

namespace App\Models\Sysdef;

use App\Models\Sysdef\Attribute\FaqAttribute;
use App\Models\Sysdef\Relationship\FaqRelationship;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use Webpatser\Uuid\Uuid;


class Faq extends Model implements AuditableContract
{
    //
    use FaqRelationship, SoftDeletes,FaqAttribute, Auditable;




    protected $guarded = [];


    /**
     * @var array
     */
    protected $auditableEvents = [
        'deleted',
        'updated',
        'restored',
    ];


    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }

}
