<?php

namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use App\Models\Package\Package;
use App\Repositories\Package\InvoiceRepository;
use App\Repositories\Package\PackageRepository;
use App\Repositories\Package\PackageUserRepository;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    //

    protected  $packages;
    protected  $package_user;
    protected $invoices;
    public function __construct()
    {
        $this->middleware('auth');
        $this->packages = new PackageRepository();
        $this->package_user = new PackageUserRepository();

        $this->invoices = new InvoiceRepository();
    }

    public function createInvoice($package)
    {

        $package = $this->packages->getOneByUuid($package);
        $invoice = $this->invoices->store($package);
        $package_user = $this->package_user->store($package);

     return redirect()->route('package.invoice_profile',$invoice->uuid);
    }

    public function invoiceProfile($uuid)
    {
        $invoice = $this->invoices->getOneByUuid($uuid);
        return view('lessons.package.invoice')
            ->with('invoice',$invoice);
    }
}
