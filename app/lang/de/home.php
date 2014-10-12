<?php


return [

//    "landing_title" => "To request more info, please fill out this form and we will get in touch with you",

    "form"    => [
        "title"       => "Request More Info",
        "text"        => "Text for convince the user to download",
        "inputs"      => [
            "firstname" => "Name",
            "lastname"  => "Nachname",
            "email"     => "E-Mail",
            "phone"     => "Telefonnummer",
            "country"   => "Heimatland",
            "state"     => "Bundesland",
            "city"      => "Heimatstadt",
            "interest"  => [
                "title" => "Epro 360 Wunschprogramm",
                "opt1"  => "ESL Programm",
                "opt2"  => "High School Programm",
                "opt3"  => "Undergraduate Programm",
                "opt4"  => "Master's Programm",
                "opt5"  => "Phd Programm",
                "opt6"  => "PraktikaProgram",
                "opt7"  => "Semester at Sea",
            ],
            "find_us"   => [
                "title" => "Wie hast du von uns gehört?",
                "opt1"  => [
                    "label" => "Internet",
                    "opt1"  => "Google",
                    "opt2"  => "Facebook",
                    "opt3"  => "Youtube",
                    "opt4"  => "Twitter",
                ],
                "opt2"  => "Freunde",
                "opt3"  => "Zeitung",
                "opt4"  => "Schulpräsentation",
            ],
            "specify"   => "Spezifikationen",
            "age"       => [
                "title" => "Wie alt bist du?",
                "opt1"  => "14-18 Jahre",
                "opt2"  => "19-24 Jahre",
                "opt3"  => "25-34 Jahre",
                "opt4"  => "> 35 Jahre",
            ]
        ],
        "errors"      => [
            "firstname" => "Dein Name ist der Pflichtfeld",
            "email"     => [
                "required" => "Bitte gib deine Email Adresse ein",
                "invalid"  => "Bitte gib eine gültige Email Adresse ein"
            ],
            "phone"     => [
                "required" => "Bitte gib deine Telefonnummer ein",
                "number"   => "Bitte gib eine gültige Telefonnummer ein"
            ],
            "country"   => "Wähle dein Heimatland",
            "state"     => "Wähle dein Bundesland",
            "city"      => "Wähle deine Heimatstadt",
            "interest"  => "Wähle dein gewünschtes Epro 360 Programm",
            "find_us"   => "Wähle eine Option",
            "age"       => "Bitte gib dein Alter an",

        ],
        "text_button" => "Informationen anfordern",

    ],

    "sliders" => [
        "first"  => [
            "text1" => "Wir machen DEINEN TRAUM",
            "text2" => "In den USA zu studieren",
            "text3" => "WAHR!"
        ],
        "second" => [
            "text1" => "Akademische- und Sportstipendien",
            "text2" => "Für dein Studium in den USA"
        ],

    ]

];