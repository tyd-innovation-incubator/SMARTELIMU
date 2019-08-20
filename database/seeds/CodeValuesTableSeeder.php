<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class CodeValuesTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        $this->disableForeignKeys("code_values");
        $condition = 'where isactive = 1';
        $this->deleteWithCondition('code_values', $condition);

        \DB::table('code_values')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'code_id' => 1,
                    'values' => 'Male',
                    'reference' => 'PACA',
                    'isactive' => 1,
                ),

            1 =>
                array (
                    'id' => 2,
                    'code_id' => 1,
                    'values' => 'Female',
                    'reference' => 'UASPR',
                    'isactive' => 1,
                ),
            2 =>
                array (
                    'id' => 3,
                    'code_id' => 2,
                    'values' => 'Teacher',
                    'reference' => 'UACOW',
                    'isactive' => 1,
                ),
            3 =>
                array (
                    'id' => 4,
                    'code_id' => 2,
                    'values' => 'Self Candidate',
                    'reference' => 'UACOW',
                    'isactive' => 1,
                ),

        ));
        $this->enableForeignKeys("code_values");

    }
}
