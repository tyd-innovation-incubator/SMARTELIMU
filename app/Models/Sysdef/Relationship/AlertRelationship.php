<?php
namespace App\Models\Sysdef\Relationship;


use App\Models\Auth\User;
use App\Models\Sysdef\CodeValue;

trait AlertRelationship
{
    /**
     * @return mixed
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return mixed
     */
    public function type()
    {
        return $this->belongsTo(CodeValue::class, 'type_cv_id');
    }

    /**
     * @return mixed
     */
    public function resource()
    {
        return $this->morphTo();
    }
}
