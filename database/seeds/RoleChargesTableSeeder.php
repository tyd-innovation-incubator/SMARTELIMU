<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class RoleChargesTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $this->disableForeignKeys("role_charges");
        $this->delete('role_charges');
        
        \DB::table('role_charges')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 3,
                'amount' => '10000.00',
                'currency_id' => 1,
                'payment_period_cv_id' => 124,
                'isfree' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 3,
                'amount' => '45000.00',
                'currency_id' => 1,
                'payment_period_cv_id' => 125,
                'isfree' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'amount' => '65000.00',
                'currency_id' => 1,
                'payment_period_cv_id' => 126,
                'isfree' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 4,
                'amount' => '18000.00',
                'currency_id' => 1,
                'payment_period_cv_id' => 124,
                'isfree' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 4,
                'amount' => '90000.00',
                'currency_id' => 1,
                'payment_period_cv_id' => 125,
                'isfree' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'role_id' => 4,
                'amount' => '130000.00',
                'currency_id' => 1,
                'payment_period_cv_id' => 126,
                'isfree' => 0,
            ),
        ));
        $this->enableForeignKeys("role_charges");
        
    }
}