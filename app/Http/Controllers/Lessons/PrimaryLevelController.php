<?php

namespace App\Http\Controllers\Lessons;

use App\Http\Controllers\Controller;
use App\Models\Package\Package;
use App\Repositories\Package\PackageRepository;
use Illuminate\Http\Request;

class PrimaryLevelController extends Controller
{
    //

    protected $packages;
    public function __construct()
    {

        $this->packages = new PackageRepository();
    }

    public function index()
    {
        return view('lessons.primary_level.index');
    }

    public function view($package)
    {


        $package = $this->packages->getOneByUuid($package);
        return view('lessons.primary_level.show.show')
            ->with('package',$package);
    }
}
