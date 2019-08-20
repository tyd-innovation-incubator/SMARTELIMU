<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class CodeValueCodeTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        $this->disableForeignKeys("code_value_code");
        $this->delete('code_value_code');
        
        \DB::table('code_value_code')->insert(array (
            0 => 
            array (
                'id' => 27,
                'code_value_id' => 114,
                'code_id' => 34,
                'iscategory' => 0,
            ),
            1 => 
            array (
                'id' => 1,
                'code_value_id' => 2,
                'code_id' => 2,
                'iscategory' => 0,
            ),
            2 => 
            array (
                'id' => 2,
                'code_value_id' => 5,
                'code_id' => 5,
                'iscategory' => 0,
            ),
            3 => 
            array (
                'id' => 3,
                'code_value_id' => 5,
                'code_id' => 6,
                'iscategory' => 0,
            ),
            4 => 
            array (
                'id' => 4,
                'code_value_id' => 5,
                'code_id' => 7,
                'iscategory' => 0,
            ),
            5 => 
            array (
                'id' => 5,
                'code_value_id' => 5,
                'code_id' => 8,
                'iscategory' => 0,
            ),
            6 => 
            array (
                'id' => 6,
                'code_value_id' => 5,
                'code_id' => 9,
                'iscategory' => 0,
            ),
            7 => 
            array (
                'id' => 7,
                'code_value_id' => 5,
                'code_id' => 10,
                'iscategory' => 0,
            ),
            8 => 
            array (
                'id' => 8,
                'code_value_id' => 5,
                'code_id' => 11,
                'iscategory' => 0,
            ),
            9 => 
            array (
                'id' => 9,
                'code_value_id' => 5,
                'code_id' => 12,
                'iscategory' => 0,
            ),
            10 => 
            array (
                'id' => 10,
                'code_value_id' => 6,
                'code_id' => 13,
                'iscategory' => 0,
            ),
            11 => 
            array (
                'id' => 11,
                'code_value_id' => 3,
                'code_id' => 17,
                'iscategory' => 0,
            ),
            12 => 
            array (
                'id' => 12,
                'code_value_id' => 15,
                'code_id' => 18,
                'iscategory' => 0,
            ),
            13 => 
            array (
                'id' => 13,
                'code_value_id' => 7,
                'code_id' => 14,
                'iscategory' => 1,
            ),
            14 => 
            array (
                'id' => 14,
                'code_value_id' => 7,
                'code_id' => 15,
                'iscategory' => 0,
            ),
            15 => 
            array (
                'id' => 15,
                'code_value_id' => 9,
                'code_id' => 16,
                'iscategory' => 0,
            ),
            16 => 
            array (
                'id' => 16,
                'code_value_id' => 7,
                'code_id' => 19,
                'iscategory' => 0,
            ),
            17 => 
            array (
                'id' => 17,
                'code_value_id' => 7,
                'code_id' => 20,
                'iscategory' => 0,
            ),
            18 => 
            array (
                'id' => 18,
                'code_value_id' => 11,
                'code_id' => 21,
                'iscategory' => 0,
            ),
            19 => 
            array (
                'id' => 19,
                'code_value_id' => 89,
                'code_id' => 2,
                'iscategory' => 0,
            ),
            20 => 
            array (
                'id' => 20,
                'code_value_id' => 92,
                'code_id' => 27,
                'iscategory' => 0,
            ),
            21 => 
            array (
                'id' => 21,
                'code_value_id' => 93,
                'code_id' => 26,
                'iscategory' => 0,
            ),
            22 => 
            array (
                'id' => 22,
                'code_value_id' => 94,
                'code_id' => 25,
                'iscategory' => 0,
            ),
            23 => 
            array (
                'id' => 23,
                'code_value_id' => 101,
                'code_id' => 28,
                'iscategory' => 0,
            ),
            24 => 
            array (
                'id' => 24,
                'code_value_id' => 108,
                'code_id' => 32,
                'iscategory' => 0,
            ),
            25 => 
            array (
                'id' => 25,
                'code_value_id' => 109,
                'code_id' => 33,
                'iscategory' => 0,
            ),
            26 => 
            array (
                'id' => 26,
                'code_value_id' => 113,
                'code_id' => 31,
                'iscategory' => 0,
            ),
            27 =>
                array (
                    'id' => 28,
                    'code_value_id' => 129,
                    'code_id' => 39,
                    'iscategory' => 1,
                ),

            28 =>
                array (
                    'id' => 29,
                    'code_value_id' => 266,
                    'code_id' => 59,
                    'iscategory' => 1,
                ),

            29 =>
                array (
                    'id' => 30,
                    'code_value_id' => 135,
                    'code_id' => 57,
                    'iscategory' => 1,
                ),

            30 =>
                array (
                    'id' => 31,
                    'code_value_id' => 137,
                    'code_id' => 58,
                    'iscategory' => 1,
                ),
        ));
        $this->enableForeignKeys("code_value_code");
        
    }
}