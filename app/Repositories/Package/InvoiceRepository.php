<?php

namespace App\Repositories\Package;

use App\Models\Package\Invoice;
use App\Repositories\BaseRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class InvoiceRepository extends BaseRepository
{
    const MODEL = Invoice::class;

    /**
     * get all invoices by user
     * @param $portal_service_cv_id
     * @return mixed
     */
    public function getByPortalServiceForDatatable($portal_service_cv_id){
        return $this->query()
            ->where('portal_service_cv_id',$portal_service_cv_id)
            ->where('user_id', access()->user()->id);
    }

    /**
     * @param $input
     * @return mixed
     */
    public function store($package){
        $user = access()->user();
        return DB::transaction(function () use($package,$user){
            $invoice = $this->query()->create([
                'user_id' => $user->id,
                'package_id' => $package->id,
                'amount' => $package->price,
                'ispaid' => 0,
                'mature_date' => Carbon::now()->addDays(3),
                ]);
            return $invoice;
        });
    }

    /**
     *
     */
    public function update(){
        return  DB :: transaction(function(){

        });
    }

    /**
     * @param $invoice
     */
    public function destroy($invoice){
        DB :: transaction(function() use ($invoice){
            //delete the attached 'Advertisement'
            if(isset($invoice->ad->uuid)) {
                $ads = new AdRepository();
                $ads->destroy($invoice->ad);
            }
            $invoice->delete();
        });
    }

    /**
     * Delete invoice which is matured and not paid
     */
    public function deleteMaturedNotPaid(){
        $now = Carbon::now();
        $invoices = $this->query()
            ->where('ispaid', 0)
            ->where('mature_date', '<', $now)
        ->get();
        foreach ($invoices as $invoice) {
            $this->destroy($invoice);
        }
    }
}
