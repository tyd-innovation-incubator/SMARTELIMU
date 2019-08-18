<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 6/19/19
 * Time: 7:22 PM
 */

namespace App\Repositories\Sysdef;


use App\Models\Sysdef\UserVisit;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class UserVisitRepository extends BaseRepository
{
    const MODEL = UserVisit::class;
    public function __construct()
    {


    }


    public function store($visit)
    {
        return  DB :: transaction(function() use ($visit){
            $user_visit = $this->query()->create([
                'visit_count'=>$visit->count,
                'date' =>count($visit->dates) ? $visit->dates : null
            ]);
            return $user_visit;
    });

    }


}