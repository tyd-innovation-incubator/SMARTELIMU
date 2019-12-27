<?php

namespace App\Http\Controllers\Lessons;

use App\Http\Controllers\Controller;
use App\Models\Package\Package;
use App\Models\Package\Syllabus;
use App\Repositories\Package\PackageRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $packages = Package::where('category',5)->where('status',1)->paginate(9);
        $primary_level = $this->packages->getPrimaryLevelPackages();
        $secondary_level = $this->packages->getSecondaryLevelPackages();
        $extra_primary_level = $this->packages->getExtraPrimaryLevelPackages();
        $extra_secondary_level = $this->packages->getExtralSecondaryLevelPackages();

            return view('lessons.primary_level.includes.package_list')
                ->with('packages',$packages)
                ->with('primary_level',$primary_level)
                ->with('secondary_level',$secondary_level)
                ->with('extra_primary_level',$extra_primary_level)
                ->with('extra_secondary_level',$extra_secondary_level);

    }

    public function view($package)
    {


        $package = $this->packages->getOneByUuid($package);
        $syllabus = Syllabus::where('name',$package->name)->first();
        return view('lessons.primary_level.show.show')
            ->with('package',$package)
            ->with('syllabus',$syllabus);
    }

    public function search(Request $request)
    {

        $keyword = $request->input('keyword');
        $packages = Package::where('name', 'LIKE','%'.$keyword.'%')->paginate(9);
        $primary_level = $this->packages->getPrimaryLevelPackages();
        $secondary_level = $this->packages->getSecondaryLevelPackages();
        $extra_primary_level = $this->packages->getExtraPrimaryLevelPackages();
        $extra_secondary_level = $this->packages->getExtralSecondaryLevelPackages();
        return view('lessons.primary_level.includes.results_search_packaged')
            ->with('packages',$packages)
            ->with('primary_level',$primary_level)
            ->with('secondary_level',$secondary_level)
            ->with('extra_primary_level',$extra_primary_level)
            ->with('extra_secondary_level',$extra_secondary_level);
    }
}
