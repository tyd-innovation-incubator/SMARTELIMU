<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;
use Illuminate\Support\Facades\DB;

class PermissionRoleTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $this->disableForeignKeys("permission_role");
//        $this->delete('permission_role');

        $count = DB::table('permission_role')->count();
        $reset = 1;//TODO: After first seed on live should set to 0 / comment all seed

        if ($count == 0 && $reset == 1){

            \DB::table('permission_role')->insert(array (
                0 =>
                    array (
                        'permission_id' => 1,
                        'role_id' => 5,
                    ),
                1 =>
                    array (
                        'permission_id' => 10,
                        'role_id' => 2,
                    ),
                2 =>
                    array (

                        'permission_id' => 11,
                        'role_id' => 2,
                    ),
                3 =>
                    array (
                        'permission_id' => 12,
                        'role_id' => 2,
                    ),
                4 =>
                    array (
                        'permission_id' => 13,
                        'role_id' => 1,
                    ),
                5 =>
                    array (
                        'permission_id' => 13,
                        'role_id' => 2,
                    ),
                6 =>
                    array (
                        'permission_id' => 13,
                        'role_id' => 7,
                    ),
                7 =>
                    array (
                        'permission_id' => 14,
                        'role_id' => 1,
                    ),
                8 =>
                    array (
                        'permission_id' => 14,
                        'role_id' => 2,
                    ),
                9 =>
                    array (
                        'permission_id' => 14,
                        'role_id' => 7,
                    ),
                10 =>
                    array (
                        'permission_id' => 15,
                        'role_id' => 1,
                    ),
                11 =>
                    array (
                        'permission_id' => 15,
                        'role_id' => 2,
                    ),
                12 =>
                    array (
                        'permission_id' => 15,
                        'role_id' => 7,
                    ),
                13 =>
                    array (
                        'permission_id' => 16,
                        'role_id' => 1,
                    ),
                14 =>
                    array (
                        'permission_id' => 16,
                        'role_id' => 2,
                    ),
                15 =>
                    array (
                        'permission_id' => 16,
                        'role_id' => 7,
                    ),
                16 =>
                    array (
                        'permission_id' => 17,
                        'role_id' => 1,
                    ),
                17 =>
                    array (
                        'permission_id' => 17,
                        'role_id' => 2,
                    ),
                18 =>
                    array (
                        'permission_id' => 17,
                        'role_id' => 7,
                    ),
                19 =>
                    array (
                        'permission_id' => 18,
                        'role_id' => 1,
                    ),
                20 =>
                    array (
                        'permission_id' => 18,
                        'role_id' => 2,
                    ),
                21 =>
                    array (
                        'permission_id' => 18,
                        'role_id' => 7,
                    ),
                22 =>
                    array (
                        'permission_id' => 19,
                        'role_id' => 1,
                    ),
                23 =>
                    array (
                        'permission_id' => 19,
                        'role_id' => 2,
                    ),
                24 =>
                    array (
                        'permission_id' => 19,
                        'role_id' => 7,
                    ),
                25 =>
                    array (
                        'permission_id' => 20,
                        'role_id' => 2,
                    ),
                26 =>
                    array (
                        'permission_id' => 20,
                        'role_id' => 7,
                    ),
                27 =>
                    array (
                        'permission_id' => 21,
                        'role_id' => 7,
                    ),
                28 =>
                    array (
                        'permission_id' => 28,
                        'role_id' => 1,
                    ),
                29 =>
                    array (
                        'permission_id' => 28,
                        'role_id' => 2,
                    ),
                30 =>
                    array (
                        'permission_id' => 28,
                        'role_id' => 7,
                    ),
                31 =>
                    array (
                        'permission_id' => 29,
                        'role_id' => 1,
                    ),
                32 =>
                    array (
                        'permission_id' => 29,
                        'role_id' => 2,
                    ),
                33 =>
                    array (
                        'permission_id' => 29,
                        'role_id' => 7,
                    ),
                34 =>
                    array (
                        'permission_id' => 30,
                        'role_id' => 1,
                    ),
                35 =>
                    array (
                        'permission_id' => 30,
                        'role_id' => 2,
                    ),
                36 =>
                    array (
                        'permission_id' => 30,
                        'role_id' => 7,
                    ),
                37 =>
                    array (
                        'permission_id' => 13,
                        'role_id' => 5,
                    ),
                38 =>
                    array (
                        'permission_id' => 14,
                        'role_id' => 5,
                    ),
                39 =>
                    array (
                        'permission_id' => 30,
                        'role_id' => 5,
                    ),
                40 =>
                    array (
                        'permission_id' => 15,
                        'role_id' => 5,
                    ),
                41 =>
                    array (
                        'permission_id' => 16,
                        'role_id' => 5,
                    ),
                42 =>
                    array (
                        'permission_id' => 17,
                        'role_id' => 5,
                    ),
                43 =>
                    array (
                        'permission_id' => 18,
                        'role_id' => 5,
                    ),
                44 =>
                    array (
                        'permission_id' => 19,
                        'role_id' => 5,
                    ),
                45 =>
                    array (
                        'permission_id' => 20,
                        'role_id' => 5,
                    ),
                46 =>
                    array (
                        'permission_id' => 21,
                        'role_id' => 5,
                    ),
                47 =>
                    array (
                        'permission_id' => 22,
                        'role_id' => 5,
                    ),
                48 =>
                    array (
                        'permission_id' => 23,
                        'role_id' => 5,
                    ),
                49 =>
                    array (
                        'permission_id' => 24,
                        'role_id' => 5,
                    ),
                50 =>
                    array (
                        'permission_id' => 25,
                        'role_id' => 5,
                    ),
                51 =>
                    array (
                        'permission_id' => 26,
                        'role_id' => 5,
                    ),
                52 =>
                    array (
                        'permission_id' => 27,
                        'role_id' => 5,
                    ),
                53 =>
                    array (
                        'permission_id' => 28,
                        'role_id' => 5,
                    ),
                54 =>
                    array (
                        'permission_id' => 29,
                        'role_id' => 5,
                    ),
                55 =>
                    array (
                        'permission_id' => 2,
                        'role_id' => 5,
                    ),

                     56 =>
                    array (
                        'permission_id' => 3,
                        'role_id' => 5,
                    ),
                 57 =>
                    array (
                        'permission_id' => 4,
                        'role_id' => 5,
                    ),
                 58 =>
                    array (
                        'permission_id' => 5,
                        'role_id' => 5,
                    ),
                 59 =>
                    array (
                        'permission_id' => 6,
                        'role_id' => 5,
                    ),
                60 =>
                    array (
                        'permission_id' => 7,
                        'role_id' => 5,
                    ),
                61 =>
                    array (
                        'permission_id' => 8,
                        'role_id' => 5,
                    ),
                62 =>
                    array (
                        'permission_id' => 9,
                        'role_id' => 5,
                    ),
                63 =>
                    array (
                        'permission_id' => 31,
                        'role_id' => 1,
                    ),
                64 =>
                    array (
                        'permission_id' => 31,
                        'role_id' => 2,
                    ),
                65 =>
                    array (
                        'permission_id' => 31,
                        'role_id' => 5,
                    ),
                66 =>
                    array (
                        'permission_id' => 31,
                        'role_id' => 7,
                    ),
                67 =>
                    array (
                        'permission_id' => 32,
                        'role_id' => 5,
                    ),

                68 =>
                    array (
                        'permission_id' => 33,
                        'role_id' => 5,
                    ),
                69 =>
                    array (
                        'permission_id' => 34,
                        'role_id' => 5,
                    ),
                70 =>
                    array (
                        'permission_id' => 35,
                        'role_id' => 5,
                    ),

                71 =>
                    array (
                        'permission_id' => 36,
                        'role_id' => 5,
                    ),

                72 =>
                    array (
                        'permission_id' => 37,
                        'role_id' => 5,
                    ),

            ));

            /*Autos sync permissions for Free-> Business -> Premium*/
            if($count == 0 && $reset == 1){
                $role_repo = new \App\Repositories\Access\RoleRepository();
                $role_repo->autoSyncPermissionRole();
            }


        }
        $this->enableForeignKeys("permission_role");



    }
}