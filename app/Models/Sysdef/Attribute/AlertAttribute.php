<?php
namespace App\Models\Sysdef\Attribute;

use Carbon\Carbon;

trait AlertAttribute
{
    /**
     * Create a delete button with sweet alert attributes
     * @return string
     */
    public function getDeleteButtonAttribute()
    {
        return link_to_route('alert.destroy', trans('buttons.general.crud.delete'), [$this->uuid], ['data-method' => 'delete', 'data-trans-button-cancel' => trans('buttons.general.cancel'), 'data-trans-button-confirm' => trans('buttons.general.confirm'), 'data-trans-title' => trans('label.warning'), 'data-trans-text' => trans('alert.system.alerts.warning.delete'), 'class' => 'btn btn-danger btn-xs']);
    }

    /**
     * @return string
     */
    public function getResourceLinkAttribute()
    {
        $model_name = $this->resource_type;
        $base_name = class_basename($model_name);

        switch($base_name) {
            case 'Company' : {
                $resource = $model_name::where('id', $this->resource_id)->first();
                return link_to_route('stakeholder.company.profile', __('buttons.general.more'), [$resource->uuid], ['class' => '']);
            }
            case 'Ad' : {
                $resource = $model_name::where('id', $this->resource_id)->first();
                return link_to_route('ad.profile', __('buttons.general.more'), [$resource->uuid], ['class' => '']);
            }
            case 'ForumThread' : {
                $resource = $model_name::where('id', $this->resource_id)->first();
                return link_to_route('forum.creatediscussion', __('buttons.general.more'), [$resource->forum->uuid]);
            }
            case 'Forum' : {
                $resource = $model_name::where('id', $this->resource_id)->first();
                return link_to_route('forum.creatediscussion', __('buttons.general.more'), [$resource->uuid]);
            }
            case 'Commodity' : {
                $resource = $model_name::where('id', $this->resource_id)->first();
                return link_to_route('commodity.show', __('buttons.general.more'), [$resource->uuid]);
            }
            case 'News' : {
                $resource = $model_name::where('id', $this->resource_id)->first();
                return link_to_route('news.show', __('buttons.general.more'), [$resource->uuid]);
            }
            case 'Event' : {
                $resource = $model_name::where('id', $this->resource_id)->first();
                return link_to_route('event.show', __('buttons.general.more'), [$resource->uuid]);
            }
            case'TenderApplication' : {
                $resource = $model_name::where('id', $this->resource_id)->first();
                return link_to_route('tender.profile', __('buttons.general.more'), [$resource->uuid]);
            }
            case 'Association' : {
                $resource = $model_name::where('id', $this->resource_id)->first();
                return link_to_route('association.public_profile', __('buttons.general.more'), [$resource->uuid]);
            }
            case 'Offer' : {
                $resource = $model_name::where('id', $this->resource_id)->first();
                return link_to_route('offer.details', __('buttons.general.more'), [$resource->uuid]);
            }
            case 'PackageSubscription' : {
                $resource = $model_name::where('id', $this->resource_id)->first();
                return link_to_route('packages.my_subscription_packages', __('buttons.general.more'), [$resource->uuid]);
            }
            case 'ReportIssue' : {
                $resource = $model_name::where('id', $this->resource_id)->first();
                return link_to_route('', __('buttons.general.more'), [$resource->uuid]);
            }
        }
    }
}
