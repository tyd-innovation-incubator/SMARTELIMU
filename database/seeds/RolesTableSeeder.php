<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class RolesTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $this->disableForeignKeys("roles");
        $this->delete('roles');
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Guest',
                'description' => 'users visiting the logistic portal',
                'isfree' => 1,
                'isadministrative' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Free mode',
                'description' => 'registered user',
                'isfree' => 1,
                'isadministrative' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Business',
                'description' => '',
                'isfree' => 0,
                'isadministrative' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Premium',
                'description' => '',
                'isfree' => 0,
                'isadministrative' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Administrator',
                'description' => 'Registered user working at TPSF administering the portal',
                'isfree' => 1,
                'isadministrative' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Customer Care',
                'description' => 'Registered user working at TPSF serving customer’s queries',
                'isfree' => 1,
                'isadministrative' => 1,
            ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Association',
                    'description' => 'Association user',
                    'isfree' => 1,
                    'isadministrative' => 2,
                ),
        ));
        $this->enableForeignKeys("roles");

    }
}