<?php


return [

//    "landing_title" => "To request more info, please fill out this form and we will get in touch with you",
    "apply_now"         => "Apply Now",
    "apply_now_text"    => "Are you ready to succeed in the U.S?",
    "or"                => "OR",

    "form"              => [
        "title"       => "Request More Info",
        "text"        => "Text for convince the user to download",
        "inputs"      => [
            "firstname" => "Name",
            "lastname"  => "Last Name",
            "email"     => "E-Mail",
            "phone"     => "Phone Number",
            "country"   => "Country of Residence",
            "state"     => "Region of Residence",
            "city"      => "City of Residence",
            "interest"  => [
                "title" => "Program of Interest",
                "opt1"  => "ESL Program",
                "opt2"  => "High School Program",
                "opt3"  => "Undergraduate Program",
                "opt4"  => "Master's Program",
                "opt5"  => "Phd Program",
                "opt6"  => "Internship Program",
                "opt7"  => "Semester at Sea",
            ],
            "find_us"   => [
                "title" => "How did you hear about us?",
                "opt1"  => [
                    "label" => "Internet",
                    "opt1"  => "Google",
                    "opt2"  => "Facebook",
                    "opt3"  => "Youtube",
                    "opt4"  => "Twitter",
                ],
                "opt2"  => "Friends",
                "opt3"  => "Newspaper",
                "opt4"  => "School Presentation",
            ],
            "specify"   => "Específicamente",
            "age"       => [
                "title" => "How old are you?",
                "opt1"  => "14-18 years",
                "opt2"  => "19-24 years",
                "opt3"  => "25-34 years",
                "opt4"  => "> 35 years",
            ]
        ],
        "errors"      => [
            "firstname" => "Your name is required",
            "email"     => [
                "required" => "Please enter your e-mail address",
                "invalid"  => "Please enter a valid e-mail address"
            ],
            "phone"     => [
                "required" => "Please enter your phone",
                "number"   => "Please only numbers"
            ],
            "country"   => "Choose your residence country",
            "state"     => "Choose your residence state",
            "city"      => "Choose your residence city",
            "interest"  => "Choose your interest program",
            "find_us"   => "Choose an option",
            "age"       => "Tell us how old are you",

        ],
        "text_button" => "Request Info",

    ],

    "sliders"           => [
        "first"  => [
            "text1" => "We make your DREAM",
            "text2" => "to study in the U.S.",
            "text3" => "A REALITY!"
        ],
        "second" => [
            "text1" => "Academic and Athletic",
            "text2" => "Scholarships to study in the U.S."
        ],

    ],

    "scholarship_boxes" => [
        "1" => [
            "title"       => "Want to see if you are eligible for an Academic Scholarship",
            "gpa"         => "GPA",
            "up_to"       => "Or up to",
            "scholarship" => "SCHOLARSHIP*",
            "contact"     => "Contact Our",
            "btn"         => "Online Ambassador",
            "out_of"      => "out of",
            "message"     => "Please contact Online Ambassador",

        ],
        "2" => [
            "title"       => "Want to see if you are eligible for an Athletic Scholarship",
            "select"      => "Select Sport",
            "up_to"       => "Or up to",
            "scholarship" => "SCHOLARSHIP*",
            "contact"     => "Contact Our",
            "btn"         => "Online Ambassador",
            "out_of"      => "out of"
        ],
    ],

    "testimonials"      => [
        "title" => "What other customers say about us?"
    ],

    "promo"             => [
        "form" => [
            "inputs"=>[
                "name"  => "Full name",
                "email" => "Email",
                "phone" => "Phone",
                "participate" => "Participate",
            ],
            "errors" => [
                "name" => "Please enter your name",
                "email"     => [
                    "required" => "Please enter your email",
                    "invalid"  => "Enter a valid email"
                ],
                "phone"     => [
                    "required" => "Enter your phone",
                    "number"   => "Only numbers"
                ],
            ]
        ]
    ],

    "ambassadors_section" => [
        "title" => "Ambassador team",
        "country" => "Is your country not on this list?",
        "contact" => "Contact our",
        "ambassador_online" => "Ambassador Online"
    ]
];