<?php


class AmbassadorsTableSeeder extends Seeder {

    public function run()
    {
        Ambassador::truncate();

        $ambassadors = [
            [
                "firstname" => "Xabier",
                "lastname" => "Loor",
				"image" => "Xabier-Loor.jpg",
				"email" => "xabierloor@epro360.com",
                "city_id" => 20,
                "phone" => "(+593) 985 176 257",
                "director_id" => 1,
                "personal_phone" => "(+593) 428 230 24"
            ],
            [
                "firstname" => "Frank",
                "lastname" => "Monge",
				"image" => "Frank-Monge.jpg",
				"email" => "fmonge@epro360.com",
                "city_id" => 20,
                "phone" => "(+593) 994 055 115",
                "director_id" => 1
            ],
            [
                "firstname" => "Israel",
                "lastname" => "Papiol",
                "image" => "Israel-Papiol.jpg",
                "email" => "ipapiol@epro360.com",
                "city_id" => 140,
                "phone" => "(+34) 682 890 170",
                "director_id" => 1
            ],
            [
                "firstname" => "Narku",
                "lastname" => "Naranbaatar",
                "image" => "Narku-Naranbaatar.jpg",
                "email" => "naranbaataro@epro360.com",
                "city_id" => 80,
                "phone" => "(+1) 636 634 5068",
                "director_id" => 1
            ],
            [
                "firstname" => "Jonas",
                "lastname" => "Kehrbaum",
                "image" => "Jonas-Kehrbaum.jpg",
                "email" => "jkehrbaum@epro360.com",
                "city_id" => 116,
                "phone" => "(+49) 162 366 9497",
                "director_id" => 1
            ],
            [
                "firstname" => "Oswaldo",
                "lastname" => "Chávez",
                "image" => "Oswaldo-Chavez.jpg",
                "email" => "ochavez@epro360.com",
                "city_id" => 20,
                "phone" => "(+593) 98 644 7648",
                "director_id" => 1

            ]

        ];


        foreach($ambassadors as $index => $ambassador)
        {
            Ambassador::create([
                "firstname" => $ambassador['firstname'],
                "lastname" => $ambassador['lastname'],
                "city_id" => $ambassador['city_id'],
                "director_id" => $ambassador['director_id'],
                "phone" => $ambassador['phone'],
            ]);

            User::create([
                "email" => $ambassador['email'],
                "password" => Hash::make('123456'),
                "username" => Str::slug($ambassador['email']),
                "image" => $ambassador['image'],
                "userable_type" => "Ambassador",
                "userable_id" => $index + 1
            ]);
        }
    }

}