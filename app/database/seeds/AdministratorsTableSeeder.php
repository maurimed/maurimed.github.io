<?php


class AdministratorsTableSeeder extends Seeder {

    public function run()
    {
        Administrator::truncate();

        $administrators = [
            [
                "firstname" => "Admin",
                "lastname" => "User",
                "image" => "default",
                "email" => "admin@email.com",
                "country_id" => 174,
                "phone" => "(+593) 985 176 257",
                "personal_phone" => "(+593) 428 230 24"
            ],
            [
                "firstname" => "Oswaldo",
                "lastname" => "Chávez",
                "image" => "default",
                "email" => "ochavez@hotmail.com",
                "country_id" => 174,
                "phone" => "(+593) 994 055 115",
                "personal_phone" => "(+593) 428 230 24"

            ]

        ];


        foreach($administrators as $index => $administrator)
        {
            Administrator::create([
                "firstname" => $administrator['firstname'],
                "lastname" => $administrator['lastname'],
                "country_id" => $administrator['country_id'],
                "phone" => $administrator['phone'],
            ]);

            User::create([
                "email" => $administrator['email'],
                "username" => Str::slug($administrator['email']),
                "password" => Hash::make('123456'),
                "image" => $administrator['image'],
                "userable_type" => "Administrator",
                "userable_id" => $index + 1
            ]);
        }
    }

}