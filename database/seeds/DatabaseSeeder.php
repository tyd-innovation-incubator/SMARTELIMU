<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
//        $this->call(PermissionGroupTableSeeder::class);
//        $this->call(PermissionsTableSeeder::class);
//        $this->call(PermissionRoleTableSeeder::class);
//        $this->call(RoleChargesTableSeeder::class);
        $this->call(CodesTableSeeder::class);
        $this->call(CodeValuesTableSeeder::class);
//        $this->call(CodeValueCodeTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);



    }
}
