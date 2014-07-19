<?php


class ManagersTableSeeder extends Seeder {

    public function run()
    {
        Manager::truncate();

        $managers = [
            [
                "firstname" => "Manager",
                "lastname" => "User",
                "image" => "default",
                "email" => "manager@email.com",
//                "country_id" => 174,
                "phone" => "(+593) 985 176 257",
//                "personal_phone" => "(+593) 428 230 24"
            ]

        ];


        foreach($managers as $index => $manager)
        {
            Manager::create([
                "firstname" => $manager['firstname'],
                "lastname" => $manager['lastname'],
//                "country_id" => $manager['country_id'],
                "phone" => $manager['phone'],
            ]);

            User::create([
                "username" => Str::slug($manager['email']),
                "email" => $manager['email'],
                "password" => Hash::make('123456'),
                "image" => $manager['image'],
                "userable_type" => "Manager",
                "userable_id" => $index + 1
            ]);
        }
    }

}