<?php

namespace App\Repositories\Package;

use App\Models\Package\Package;
use App\Repositories\BaseRepository;

class PackageRepository extends BaseRepository
{

    const MODEL = Package::class;
    public function __construct()
    {

    }



    public function attachPackageUser()
    {

    }

    public function getPrimaryLevelPackages()
    {
        $packages = Package::where('category','Elimu ya msingi')->get();

        return $packages;
    }
    public function getSecondaryLevelPackages()
    {
        $packages = Package::where('category','Elimu ya sekondari')->get();

        return $packages;
    }
    public function getExtraPrimaryLevelPackages()
    {
        $packages = Package::where('category','Ziada elimu ya msingi')->get();

        return $packages;
    }
    public function getExtralSecondaryLevelPackages()
    {
        $packages = Package::where('category','Ziada elimu ya sekondari')->get();

        return $packages;
    }



}