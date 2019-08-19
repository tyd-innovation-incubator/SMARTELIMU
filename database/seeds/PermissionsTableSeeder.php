<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class PermissionsTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $this->disableForeignKeys("permissions");
        $this->delete('permissions');

        \DB::table('permissions')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'all_functions',
                    'display_name' => 'All Functions',
                    'description' => NULL,
                    'permission_group_id' =>1,
                    'ischecker' => 0,
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'manage_faqs',
                    'display_name' => 'Manage FAQs',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'manage_code_values',
                    'display_name' => 'Manage Code Values i.e Dictionaries',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'manage_system_definitions',
                    'display_name' => 'Manage System Definitions',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'manage_role_permissions',
                    'display_name' => 'Manage Role and Permissions',
                    'description' => NULL,
                    'permission_group_id' =>5,
                    'ischecker' => 0,
                ),

        ));
        $this->enableForeignKeys("permissions");

    }
}