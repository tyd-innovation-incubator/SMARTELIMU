<?php

namespace App\Models\Sysdef;

use App\Models\Sysdef\Attribute\ReportIssueAttribute;
use App\Models\Sysdef\Relationship\ReportIssueRelationship;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class ReportIssue extends Model
{
    use ReportIssueAttribute, ReportIssueRelationship;
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['uuid'];

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
