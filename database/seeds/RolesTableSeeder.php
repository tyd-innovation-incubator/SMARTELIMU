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
                'name' => 'Administrator',
                'description' => 'users visiting the logistic portal',
                'isfree' => 1,
                'isadministrative' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'End User',
                'description' => 'registered user',
                'isfree' => 1,
                'isadministrative' => 0,
            ),

        ));
        $this->enableForeignKeys("roles");

    }
}