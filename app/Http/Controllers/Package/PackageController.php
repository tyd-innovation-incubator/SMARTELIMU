<?php

namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use App\Models\Package\Package;
use App\Repositories\Package\InvoiceRepository;
use App\Repositories\Package\PackageRepository;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //

    protected  $packages;
    protected $invoices;
    public function __construct()
    {
        $this->packages = new PackageRepository();
        $this->invoices = new InvoiceRepository();
    }

    public function createInvoice($package)
    {

        $package = $this->packages->getOneByUuid($package);
        $invoice = $this->invoices->store($package);

     return redirect()->route('package.invoice_profile',$invoice->uuid);
    }

    public function invoiceProfile($uuid)
    {
        $invoice = $this->invoices->getOneByUuid($uuid);
        return view('lessons.package.invoice')
            ->with('invoice',$invoice);
    }
}
