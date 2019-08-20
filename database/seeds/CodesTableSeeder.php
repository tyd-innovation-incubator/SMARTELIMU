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


        ));
        $this->enableForeignKeys("codes");

    }
}
