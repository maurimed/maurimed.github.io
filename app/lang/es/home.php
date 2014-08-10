<?php


return [

//    "landing_title" => "Si desease recibir más información, por favor complete el siguiente formulario y le contactaremos pronto",
    "form"    => [
        "title"       => "Solicitar Mas Información",
        "text"        => "Text for convince the user to download",
        "inputs"      => [
            "firstname" => "Nombre",
            "lastname"  => "Apellido",
            "email"     => "Correo electrónico",
            "phone"     => "Teléfono",
            "country"   => "País",
            "state"     => "Región donde reside",
            "city"      => "Ciudad",
            "interest"  => [
                "title" => "Programa de interés",
                "opt1"  => "Programa de Inglés",
                "opt2"  => "Programa de Escuela Secundaria/Institutos",
                "opt3"  => "Programa de Grado/Licenciatura",
                "opt4"  => "Programa de Maestría/Posgrado",
                "opt5"  => "Programa de Doctorado",
                "opt6"  => "Programa de Pasantías/Practicas Laborales",
                "opt7"  => "Semestre en el Mar",
            ],
            "find_us"   => [
                "title" => "¿Cómo supo de nosotros?",
                "opt1"  => [
                    "label" => "Internet",
                    "opt1"  => "Google",
                    "opt2"  => "Facebook",
                    "opt3"  => "Youtube",
                    "opt4"  => "Twitter",
                ],
                "opt2"  => "Amigo",
                "opt3"  => "Periódico",
                "opt4"  => "Charla en Colegio",
            ],
            "specify"   => "Específicamente",
            "age"       => [
                "title" => "¿Qué edad tiene?",
                "opt1"  => "7-9 años",
                "opt2"  => "10-13 años",
                "opt3"  => "14-18 años",
                "opt4"  => "19-24 años",
                "opt5"  => "25-34 años",
                "opt6"  => "> 35 años",
            ]
        ],
        "errors"      => [
            "firstname" => "Tu nombre es requerido",
            "email"     => [
                "required" => "Por favor escribe tu correo electrónico",
                "invalid"  => "Por favor escribe un correo válido"
            ],
            "phone"     => [
                "required" => "Por favor ingresa tu número de teléfono",
                "number"   => "Por favor solo tu números"
            ],
            "country"   => "Escoge el país donde resides",
            "state"     => "Escoge la región donde resides",
            "city"      => "Escoge la ciudad donde resides",
            "interest"  => "Por favor escoge el programa que te interesa",
            "find_us"   => "Por favor elija una opción",
            "age"       => "Por favor dinos que edad tienes",

        ],
        "text_button" => "Solicitar Información",

    ],


    "sliders" => [
        "first"  => [
            "text1" => "Hacemos que tu SUEÑO",
            "text2" => "de estudiar en los Estados Unidos",
            "text3" => "sea una REALIDAD"
        ],
        "second" => [
            "text1" => "Becas Académicas y Deportivas",
            "text2" => "para estudiar en los Estados Unidos"
        ],

    ]

];