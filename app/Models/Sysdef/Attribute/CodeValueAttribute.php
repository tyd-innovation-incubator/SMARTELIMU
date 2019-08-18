<?php

namespace App\Models\Sysdef\Attribute;

use App\Repositories\Business\OfferRepository;
use App\Repositories\Business\TenderRepository;
use Carbon\Carbon;

trait CodeValueAttribute
{


    /**
     * @return string
     * Is Active attribute
     */
    public function getActiveAttribute()
    {
        if ($this->is_active()){
            return __('label.yes');
        }else {
            return  __('label.no');
        }

    }

    /**
     * @return string
     * is Mandatory attribute
     */
    public function getMandatoryAttribute()
    {
        if ($this->is_mandatory()){
            return __('label.yes');
        }else {
            return  __('label.no');
        }

    }


    /*
 *SYstem defined label
 *
 */
    public function getSystemDefinedAttribute()
    {
        if ($this->systemDefined()){
            return __('label.yes');
        }else {
            return  __('label.no');
        }
    }


//    Flags
    public function systemDefined() {
        return $this->is_system_defined == 1;
    }


//TODO: Need to reevaluate actions on dictionaries
    /**
     * @return string
     */
    public function getEditButtonAttribute() {
        if (!$this->systemDefined()) {
            return '<a href="' . route('code.value.edit', $this->id) . '"  class="btn btn-xs btn-primary" ><i class="icon fa fa-edit" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.edit') . '"></i>'.' '. trans('buttons.general.crud.edit').'</a> ';
        }
    }
//
//
//
//    /**
//     * @return string
//     */
//    public function getDeleteButtonAttribute() {
//        if (!$this->is_mandatory()) {
//            return '<a href="' . route('backend.system.code.delete_value',
//                    $this->id) . '" class="btn btn-xs btn-danger delete_button" data-trans-button-cancel="' . trans('buttons.general.cancel') . '" data-trans-button-confirm="' . trans('buttons.general.confirm') . '" data-trans-title="' . trans('labels.general.warning') . '" data-trans-text="' . trans('strings.backend.general.delete_message') . '" data-method="delete" ><i class="icon fa fa-trash-o" data-toggle="tooltip" data-placement="top" title="' . trans('buttons.general.crud.delete') . '"></i></a>';
//
//
//        }
//    }
//
//
    /**
     * @return string
     */
    public function getActionButtonsAttribute() {
        return  $this->getEditButtonAttribute();

    }

    /*Mandatory*/
    public function is_mandatory(){
        return $this->is_mandatory == 1;
    }

    /*Is Active flag*/
    public function is_active(){
        return $this->isactive == 1;
    }





    /*Get count of pending tenders per logistic service type (Tender which still allow bidding)*/
    public function getTendersPendingCountAttribute()
    {
        $tenders = new TenderRepository();
        return $tenders->queryFilterForTenderSearch()->whereHas('logisticService', function($query) {
            $query->where('logistic_service_cv_id', $this->id);
        })->count();
    }

    /*Get name with tender pending - Tenders which still allow bidding/applications*/
    public function getNameWithTendersPendingCountAttribute()
    {
        return __('code_value.'. $this->id) . ' (' . number_0_format($this->getTendersPendingCountAttribute()) . ')';
    }



    /*Get count of pending offers per logistic service type (Offers which still allow bidding)*/
    public function getOffersPendingCountAttribute()
    {
        $tenders = new OfferRepository();
        return $tenders->queryFilterForOfferSearch()->whereHas('logisticService', function($query) {
            $query->where('logistic_service_cv_id', $this->id);
        })->count();
    }

    /*Get name with offer pending - Offers which still allow applications*/
    public function getNameWithOffersPendingCountAttribute()
    {
        return __('code_value.'. $this->id) . ' (' . number_0_format($this->getOffersPendingCountAttribute()) . ')';
    }

    /**
     * get the corresponding counts for the forums
     * @return string
     */
    public function getForumsCountAttribute()
    {
        if($this->forums->count() > 0) {
            return $this->forums->count();
        }else{
            return "0";
        }
    }

    /**
     * get the number of forum threads
     * @return string
     */
    public function getThreadsCountAttribute()
    {
        if(isset($this->forums->first()->threads)) {
            if ($this->forums->first()->threads->count() > 0) {
                return $this->forums->first()->threads->count();
            } else {
                return "0";
            }
        }else{
            return "0";
        }
    }
}