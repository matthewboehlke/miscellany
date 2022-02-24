<?php

return [
    'actions'       => [
        'add_epoch'         => 'Dodaj epohu',
        'add_intercalary'   => 'Dodaj interkalarne dane',
        'add_month'         => 'Dodaj kalendarski mjesec',
        'add_moon'          => 'Dodaj mjesec (nebesko tijelo)',
        'add_reminder'      => 'Dodaj podsjetnik',
        'add_season'        => 'Dodaj sezonu',
        'add_weather'       => 'Postavi vremenski efekt',
        'add_week'          => 'Dodaj imenovani tjedan',
        'add_weekday'       => 'Dodaj dan u tjednu',
        'add_year'          => 'Dodaj ime godine',
        'set_today'         => 'Postavi kao trenutni dan',
        'today'             => 'Danas',
    ],
    'checkboxes'    => [
        'is_recurring'  => 'Ponavlja se svake godine',
    ],
    'create'        => [
        'success'       => 'Kreiran kalendar ":name"',
        'title'         => 'Novi kalendar',
    ],
    'destroy'       => [
        'success'   => 'Ukljonjen kalendar ":name".',
    ],
    'edit'          => [
        'success'       => 'Ažuriran kalendar ":name".',
        'title'         => 'Uredi kalendar :name',
        'today'         => 'Ažuriran datum kalendara.',
    ],
    'event'         => [
        'actions'   => [
            'existing'  => 'Postojeći entitet',
            'new'       => 'Novi događaj',
            'switch'    => 'Promjeni odabir',
        ],
        'create'    => [
            'success'       => 'Kreiran događaj u kalendaru.',
            'title'         => 'Dodaj događaj u kalendaru na :name',
        ],
        'destroy'   => 'Uklonjen događaj iz kalendara ":name".',
        'edit'      => [
            'success'       => 'Ažuriran događaj u kalendaru.',
            'title'         => 'Ažuriraj događaj kalendara u :name',
        ],
        'helpers'   => [
            'add'               => 'Dodaj postojeći događaj na ovaj kalendar.',
            'new'               => 'Ili kreiraj novi događaj tako što upišeš naziv.',
            'other_calendar'    => 'Uređujete podsjetnik koji se nalazi na kalendaru :calendar.',
        ],
        'modal'     => [
            'title' => 'Dodaj događaj u kalendar',
        ],
        'success'   => 'Događaj ":event" dodan u kalendar.',
    ],
    'events'        => [
        'title'         => 'Događaji kalendara :name',
    ],
    'fields'        => [
        'calendar'              => 'Kalendar roditelj',
        'calendars'             => 'Kalendari',
        'colour'                => 'Boja',
        'comment'               => 'Komentar',
        'current_day'           => 'Trenutni dan',
        'current_month'         => 'Trenutni mjesec',
        'current_year'          => 'Trenutna godina',
        'date'                  => 'Trenutni datum',
        'has_leap_year'         => 'Ima prijestupne godine',
        'intercalary'           => 'Interkalarni dani',
        'is_incrementing'       => 'Pomični datum',
        'is_recurring'          => 'Ponavljajući',
        'leap_year_amount'      => 'Dodaj dane',
        'leap_year_month'       => 'Mjesec',
        'leap_year_offset'      => 'Svakih',
        'leap_year_start'       => 'Prijestupne godine',
        'length'                => 'Duljina događaja',
        'length_days'           => ':count day|:count days',
        'months'                => 'Kalendarski mjeseci',
        'moons'                 => 'Mjeseci (nebeska tijela)',
        'name'                  => 'Naziv',
        'parameters'            => 'Parametri',
        'recurring_periodicity' => 'Periodički ponavljajući',
        'recurring_until'       => 'Ponavlja se do godine',
        'reset'                 => 'Tjedno ponovno postavljanje',
        'seasons'               => 'Sezone',
        'start_offset'          => 'Početni odmak',
        'suffix'                => 'Dometak',
        'type'                  => 'Tip',
        'week_names'            => 'Nazivi tjedana',
        'weekdays'              => 'Nazivi dana',
    ],
    'helpers'       => [
        'month_type'    => 'Interkalarni mjeseci ne koriste dane, ali utječu na mjesece i sezone.',
        'nested_parent' => 'Prikazivanje kalendara od :parent.',
        'nested_without'=> 'Prikazivanje svih kalendara koji nemaju kalendar roditelj. Klikni redak da bi vidio/la kalendare djecu.',
        'start_offset'  => 'Zadano je da kalendar počinje od prvog dana u tjednu nulte godine. Promjena ovog polja utječe na to gdje je prvi dan kalendar postavljen.',
    ],
    'hints'         => [
        'event_length'      => 'Koliko dugo treba trajati događaj. Događaj ne može trajati duže od dva mjeseca.',
        'intercalary'       => 'Dani koji padaju van standardnih mjeseci i tjedana. Oni ne utječu dane u tjednu, ali utječu na cikluse mjeseca.',
        'is_incrementing'   => 'Pomični kalendari će automatski povećati svoj trenutni dan u 00:00 UTC.',
        'is_recurring'      => 'Događaj se može postaviti kao ponavljajući. Pojavit će se svake godine na isti datum.',
        'months'            => 'Tvoj kalendar bi trebao imati barem 2 kalendarska mjeseca.',
        'moons'             => 'Dodavanje mjeseci (nebeskih tijela) će ih dodati na kalendar za svaki puni i mladi mjesec. Ako je period punog mjeseca duži od 10 dana, prikazat će se i prva i posljednja četvrt.',
        'parent_calendar'   => 'Dodavanje roditeljskog kalendara uključuje podsjetnike i vremenske uvjete tog roditeljskog kalendara.',
        'reset'             => 'Uvijek započni početak mjeseca ili godine na prvi dan tjedna.',
        'seasons'           => 'Stvori sezone za svoj kalendar tako što odrediš kad svaka počinje. Kanka će se pobrinuti za ostalo.',
        'weekdays'          => 'Postavi nazive za dane u tjednu. Barem 2 dana u tjednu su potrebna.',
        'weeks'             => 'Definiraj neke nazive za bitnije tjedne u svom kalendaru.',
        'years'             => 'Neke godine su toliko važne da imaju svoj naziv.',
    ],
    'index'         => [
        'add'           => 'Novi kalendar',
        'header'        => 'Kalendari u :name',
        'title'         => 'Kalendari',
    ],
    'layouts'       => [
        'month' => 'Mjesec',
        'year'  => 'Godina',
    ],
    'modals'        => [
        'switcher'  => [
            'title' => 'Promjena godine',
        ],
    ],
    'month_types'   => [
        'intercalary'   => 'Interkalarni',
        'standard'      => 'Standardni',
    ],
    'options'       => [
        'events'    => [
            'recurring_periodicity' => [
                'fullmoon'      => 'Pun mjesec',
                'fullmoon_name' => ':moon pun mjesec',
                'month'         => 'Mjesečno',
                'newmoon'       => 'Mladi mjesec',
                'newmoon_name'  => ':moon mladi mjesec',
                'none'          => 'Ništa',
                'unnamed_moon'  => 'Mjesec :number',
                'year'          => 'Godišnje',
            ],
        ],
        'resets'    => [
            ''      => 'Nikad',
            'month' => 'Mjesečno',
            'year'  => 'Godišnje',
        ],
    ],
    'panels'        => [
        'intercalary'   => 'Interkalarni dani',
        'leap_year'     => 'Prijestupna godina',
        'months'        => 'Mjeseci',
        'weeks'         => 'Tjedni',
        'years'         => 'Imenovane godine',
    ],
    'parameters'    => [
        'intercalary'   => [
            'length'    => 'Duljina trajanja u danima',
            'month'     => 'Na kraju kojeg mjeseca',
            'name'      => 'Naziv interkalarnosti',
        ],
        'month'         => [
            'alias' => 'Drugo ime mjeseca',
            'length'=> 'Dana',
            'name'  => 'Naziv mjeseca',
            'type'  => 'Tip',
        ],
        'moon'          => [
            'fullmoon'  => 'Pun mjesec svakih (dana)',
            'name'      => 'Naziv mjeseca',
            'offset'    => 'Pomak za prvi puni mjesec',
        ],
        'seasons'       => [
            'day'   => 'Dan počinje',
            'month' => 'Mjesec počinje',
            'name'  => 'Naziv godišnjeg doba',
        ],
        'weeks'         => [
            'name'      => 'Naziv tjedna',
            'number'    => 'Broj',
        ],
        'year'          => [
            'name'      => 'Naziv godine',
            'number'    => 'Godina',
        ],
    ],
    'placeholders'  => [
        'colour'            => 'Boja',
        'comment'           => 'Rođendan, festival, solsticij',
        'date'              => 'Trenutni datum',
        'leap_year_amount'  => 'Broj dana koji se doda na svaku prijestupnu godinu',
        'leap_year_month'   => 'Mjesec na koji se dani dodaju',
        'leap_year_offset'  => 'Svakih koliko godina je prijestupna godina',
        'leap_year_start'   => 'Prva godina koja je prijestupna',
        'length'            => 'Duljina događaja u danima',
        'months'            => 'Broj mjeseci u godini',
        'name'              => 'Naziv kalendara',
        'recurring_until'   => 'Zadnja godina ponavljanja (ostavi prazno za ponavljanje zauvijek)',
        'seasons'           => 'Broj sezona',
        'suffix'            => 'Dometak trenutnoj eri (pr.n.e. ili n.e.)',
        'type'              => 'Tip kalendara',
        'weekdays'          => 'Broj dana u tjednu',
    ],
    'show'          => [
        'missing_details'   => 'Ovaj se kalendar nije mogao prikazati. Kalendari trebaju imati barem 2 kalendarska mjeseca i barem 2 dana u tjednu da bi se pravilno prikazali.',
        'moon_full_moon'    => ':moon Puni mjesec',
        'moon_new_moon'     => ':moon Mladi mjesec',
        'moon_waning_moon'  => ':moon Prva četvrt',
        'moon_waxing_moon'  => ':moon Posljednja četvrt',
        'tabs'              => [
            'events'        => 'Događaji kalendara',
            'information'   => 'Informacije',
            'weather'       => 'Vremenski uvjeti',
        ],
        'title'             => 'Kalendar :name',
    ],
    'sorters'       => [
        'after' => 'Danas i poslije',
        'before'=> 'Danas i prije',
    ],
];
