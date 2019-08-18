<?php

namespace App\Models\Sysdef\Attribute;



use App\Services\Scopes\IsactiveScope;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

trait ReportIssueAttribute
{
    /**
     *
     */
    public function makeAlertIsRead()
    {
        if (access()->check()) {
            $this->alert()
                ->where('user_id', access()->user()->id)
                ->whereNull('read_at')
                ->update([
                    'read_at' => Carbon::now(),
                ]);
        }
    }

    /**
     * Get the short date format of dd/M/yyyy
     * @return string
     */
    public function getCreatedAtFormattedAttribute()
    {
        return  short_date_format($this->created_at);
    }

    public function getReportedUserAttribute()
    {
        return (isset($this->user->name))?
            link_to_route('stakeholder.company.view_user_details', $this->user->name.' '.$this->user->othernames, [$this->user->uuid], ['target' => '_blank', 'class' => 'link-no-decoration'])
            :' ';
    }

    public function getReporterAttribute()
    {
        return (isset($this->reportedBy->name))?
            link_to_route('stakeholder.company.view_user_details', $this->reportedBy->name.' '.$this->reportedBy->othernames, [$this->reportedBy->uuid], ['target' => '_blank', 'class' => 'link-no-decoration'])
            :' ';
    }

    public function getReportedCompanyAttribute()
    {
        return (isset($this->company->name))?$this->company->name:' ';
    }

    public function getReportStatusAttribute()
    {
        switch($this->status){
            case 0 : {
                return trans('label.system.report_issues.report_pending');
            }
            case 1 : {
                return trans('label.system.report_issues.report_accepted');
            }
            case 2 : {
                return trans('label.system.report_issues.report_declined');
            }
        }
    }

    public function getReportStatusIconAttribute()
    {
        switch($this->status){
            case 0 : {
                return '<span style="color: #F69F00;"><i class="fas fa-pause"></i></span> ';
            }
            case 1 : {
                return '<span style="color: #007ACF;"><i class="fas fa-check-square"></i></span> ';
            }
            case 2 : {
                return '<span style="color: #E3001E;"><i class="fas fa-times-circle"></i></span> ';
            }
        }
    }

    public function getResourceLinkAttribute()
    {
        $model_name = $this->resource_type;
        $base_name = class_basename($model_name);
        $url = isset($this->url) ? $this->url : '';
        Log::info(print_r($this->user_id,true));
//return   '<a target="_blank" href="' . url($url) . '" class="btn btn-warning btn-xs" >'.' '. $base_name .'</a> ';
        return   '<a href="#" class="btn btn-warning btn-xs" >'.' '. $base_name .'</a> ';
//        switch($base_name) {
//            case 'Company' : {
//                $resource = $model_name::where('id', $this->resource_id)->withoutGlobalScope(IsactiveScope::class)->first();
//                return link_to_route('stakeholder.index', $base_name, [$resource->uuid], ['class' => 'btn btn-warning btn-xs', 'target' => '_blank']);
//            }
//            case'ForumThread' : {
//                $resource = $model_name::where('id', $this->resource_id)->withoutGlobalScope(IsactiveScope::class)->first();
//                return link_to_route('forum.creatediscussion', $base_name, [$resource->forum->uuid], ['class' => 'btn btn-warning btn-xs', 'target' => '_blank']);
//            }
//            case'Forum' : {
//                $resource = $model_name::where('id', $this->resource_id)->withoutGlobalScope(IsactiveScope::class)->first();
//                return link_to_route('forum.creatediscussion', $base_name, [$resource->uuid], ['class' => 'btn btn-warning btn-xs', 'target' => '_blank']);
//            }
//            case'Commodity' : {
//                $resource = $model_name::where('id', $this->resource_id)->withoutGlobalScope(IsactiveScope::class)->first();
//                return link_to_route('commodity.show', $base_name, [$resource->uuid], ['class' => 'btn btn-warning btn-xs', 'target' => '_blank']);
//            }
//        }
    }
}
