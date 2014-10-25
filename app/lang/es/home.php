<?php


return [

//    "landing_title" => "Si desease recibir más información, por favor complete el siguiente formulario y le contactaremos pronto",
    "apply_now"         => "¡Aplica Ahora!",
    "apply_now_text"    => "¿Estás listo para triunfar en los  EE.UU.?",

    "or"                => "O",

    "form"              => [
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
                "opt1"  => "14-18 años",
                "opt2"  => "19-24 años",
                "opt3"  => "25-34 años",
                "opt4"  => "> 35 años",
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
        "text_button" => "Solicita Información",

    ],


    "sliders"           => [
        "first"  => [
            "text1" => "Hacemos que tu SUEÑO",
            "text2" => "de estudiar en los Estados Unidos",
            "text3" => "sea una REALIDAD"
        ],
        "second" => [
            "text1" => "Becas Académicas y Deportivas",
            "text2" => "para estudiar en los Estados Unidos"
        ],

    ],


    "scholarship_boxes" => [
        "1" => [
            "title"       => "¿Quieres saber si calificas para una Beca Académica?",
            "gpa"         => "Promedio",
            "up_to"       => "O hasta el",
            "scholarship" => "de la Beca*",
            "contact"     => "Contacta Nuestro",
            "btn"         => "Embajador en línea",
            "out_of"      => "sobre",
            "message"   => "Por favor contacta a un Embajador en línea",


        ],
        "2" => [
            "title"       => "¿Quieres saber si calificas para una Beca Deportiva?",
            "select"      => "Selecciona un Deporte",
            "up_to"       => "O hasta el",
            "scholarship" => "de la Beca*",
            "contact"     => "Contacta Nuestro",
            "btn"         => "Embajador en línea",
            "out_of"      => "sobre"

        ],
    ],

    "testimonials"      => [
        "title" => "Otros estudiantes ya lo han conseguido"
    ],

    "promo"             => [
        "form" => [
            "inputs"=>[
                "name"  => "Nombre completo",
                "email" => "Correo electrónico",
                "phone" => "Teléfono",
                "participate" => "Participar",
            ],
            "errors" => [
                "name" => "Para participar necesitas ingresar tu nombre",
                "email"     => [
                    "required" => "Para participar necesitas ingresar tu correo electrónico",
                    "invalid"  => "Por favor escribe un correo electrónico válido"
                ],
                "phone"     => [
                    "required" => "Para participar necesitas ingresar tu número de teléfono",
                    "number"   => "Por favor solo tu números"
                ],
            ]
        ]
    ]

];