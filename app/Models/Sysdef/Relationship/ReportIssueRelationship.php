<?php

namespace App\Models\Sysdef\Relationship;

use App\Models\Auth\User;
use App\Models\Stakeholder\Company;
use App\Models\Sysdef\Alert;
use App\Models\Sysdef\CodeValue;
use App\Services\Scopes\IsactiveScope;

trait ReportIssueRelationship
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
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * @return mixed
     */
    public function reportedBy()
    {
        return $this->belongsTo(User::class, 'reported_by')->withoutGlobalScope(IsactiveScope::class);
    }

    /**
     * @return mixed
     */
    public function typeCv()
    {
        return $this->belongsTo(CodeValue::class, 'report_issue_type_cv_id', 'id');
    }

    /**
     * @return mixed
     */
    public function alert()
    {
        return $this->morphOne(Alert::class, 'resource');
    }
}
