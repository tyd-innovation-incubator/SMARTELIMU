<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 9/23/19
 * Time: 11:05 AM
 */

namespace App\Repositories\Package;


use App\Models\Package\PackageUser;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class PackageUserRepository extends BaseRepository
{

    const  MODEL = PackageUser::class;

    public function __construct()
    {

    }


    public function store($package)
    {
        $user = access()->user();
        return DB::transaction(function () use($package,$user){
            $package_user = $this->query()->create([
                'user_id' => $user->id,
                'package_id' => $package->id,

            ]);
            return $package_user;
        });
    }
}