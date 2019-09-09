<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class CountriesTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        $this->disableForeignKeys("countries");
        $this->delete('countries');


        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 1,
                'name' => 'Tanzania',
                'code' => 'TZ',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 2,
                'name' => 'Andorra',
                'code' => 'AD',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 3,
                'name' => 'United Arab Emirates',
                'code' => 'AE',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 4,
                'name' => 'Afghanistan',
                'code' => 'AF',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 5,
                'name' => 'Antigua and Barbuda',
                'code' => 'AG',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 6,
                'name' => 'Anguilla',
                'code' => 'AI',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 7,
                'name' => 'Albania',
                'code' => 'AL',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 8,
                'name' => 'Armenia',
                'code' => 'AM',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 9,
                'name' => 'Angola',
                'code' => 'AO',
                'sort' => 7,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 10,
                'name' => 'Antarctica',
                'code' => 'AQ',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 11,
                'name' => 'Argentina',
                'code' => 'AR',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 12,
                'name' => 'American Samoa',
                'code' => 'AS',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 13,
                'name' => 'Austria',
                'code' => 'AT',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 14,
                'name' => 'Australia',
                'code' => 'AU',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 15,
                'name' => 'Aruba',
                'code' => 'AW',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 16,
                'name' => 'Åland Islands',
                'code' => 'AX',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 18,
                'name' => 'Bosnia and Herzegovina',
                'code' => 'BA',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 19,
                'name' => 'Barbados',
                'code' => 'BB',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 20,
                'name' => 'Bangladesh',
                'code' => 'BD',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 21,
                'name' => 'Belgium',
                'code' => 'BE',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 22,
                'name' => 'Burkina Faso',
                'code' => 'BF',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 23,
                'name' => 'Bulgaria',
                'code' => 'BG',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 24,
                'name' => 'Bahrain',
                'code' => 'BH',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 25,
                'name' => 'Burundi',
                'code' => 'BI',
                'sort' => 5,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 26,
                'name' => 'Benin',
                'code' => 'BJ',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 27,
                'name' => 'Saint Barthélemy',
                'code' => 'BL',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 28,
                'name' => 'Bermuda',
                'code' => 'BM',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 29,
                'name' => 'Brunei Darussalam',
                'code' => 'BN',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 30,
                'name' => 'Bolivia',
                'code' => 'BO',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 31,
                'name' => 'Caribbean Netherlands',
                'code' => 'BQ',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 32,
                'name' => 'Brazil',
                'code' => 'BR',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 33,
                'name' => 'Bahamas',
                'code' => 'BS',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 34,
                'name' => 'Bhutan',
                'code' => 'BT',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 35,
                'name' => 'Bouvet Island',
                'code' => 'BV',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 36,
                'name' => 'Botswana',
                'code' => 'BW',
                'sort' => 8,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 37,
                'name' => 'Belarus',
                'code' => 'BY',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 38,
                'name' => 'Belize',
                'code' => 'BZ',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 39,
                'name' => 'Canada',
                'code' => 'CA',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 40,
                'name' => 'Cocos (Keeling) Islands',
                'code' => 'CC',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 41,
                'name' => 'Congo, Democratic Republic of',
                'code' => 'CD',
                'sort' => 10,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 42,
                'name' => 'Central African Republic',
                'code' => 'CF',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 43,
                'name' => 'Congo',
                'code' => 'CG',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 44,
                'name' => 'Switzerland',
                'code' => 'CH',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 45,
                'name' => 'Côte d\'Ivoire',
                'code' => 'CI',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 46,
                'name' => 'Cook Islands',
                'code' => 'CK',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 47,
                'name' => 'Chile',
                'code' => 'CL',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 48,
                'name' => 'Cameroon',
                'code' => 'CM',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 49,
                'name' => 'China',
                'code' => 'CN',
                'sort' => 5
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 50,
                'name' => 'Colombia',
                'code' => 'CO',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 51,
                'name' => 'Costa Rica',
                'code' => 'CR',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 52,
                'name' => 'Cuba',
                'code' => 'CU',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 53,
                'name' => 'Cape Verde',
                'code' => 'CV',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 54,
                'name' => 'Curaçao',
                'code' => 'CW',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 55,
                'name' => 'Christmas Island',
                'code' => 'CX',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 56,
                'name' => 'Cyprus',
                'code' => 'CY',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 57,
                'name' => 'Czech Republic',
                'code' => 'CZ',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 58,
                'name' => 'Germany',
                'code' => 'DE',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 59,
                'name' => 'Djibouti',
                'code' => 'DJ',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 60,
                'name' => 'Denmark',
                'code' => 'DK',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 61,
                'name' => 'Dominica',
                'code' => 'DM',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 62,
                'name' => 'Dominican Republic',
                'code' => 'DO',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 63,
                'name' => 'Algeria',
                'code' => 'DZ',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 64,
                'name' => 'Ecuador',
                'code' => 'EC',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 65,
                'name' => 'Estonia',
                'code' => 'EE',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 66,
                'name' => 'Egypt',
                'code' => 'EG',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 67,
                'name' => 'Western Sahara',
                'code' => 'EH',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 68,
                'name' => 'Eritrea',
                'code' => 'ER',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 69,
                'name' => 'Spain',
                'code' => 'ES',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 70,
                'name' => 'Ethiopia',
                'code' => 'ET',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 71,
                'name' => 'Finland',
                'code' => 'FI',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 72,
                'name' => 'Fiji',
                'code' => 'FJ',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 73,
                'name' => 'Falkland Islands',
                'code' => 'FK',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 74,
                'name' => 'Micronesia, Federated States of',
                'code' => 'FM',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 75,
                'name' => 'Faroe Islands',
                'code' => 'FO',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 76,
                'name' => 'France',
                'code' => 'FR',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 77,
                'name' => 'Gabon',
                'code' => 'GA',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 78,
                'name' => 'United Kingdom',
                'code' => 'GB',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 79,
                'name' => 'Grenada',
                'code' => 'GD',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 80,
                'name' => 'Georgia',
                'code' => 'GE',
                'sort' => null
            )
    );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 81,
                'name' => 'French Guiana',
                'code' => 'GF',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 82,
                'name' => 'Guernsey',
                'code' => 'GG',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 83,
                'name' => 'Ghana',
                'code' => 'GH',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 84,
                'name' => 'Gibraltar',
                'code' => 'GI',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 85,
                'name' => 'Greenland',
                'code' => 'GL',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 86,
                'name' => 'Gambia',
                'code' => 'GM',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 87,
                'name' => 'Guinea',
                'code' => 'GN',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 88,
                'name' => 'Guadeloupe',
                'code' => 'GP',
                'sort' => null
            )
    );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 89,
                'name' => 'Equatorial Guinea',
                'code' => 'GQ',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 90,
                'name' => 'Greece',
                'code' => 'GR',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 91,
                'name' => 'South Georgia and the South Sandwich Islands',
                'code' => 'GS',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 92,
                'name' => 'Guatemala',
                'code' => 'GT',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 93,
                'name' => 'Guam',
                'code' => 'GU',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 94,
                'name' => 'Guinea-Bissau',
                'code' => 'GW',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 95,
                'name' => 'Guyana',
                'code' => 'GY',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 96,
                'name' => 'Hong Kong',
                'code' => 'HK',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 97,
                'name' => 'Heard and McDonald Islands',
                'code' => 'HM',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 98,
                'name' => 'Honduras',
                'code' => 'HN',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 99,
                'name' => 'Croatia',
                'code' => 'HR',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 100,
                'name' => 'Haiti',
                'code' => 'HT',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 101,
                'name' => 'Hungary',
                'code' => 'HU',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 102,
                'name' => 'Indonesia',
                'code' => 'ID',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 103,
                'name' => 'Ireland',
                'code' => 'IE',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 104,
                'name' => 'Israel',
                'code' => 'IL',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 105,
                'name' => 'Isle of Man',
                'code' => 'IM',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 106,
                'name' => 'India',
                'code' => 'IN',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 107,
                'name' => 'British Indian Ocean Territory',
                'code' => 'IO',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 108,
                'name' => 'Iraq',
                'code' => 'IQ',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 109,
                'name' => 'Iran',
                'code' => 'IR',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 110,
                'name' => 'Iceland',
                'code' => 'IS',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 111,
                'name' => 'Italy',
                'code' => 'IT',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 112,
                'name' => 'Jersey',
                'code' => 'JE',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 113,
                'name' => 'Jamaica',
                'code' => 'JM',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 114,
                'name' => 'Jordan',
                'code' => 'JO',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 115,
                'name' => 'Japan',
                'code' => 'JP',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 116,
                'name' => 'Kenya',
                'code' => 'KE',
                'sort' => 2,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 117,
                'name' => 'Kyrgyzstan',
                'code' => 'KG',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 118,
                'name' => 'Cambodia',
                'code' => 'KH',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 119,
                'name' => 'Kiribati',
                'code' => 'KI',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 120,
                'name' => 'Comoros',
                'code' => 'KM',
                'sort' => 9,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 121,
                'name' => 'Saint Kitts and Nevis',
                'code' => 'KN',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 122,
                'name' => 'North Korea',
                'code' => 'KP',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 123,
                'name' => 'South Korea',
                'code' => 'KR',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 124,
                'name' => 'Kuwait',
                'code' => 'KW',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 125,
                'name' => 'Cayman Islands',
                'code' => 'KY',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 126,
                'name' => 'Kazakhstan',
                'code' => 'KZ',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 127,
                'name' => 'Lao People\'s Democratic Republic',
                'code' => 'LA',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 128,
                'name' => 'Lebanon',
                'code' => 'LB',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 130,
                'name' => 'Liechtenstein',
                'code' => 'LI',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 131,
                'name' => 'Sri Lanka',
                'code' => 'LK',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 132,
                'name' => 'Liberia',
                'code' => 'LR',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 133,
                'name' => 'Lesotho',
                'code' => 'LS',
                'sort' => 11,
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 134,
                'name' => 'Lithuania',
                'code' => 'LT',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 135,
                'name' => 'Luxembourg',
                'code' => 'LU',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 136,
                'name' => 'Latvia',
                'code' => 'LV',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 137,
                'name' => 'Libya',
                'code' => 'LY',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 138,
                'name' => 'Morocco',
                'code' => 'MA',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 139,
                'name' => 'Monaco',
                'code' => 'MC',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 140,
                'name' => 'Moldova',
                'code' => 'MD',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 141,
                'name' => 'Montenegro',
                'code' => 'ME',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 142,
                'name' => 'Saint-Martin (France)',
                'code' => 'MF',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 143,
                'name' => 'Madagascar',
                'code' => 'MG',
                'sort' => 12,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 144,
                'name' => 'Marshall Islands',
                'code' => 'MH',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 145,
                'name' => 'Macedonia',
                'code' => 'MK',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 146,
                'name' => 'Mali',
                'code' => 'ML',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 147,
                'name' => 'Myanmar',
                'code' => 'MM',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 148,
                'name' => 'Mongolia',
                'code' => 'MN',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 149,
                'name' => 'Macau',
                'code' => 'MO',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 150,
                'name' => 'Northern Mariana Islands',
                'code' => 'MP',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 151,
                'name' => 'Martinique',
                'code' => 'MQ',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 152,
                'name' => 'Mauritania',
                'code' => 'MR',
                'sort' => null,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 153,
                'name' => 'Montserrat',
                'code' => 'MS',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 155,
                'name' => 'Mauritius',
                'code' => 'MU',
                'sort' => 13,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 156,
                'name' => 'Maldives',
                'code' => 'MV',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 157,
                'name' => 'Malawi',
                'code' => 'MW',
                'sort' => 13,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 158,
                'name' => 'Mexico',
                'code' => 'MX',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 159,
                'name' => 'Malaysia',
                'code' => 'MY',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 160,
                'name' => 'Mozambique',
                'code' => 'MZ',
                'sort' => 14,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 162,
                'name' => 'New Caledonia',
                'code' => 'NC',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 163,
                'name' => 'Niger',
                'code' => 'NE',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 164,
                'name' => 'Norfolk Island',
                'code' => 'NF',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 165,
                'name' => 'Nigeria',
                'code' => 'NG',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 166,
                'name' => 'Nicaragua',
                'code' => 'NI',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 168,
                'name' => 'Norway',
                'code' => 'NO',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 169,
                'name' => 'Nepal',
                'code' => 'NP',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 170,
                'name' => 'Nauru',
                'code' => 'NR',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 171,
                'name' => 'Niue',
                'code' => 'NU',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 172,
                'name' => 'New Zealand',
                'code' => 'NZ',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 173,
                'name' => 'Oman',
                'code' => 'OM',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 174,
                'name' => 'Panama',
                'code' => 'PA',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 175,
                'name' => 'Peru',
                'code' => 'PE',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 176,
                'name' => 'French Polynesia',
                'code' => 'PF',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 177,
                'name' => 'Papua New Guinea',
                'code' => 'PG',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 178,
                'name' => 'Philippines',
                'code' => 'PH',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 179,
                'name' => 'Pakistan',
                'code' => 'PK',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 180,
                'name' => 'Poland',
                'code' => 'PL',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 181,
                'name' => 'St. Pierre and Miquelon',
                'code' => 'PM',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 182,
                'name' => 'Pitcairn',
                'code' => 'PN',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 183,
                'name' => 'Puerto Rico',
                'code' => 'PR',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 184,
                'name' => 'Palestine, State of',
                'code' => 'PS',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 185,
                'name' => 'Portugal',
                'code' => 'PT',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 186,
                'name' => 'Palau',
                'code' => 'PW',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 187,
                'name' => 'Paraguay',
                'code' => 'PY',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 188,
                'name' => 'Qatar',
                'code' => 'QA',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 189,
                'name' => 'Réunion',
                'code' => 'RE',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 190,
                'name' => 'Romania',
                'code' => 'RO',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 191,
                'name' => 'Serbia',
                'code' => 'RS',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 192,
                'name' => 'Russian Federation',
                'code' => 'RU',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 193,
                'name' => 'Rwanda',
                'code' => 'RW',
                'sort' => 4,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 194,
                'name' => 'Saudi Arabia',
                'code' => 'SA',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 195,
                'name' => 'Solomon Islands',
                'code' => 'SB',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 196,
                'name' => 'Seychelles',
                'code' => 'SC',
                'sort' => 16,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 197,
                'name' => 'Sudan',
                'code' => 'SD',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 198,
                'name' => 'Sweden',
                'code' => 'SE',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 199,
                'name' => 'Singapore',
                'code' => 'SG',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 200,
                'name' => 'Saint Helena',
                'code' => 'SH',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 201,
                'name' => 'Slovenia',
                'code' => 'SI',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 202,
                'name' => 'Svalbard and Jan Mayen Islands',
                'code' => 'SJ',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 203,
                'name' => 'Slovakia',
                'code' => 'SK',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 204,
                'name' => 'Sierra Leone',
                'code' => 'SL',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 205,
                'name' => 'San Marino',
                'code' => 'SM',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 206,
                'name' => 'Senegal',
                'code' => 'SN',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 207,
                'name' => 'Somalia',
                'code' => 'SO',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 208,
                'name' => 'Suriname',
                'code' => 'SR',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 209,
                'name' => 'South Sudan',
                'code' => 'SS',
                'sort' => 6,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 210,
                'name' => 'Sao Tome and Principe',
                'code' => 'ST',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 211,
                'name' => 'El Salvador',
                'code' => 'SV',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 212,
                'name' => 'Sint Maarten (Dutch part)',
                'code' => 'SX',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 213,
                'name' => 'Syria',
                'code' => 'SY',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 214,
                'name' => 'Swaziland',
                'code' => 'SZ',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 215,
                'name' => 'Turks and Caicos Islands',
                'code' => 'TC',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 216,
                'name' => 'Chad',
                'code' => 'TD',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 217,
                'name' => 'French Southern Territories',
                'code' => 'TF',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 218,
                'name' => 'Togo',
                'code' => 'TG',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 219,
                'name' => 'Thailand',
                'code' => 'TH',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 220,
                'name' => 'Tajikistan',
                'code' => 'TJ',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 221,
                'name' => 'Tokelau',
                'code' => 'TK',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 222,
                'name' => 'Timor-Leste',
                'code' => 'TL',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 223,
                'name' => 'Turkmenistan',
                'code' => 'TM',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 224,
                'name' => 'Tunisia',
                'code' => 'TN',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 225,
                'name' => 'Tonga',
                'code' => 'TO',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 226,
                'name' => 'Turkey',
                'code' => 'TR',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 227,
                'name' => 'Trinidad and Tobago',
                'code' => 'TT',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 228,
                'name' => 'Tuvalu',
                'code' => 'TV',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 229,
                'name' => 'Taiwan',
                'code' => 'TW',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 230,
                'name' => 'Ukraine',
                'code' => 'UA',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 231,
                'name' => 'Uganda',
                'code' => 'UG',
                'sort' => 3,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 232,
                'name' => 'United States Minor Outlying Islands',
                'code' => 'UM',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 233,
                'name' => 'United States',
                'code' => 'US',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 234,
                'name' => 'Uruguay',
                'code' => 'UY',
                'sort' => null
            )
        );
        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 235,
                'name' => 'Uzbekistan',
                'code' => 'UZ',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 236,
                'name' => 'Vatican',
                'code' => 'VA',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 237,
                'name' => 'Saint Vincent and the Grenadines',
                'code' => 'VC',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 238,
                'name' => 'Venezuela',
                'code' => 'VE',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 239,
                'name' => 'Virgin Islands (British)',
                'code' => 'VG',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 240,
                'name' => 'Virgin Islands (U.S.)',
                'code' => 'VI',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 241,
                'name' => 'Vietnam',
                'code' => 'VN',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 242,
                'name' => 'Vanuatu',
                'code' => 'VU',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 243,
                'name' => 'Wallis and Futuna Islands',
                'code' => 'WF',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 244,
                'name' => 'Samoa',
                'code' => 'WS',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 245,
                'name' => 'Yemen',
                'code' => 'YE',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 246,
                'name' => 'Mayotte',
                'code' => 'YT',
                'sort' => null
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 247,
                'name' => 'South Africa',
                'code' => 'ZA',
                'sort' => 17,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 248,
                'name' => 'Zambia',
                'code' => 'ZM',
                'sort' => 18,
            )
        );

        $country = \App\Models\Sysdef\Country::firstOrCreate(
            array (
                'id' => 249,
                'name' => 'Zimbabwe',
                'code' => 'ZW',
                'sort' => 19,
            )
        );


        $this->enableForeignKeys("countries");

    }
}