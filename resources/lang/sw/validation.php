<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute
lazima kukubaliwa.',
    'active_url'           => ' :attribute
si URL sahihi.',
    'after'                => ' :attribute lazima iwe tarehe iliyofuata :date.',
    'after_or_equal'       => ' :attribute Lazima iwe tarehe iliyofuata au sawa :date.',
    'alpha'                => ' :attribute inaweza tu kuwa na herufi.',
    'alpha_dash'           => ' :attribute
Inaweza tu kuwa na herufi, namba, na kupasua.',
    'alpha_num'            => ' :attribute inaweza tu kuwa na herufi na namba.',
    'array'                => ' :attribute lazima iwe safu.',
    'before'               => ' :attribute
lazima iwe tarehe kabla :date.',
    'before_or_equal'      => ' :attribute
lazima iwe tarehe kabla au sawa :date.',
    'between'              => [
        'numeric' => ' :attribute lazima iwe kati ya :min na :max.',
        'file'    => ' :attribute lazima iwe katikati :min na :max kilobytes.',
        'string'  => ' :attribute lazima iwe katikati :min na :max characters.',
        'array'   => ' :attribute
lazima iwe kati :min na :max vifungu.',
    ],
    'boolean'              => ' :attribute
fieldi lazima iwe kweli au uongo.',
    'confirmed'            => ' :attribute uthibitisho haufanani.',
    'date'                 => ' :attribute i
sio tarehe halali',
    'date_format'          => ' :attribute hailingani na muundo :format.',
    'different'            => ' :attribute na :other lazima iwe tofauti.',
    'digits'               => ' :attribute lazima iwe :digits tarakimu.',
    'digits_between'       => ' :attribute lazima iwe kati :min na :max tarakimu.',
    'dimensions'           => ' :attribute ina vipimo vya picha batili.',
    'distinct'             => ' :attribute
fieldi lina thamani ya duplicate..',
    'email'                => ' :attribute
lazima iwe anwani sahihi ya barua pepe.',
    'exists'               => ' selected :attribute ni batili
.',
    'file'                 => ' :attribute
Lazima iwe faili.',
    'filled'               => ' :attribute fieldi lazima liwe na thamani..',
    'gt'                   => [
        'numeric' => ' :attribute lazima iwe kubwa kuliko :value.',
        'file'    => ' :attribute lazima iwe kubwa kuliko :value kilobytes.',
        'string'  => ' :attribute lazima iwe kubwa kuliko :value characters.',
        'array'   => ' :attribute lazima iwe zaidi ya :value items.',
    ],
    'gte'                  => [
        'numeric' => ' :attribute lazima iwe kubwa kuliko au sawa na  :value.',
        'file'    => ' :attribute lazima iwe kubwa au sawa na :value kilobytes.',
        'string'  => ' :attribute lazima iwe kubwa au sawa na :value characters.',
        'array'   => ' :attribute lazima uwe :value itemu au zaidi.',
    ],
    'image'                => ' :attribute lazima iwe picha',
    'in'                   => ' selected :attribute ni batili.',
    'in_array'             => ' :attribute field haipo
 :other.',
    'integer'              => ' :attribute lazima iwe ni integer.',
    'ip'                   => ' :attribute lazima iwe anwani sahihi ya IP.',
    'ipv4'                 => ' :attribute
lazima iwe anwani sahihi ya IPv4.',
    'ipv6'                 => ' :attribute
lazima iwe anwani sahihi ya IPv6.',
    'json'                 => ' :attribute
Lazima iwe  JSON halali.',
    'lt'                   => [
        'numeric' => ' :attribute
lazima iwe chini ya :value.',
        'file'    => ' :attribute
lazima iwe chini ya :value kilobytes.',
        'string'  => ' :attribute
lazima iwe chini ya :value characters.',
        'array'   => ' :attribute
lazima iwe chini ya :value items.',
    ],
    'lte'                  => [
        'numeric' => ' :attribute
lazima iwe chini au sawa :value.',
        'file'    => ' :attribute
lazima iwe chini au sawa :value kilobytes.',
        'string'  => ' :attribute
lazima iwe chini au sawa :value characters.',
        'array'   => ' :attribute
haipaswi kuwa na zaidi :value items.',
    ],
    'max'                  => [
        'numeric' => ' :attribute
haiwezi kuwa kubwa kuliko :max.',
        'file'    => ' :attribute haiwezi kuwa kubwa kuliko :max kilobytes.',
        'string'  => ' :attributehaiwezi kuwa kubwa kuliko :max characters.',
        'array'   => ' :attribute haiwezi kuwa kubwa kuliko :max items.',
    ],
    'mimes'                => ' :attribute Lazima iwe ya aina faili : :values.',
    'mimetypes'            => ' :attribute Lazima iwe ya aina faili: :values.',
    'min'                  => [
        'numeric' => ' :attribute lazima iwe angalau
 :min.',
        'file'    => ' :attribute lazima iwe angalau
 :min kilobytes.',
        'string'  => ' :attribute lazima iwe angalau
 :min characters.',
        'array'   => ' :attribute lazima iwe angalau
 :min items.',
    ],
    'not_in'               => ' kuchaguliwa :attribute ni batili.
',
    'not_regex'            => ' :attribute muundo ni batili.
',
    'numeric'              => ' :attribute lazima iwe nambari
.',
    'present'              => ' :attribute lazima iwepo.',
    'regex'                => ' :attribute muundo ni batili
.',
    'required'             => ' :attribute inahitajika.',
    'required_if'          => ' :attribute inahitajika wakati
 :other ni :value.',
    'required_unless'      => ' :attribute
inahitajika isipokuwa :other ni  :values.',
    'required_with'        => ' :attribute inahitajika wakati :values kuwepo.',
    'required_with_all'    => ' :attribute inahitajika wakati :values kuwepo.',
    'required_without'     => ' :attribute inahitajika wakati :values kutokuwepo.',
    'required_without_all' => ' :attribute inahitajika wakati hakuna
 :values kuwepo.',
    'same'                 => ' :attribute na :other lazima inafanana .',
    'size'                 => [
        'numeric' => ' :attribute
lazima iwe:size.',
        'file'    => ' :attribute
lazima iwe :size kilobytes.',
        'string'  => ' :attribute
lazima iwe :size characters.',
        'array'   => ' :attribute lazima iwe na :size items.',
    ],
    'string'               => ' :attribute
lazima iwe string.',
    'timezone'             => ' :attribute
lazima iwe eneo la halali.',
    'unique'               => ' :attribute
tayari imechukuliwa.',
    'uploaded'             => ' :attribute imeshindwa kupakia..',
    'url'                  => ' :attribute
muundo ni batili.',
    'phone' => ' :attribute fied ina nambari batili
.',
    'captcha' => ' :attribute
field ina captcha batili.',
    'alpha_spaces' => ' :attribute
inaweza tu kuwa na herufi na nafasi',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'url' => '
anwani ya wavuti',
    ],

];
