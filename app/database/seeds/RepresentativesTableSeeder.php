<?php


class RepresentativesTableSeeder extends Seeder {

    public function run()
    {
        Representative::truncate();

        $representatives = [
            [
                "firstname" => "Representative",
                "lastname" => "User",
                "image" => "default",
                "email" => "parent@email.com",
//                "country_id" => 174,
                "phone" => "(+593) 985 176 257",
//                "personal_phone" => "(+593) 428 230 24"
            ],
            [
                "firstname" => "Representative 2",
                "lastname" => "User",
                "image" => "default",
                "email" => "parent2@email.com",
//                "country_id" => 174,
                "phone" => "(+593) 994 055 115",
//                "personal_phone" => "(+593) 428 230 24"

            ]

        ];


        foreach($representatives as $index => $representative)
        {
            Representative::create([
                "firstname" => $representative['firstname'],
                "lastname" => $representative['lastname'],
//                "country_id" => $representative['country_id'],
                "phone" => $representative['phone'],
            ]);

            User::create([
                "username" => Str::slug($representative['email']),
                "email" => $representative['email'],
                "password" => '123456',
                "image" => $representative['image'],
                "userable_type" => "Representative",
                "userable_id" => $index + 1
            ]);
        }
    }

}