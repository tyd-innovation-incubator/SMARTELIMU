<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class RegionsTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {



        $this->disableForeignKeys("regions");
        $this->delete('regions');
        

            $regions = \App\Models\Sysdef\Region::firstOrCreate(
                array (
                    'id' => 1,
                    'name' => 'Arusha',
                    'country_id' => 1,
                    'hasc' => 'TZ.AS',
                )
            ) ;

        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 2,
                'name' => 'Dar es Salaam',
                'country_id' => 1,
                'hasc' => 'TZ.DS',
            )
        ) ;

        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 3,
                'name' => 'Dodoma',
                'country_id' => 1,
                'hasc' => 'TZ.DO',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 4,
                'name' => 'Geita',
                'country_id' => 1,
                'hasc' => 'TZ.GE',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 5,
                'name' => 'Iringa',
                'country_id' => 1,
                'hasc' => 'TZ.IG',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 6,
                'name' => 'Kagera',
                'country_id' => 1,
                'hasc' => 'TZ.KG',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 7,
                'name' => 'Katavi',
                'country_id' => 1,
                'hasc' => 'TZ.KA',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 8,
                'name' => 'Kigoma',
                'country_id' => 1,
                'hasc' => 'TZ.KM',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 9,
                'name' => 'Kilimanjaro',
                'country_id' => 1,
                'hasc' => 'TZ.KL',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 10,
                'name' => 'Lindi',
                'country_id' => 1,
                'hasc' => 'TZ.LI',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 11,
                'name' => 'Manyara',
                'country_id' => 1,
                'hasc' => 'TZ.MY',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 12,
                'name' => 'Mara',
                'country_id' => 1,
                'hasc' => 'TZ.MA',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 13,
                'name' => 'Mbeya',
                'country_id' => 1,
                'hasc' => 'TZ.MB',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 14,
                'name' => 'Morogoro',
                'country_id' => 1,
                'hasc' => 'TZ.MO',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 15,
                'name' => 'Mtwara',
                'country_id' => 1,
                'hasc' => 'TZ.MT',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 16,
                'name' => 'Mwanza',
                'country_id' => 1,
                'hasc' => 'TZ.MZ',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 17,
                'name' => 'Njombe',
                'country_id' => 1,
                'hasc' => 'TZ.NJ',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 18,
                'name' => 'Pemba North',
                'country_id' => 1,
                'hasc' => 'TZ.PN',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 19,
                'name' => 'Pemba South',
                'country_id' => 1,
                'hasc' => 'TZ.PS',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 20,
                'name' => 'Pwani',
                'country_id' => 1,
                'hasc' => 'TZ.PW',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 21,
                'name' => 'Rukwa',
                'country_id' => 1,
                'hasc' => 'TZ.RU',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 22,
                'name' => 'Ruvuma',
                'country_id' => 1,
                'hasc' => 'TZ.RV',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 23,
                'name' => 'Shinyanga',
                'country_id' => 1,
                'hasc' => 'TZ.SY',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 24,
                'name' => 'Simiyu',
                'country_id' => 1,
                'hasc' => 'TZ.SI',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 25,
                'name' => 'Singida',
                'country_id' => 1,
                'hasc' => 'TZ.SD',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 26,
                'name' => 'Tabora',
                'country_id' => 1,
                'hasc' => 'TZ.TB',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 27,
                'name' => 'Tanga',
                'country_id' => 1,
                'hasc' => 'TZ.TN',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 28,
                'name' => 'Zanzibar North',
                'country_id' => 1,
                'hasc' => 'TZ.ZN',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 29,
                'name' => 'Zanzibar South and Central',
                'country_id' => 1,
                'hasc' => 'TZ.ZS',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 30,
                'name' => 'Zanzibar West',
                'country_id' => 1,
                'hasc' => 'TZ.ZW',
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 31,
                'name' => 'Songwe',
                'country_id' => 1,
                'hasc' => NULL,
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 32,
                'name' => 'Unguja South',
                'country_id' => 1,
                'hasc' => NULL,
            )
        ) ;
        $regions = \App\Models\Sysdef\Region::firstOrCreate(
            array (
                'id' => 33,
                'name' => 'Unguja North',
                'country_id' => 1,
                'hasc' => NULL,
            )
        ) ;


        $this->enableForeignKeys("regions");
        
    }
}