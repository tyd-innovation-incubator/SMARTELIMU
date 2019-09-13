<?php

namespace App\Http\Controllers\Payment;

use App\Events\Payment\PaidInvoice;
use App\Http\Controllers\Controller;
use App\Models\Customer\Package;
use App\Models\Package\Invoice;
use App\Repositories\Customer\CustomerRepository;
use App\Repositories\Package\InvoiceRepository;
use App\Repositories\Payment\PaymentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class PaymentController extends Controller
{

    //
    protected  $payments;
    protected $invoices;
    protected $customer;
    public function __construct()
    {
        $this->payments = new PaymentRepository();
        $this->invoices = new InvoiceRepository();
//        $this->customer = new CustomerRepository();
    }

//    public function displayRechargeForm()
//    {
//
//        $packages = Package::all();
//        return view('payments.recharge.index')
//            ->with('packages',$packages);
//    }
//
//
//    public  function storeRecharge(Request $request)
//    {
//
//
//        $input = [
//            'customer_id' => access()->user()->customer->id,
//            'amount' => $request->total,
//            'recharge_quantity' =>$request->recharge_quantity,
//            'ispaid' => 0,
//        ];
//
//        $invoice = $this->invoices->store($input);
//
//        return redirect()->route('payment.invoice',$invoice);
//    }
//
//    public function displayInvoice(Invoice $invoice)
//    {
//        return view('payments.recharge.invoice')
//            ->with('invoice',$invoice);
//    }
//
//
//    public function removeInvoice(Invoice $invoice)
//    {
//        dd($invoice);
//        DB :: transaction(function() use ($invoice){
//            $invoice->delete();
//        });
//    }
//
//    public function rechargeHistory()
//    {
//
//        return view('payments.recharge.history');
//
//    }
//
//
//
//
//    public function getInvoicesForDatatable()
//    {
//        $invoices = $this->invoices->getInvoiceForDatatable();
//
//        return DataTables::of($invoices)
//            ->addIndexColumn()
////            ->editColumn('created_at', function ($invoices) {
////                return $invoices->created_at->format('d/m/Y');
////            })
//
//
//            ->addColumn('status', function ($invoices) {
//                return ($invoices->active_status_label);
//            })
////            ->addColumn('status', function ($invoices) {
////                return ($invoices->ispaid == 1)?__('label.service.invoice.cancelled'):__('label.service.invoice.not');
////            })
//            ->addColumn('actions', function ($invoices) {
////                if($invoices->ispaid == 0){
////                    return '<a href="'.route('payment.invoice', $invoices->uuid).'">'.trans('label.view').'</a> '.$invoices->remove_button;
//
//                    return '<a href="'.route('payment.invoice', $invoices->uuid).'">'.trans('label.view').'</a>';
//
//            })
//            ->rawColumns(['actions', 'status'])
//            ->make(true);
//    }


    public function makePayment(Invoice $invoice)
    {
        return $this->payments->pesapalInit($invoice);
    }


    /**
     * @param Request $request
     * @return mixed
     */
    public function paymentconfirmation(Request $request)
    {
        $pesapal_transaction_tracking_id = $request->get('pesapal_transaction_tracking_id');
        $pesapal_merchant_reference = $request->get('pesapal_merchant_reference');

        //update invoice
        $invoice = $this->invoices->query()->where('uuid', $pesapal_merchant_reference)->first();
        $invoice->ispaid = 1;
        $invoice->save();

        $payment = $this->payments->pesapalConfirm($request, $pesapal_transaction_tracking_id, $pesapal_merchant_reference,$invoice);

        //updates payments according to portal service
//        switch ($invoice->portal_service_cv_id) {
//            case 116 :
//                //invoice
//                break;
//            case 115 :
//                //subscription
//                $this->subscription->subscribe($invoice);
//                $this->subscription->update($payment);
//                break;
//        }

        return redirect()->route('package.invoice_profile', $invoice->uuid)->withFlashSuccess(__('alert.service.invoice.invoice_paid'));
    }
}
