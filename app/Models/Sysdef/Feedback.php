<?php
namespace App\Models\Sysdef;

use App\Models\Sysdef\Attribute\FeedbackAttribute;
use App\Models\Sysdef\Relationship\FeedbackRelationship;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Feedback extends Model
{
    use FeedbackRelationship, FeedbackAttribute;

    protected $table = 'feedbacks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

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
