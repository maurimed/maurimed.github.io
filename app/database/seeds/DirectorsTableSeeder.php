<?php


class DirectorsTableSeeder extends Seeder {

    public function run()
    {
        Director::truncate();

        $directors = [
            [
                "firstname" => "Director",
                "lastname" => "user",
				"email" => "director@email.com",
                "country_id" => 174,
                "phone" => "(+593) 985 176 257",
                "personal_phone" => "(+593) 428 230 24"
            ],
            [
                "firstname" => "Director 2",
                "lastname" => "user2",
                "email" => "director2@email.com",
                "country_id" => 174,
                "phone" => "(+593) 985 176 257",
                "personal_phone" => "(+593) 428 230 24"
            ],


        ];


        foreach($directors as $index => $director)
        {
            Director::create([
                "firstname" => $director['firstname'],
                "lastname" => $director['lastname'],
                "country_id" => $director['country_id'],
                "phone" => $director['phone'],
            ]);

            User::create([
                "email" => $director['email'],
                "password" => '123456',
                "username" => Str::slug($director['email']),
                "userable_type" => "Director",
                "userable_id" => $index + 1
            ]);
        }
    }

}