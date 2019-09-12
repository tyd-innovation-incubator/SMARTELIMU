<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class CodesTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $this->disableForeignKeys("codes");
        $this->delete('codes');

        \DB::table('codes')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Gender',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Account Category',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Package Category',
            ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Primary Level',
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Secondary Level',
                ),
            5 =>
                array (
                    'id' => 6,
                    'name' => 'Extra Primary Level',
                ),
            6 =>
                array (
                    'id' => 7,
                    'name' => 'Extra Secondary Level',
                ),
            7 =>
                array (
                    'id' => 8,
                    'name' => 'Payment Aggregator',

                ),


        ));
        $this->enableForeignKeys("codes");

    }
}
