<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => 'Polje :attribute mora biti prihvaćeno.',
    'active_url'           => 'Polje :attribute nije validan URL.',
    'after'                => 'Polje :attribute mora biti datum posle :date.',
    'after_or_equal'       => 'Polje :attribute mora biti datum posle ili :date.',
    'alpha'                => 'Polje :attribute može sadržati samo slova.',
    'alpha_dash'           => 'Polje :attribute može sadržati samo slova, brojeve i povlake.',
    'alpha_num'            => 'Polje :attribute može sadržati samo slova i brojeve.',
    'array'                => 'Polje :attribute mora sadržati nekih niz stavki.',
    'before'               => 'Polje :attribute mora biti datum pre :date.',
    'before_or_equal'      => 'Polje :attribute datum pre ili :date.',
    'between'              => [
        'numeric' => 'Polje :attribute mora biti između :min - :max.',
        'file'    => 'Fajl :attribute mora biti između :min - :max kilobajta.',
        'string'  => 'Polje :attribute mora biti između :min - :max karaktera.',
        'array'   => 'Polje :attribute mora biti između :min - :max stavki.',
    ],
    'boolean'              => 'Polje :attribute mora biti tačno ili netačno',
    'confirmed'            => 'Potvrda polja :attribute se ne poklapa.',
    'date'                 => 'Polje :attribute nije važeći datum.',
    'date_equals'          => 'Polje :attribute mora biti datum :date.',
    'date_format'          => 'Polje :attribute ne odgovora prema formatu :format.',
    'different'            => 'Polja :attribute i :other moraju biti različita.',
    'digits'               => 'Polje :attribute mora sadržati :digits šifri.',
    'digits_between'       => 'Polje :attribute mora biti izemđu :min i :max šifri.',
    'dimensions'           => 'Polje :attribute nije ispravnih dimenzija.',
    'distinct'             => 'Polje :attribute je duplikat.',
    'email'                => 'Format polja :attribute nije validan.',
    'exists'               => 'Odabrano polje :attribute nije validno.',
    'file'                 => 'Polje :attribute mora biti fajl.',
    'filled'               => 'Polje :attribute je obavezno.',
    'gt'                   => [
        'numeric' => 'Polje :attribute mora biti veći od :value.',
        'file'    => 'Fajl :attribute mora biti više od :value kilobajta.',
        'string'  => 'Polje :attribute mora biti više od :value karaktera.',
        'array'   => 'Polje :attribute mora imati više od :value stavke.',
    ],
    'gte'                  => [
        'numeric' => 'Polje :attribute mora biti više ili jednako :value.',
        'file'    => 'Fajl :attribute mora imati više ili jednako :value kilobajta.',
        'string'  => 'Polje :attribute mora imati više ili jednako :value karaktera.',
        'array'   => 'Polje :attribute mora imati :value stavki ili više.',
    ],
    'image'                => 'Polje :attribute mora biti slika.',
    'in'                   => 'Odabrano polje :attribute nije validno.',
    'in_array'             => 'Polje :attribute ne postoji u :other.',
    'integer'              => 'Polje :attribute mora biti broj.',
    'ip'                   => 'Polje :attribute mora biti validna IP adresa.',
    'ipv4'                 => 'Polje :attribute mora biti validna IPv4 adresa.',
    'ipv6'                 => 'Polje :attribute mora biti validna IPv6 adresa.',
    'json'                 => 'Polje :attribute mora biti validan JSON string.',
    'lt'                   => [
        'numeric' => 'Polje :attribute mora biti manje od :value.',
        'file'    => 'Fajl :attribute mora imati manje od :value kilobjata.',
        'string'  => 'Polje :attribute mora biti manje od :value karaktera.',
        'array'   => 'Polje :attribute mora imati manje od :value stavki.',
    ],
    'lte'                  => [
        'numeric' => 'Polje :attribute mora biti manje ili jednako :value.',
        'file'    => 'Fajl :attribute mora imati manje ili jednako :value kilobajta.',
        'string'  => 'Polje :attribute mora imati manje ili jednako :value karaktera.',
        'array'   => 'Polje :attribute ne može imati više od :value stavki.',
    ],
    'max'                  => [
        'numeric' => 'Polje :attribute mora biti manje od :max.',
        'file'    => 'Polje :attribute mora biti manje od :max kilobajta.',
        'string'  => 'Polje :attribute mora sadržati manje od :max karaktera.',
        'array'   => 'Polje :attribute ne sme da image više od :max stavki.',
    ],
    'mimes'                => 'Polje :attribute mora biti fajl tipa: :values.',
    'mimetypes'            => 'Polje :attribute mora biti fajl tipa: :values.',
    'min'                  => [
        'numeric' => 'Polje :attribute mora biti najmanje :min.',
        'file'    => 'Fajl :attribute mora biti najmanje :min kilobajta.',
        'string'  => 'Polje :attribute mora sadržati najmanje :min karaktera.',
        'array'   => 'Polje :attribute mora sadrzati najmanje :min stavku.',
    ],
    'not_in'               => 'Odabrani element polja :attribute nije validan.',
    'not_regex'            => 'The :attribute format is invalid.',
    'numeric'              => 'Polje :attribute mora biti broj.',
    'present'              => 'Polje :attribute mora postojati.',
    'regex'                => 'Format polja :attribute nije validan.',
    'required'             => 'Polje :attribute je obavezno.',
    'required_if'          => 'Polje :attribute je potrebno kada polje :other sadrži :value.',
    'required_unless'      => 'Polje :attribute je potrebno, osim kad je :other :values.',
    'required_with'        => 'Polje :attribute je potrebno kada polje :values je prisutno.',
    'required_with_all'    => 'Polje :attribute je obavezno kada je :values prikazano.',
    'required_without'     => 'Polje :attribute je potrebno kada polje :values nije prisutno.',
    'required_without_all' => 'Polje :attribute je potrebno kada nijedan od sledeći polja :values nisu prisutni.',
    'same'                 => 'Polja :attribute i :other se moraju poklapati.',
    'size'                 => [
        'numeric' => 'Polje :attribute mora biti :size.',
        'file'    => 'Fajl :attribute mora biti :size kilobajta.',
        'string'  => 'Polje :attribute mora biti :size karaktera.',
        'array'   => 'Polje :attribute mora sadržati :size stavki.',
    ],
    'starts_with'          => 'Polje :attribute mora da počinje sa jednim od sledećim: :values',
    'string'               => 'Polje :attribute mora sadržati slova.',
    'timezone'             => 'Polje :attribute mora biti ispravna vremenska zona.',
    'unique'               => 'Polje :attribute već postoji.',
    'uploaded'             => ':attribute nije uspeo da se otpremi.',
    'url'                  => 'Format polja :attribute ne važi.',
    'uuid'                 => 'Polje :attribute mora biti validan UUID.',

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
        'name' => 'Ime',
        'username' => 'Korisničko ime',
        'email' => 'Email',
        'first_name' => 'Ime',
        'last_name' => 'Prezime',
        'password' => 'Lozinka',
        'password_confirmation' => 'Potvrda lozinke',
        'city' => 'Grad',
        'country' => 'Zemlja',
        'address' => 'Adresa',
        'phone' => 'Telefon',
        'mobile' => 'Mobilni',
        'age' => 'Godine',
        'sex' => 'Pol',
        'gender' => 'Pol',
        'day' => 'Dan',
        'month' => 'Mesec',
        'year' => 'Godina',
        'hour' => 'Sat',
        'minute' => 'Minut',
        'second' => 'Sekunda',
        'title' => 'Naslov',
        'content' => 'Sadržaj',
        'description' => 'Opis',
        'excerpt' => 'Odlomak',
        'date' => 'Datum',
        'time' => 'Vreme',
        'available' => 'dostupan',
        'size' => 'veličina',
    ],
];
