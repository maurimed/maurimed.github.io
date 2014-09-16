<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
        User::truncate();
        Administrator::truncate();
        Student::truncate();
        Representative::truncate();
//        Ambassador::truncate();
        Director::truncate();


//        Eloquent::unguard();
        User::create([
            "email" => "admin@email.com",
            "username" => Str::slug("admin@email.com", "_"),
            "password" => Hash::make('123456'),
            "userable_type" => 'Administrator',
            "userable_id" => 1,
        ]);

        User::create([
            "email" => "student@email.com",
            "username" => Str::slug("student@email.com", "_"),
            "password" => Hash::make('123456'),
            "userable_type" => 'Student',
            "userable_id" => 1,
        ]);

        User::create([
            "email" => "parent@email.com",
            "username" => Str::slug("parent@email.com", "_"),
            "password" => Hash::make('123456'),
            "userable_type" => 'Representative',
            "userable_id" => 1,
        ]);

//        User::create([
//            "email" => "ambassador@email.com",
//            "username" => Str::slug("ambassador@email.com", "_"),
//            "password" => Hash::make('123456'),
//            "userable_type" => 'Parent',
//            "userable_id" => 1,
//        ]);

        User::create([
            "email" => "director@email.com",
            "username" => Str::slug("director@email.com", "_"),
            "password" => Hash::make('123456'),
            "userable_type" => 'Director',
            "userable_id" => 1,
        ]);



        Administrator::create([ "firstname" => "Admin", "lastname" => "User", "about_me" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure." ]);
        Student::create([       "firstname" => "Student", "lastname" => "User" ]);
        Representative::create([ "firstname" => "Parent", "lastname" => "User" ]);
//        Ambassador::create([ "firstname" => "Ambassador", "lastname" => "User" ]);
        Director::create([ "firstname" => "Director", "lastname" => "User" ]);

//		$faker = Faker::create();

//        Administrator::create([
//            "firstname" => "Dashboard",
//            "lastname" => "User",
//            "phone" => "(593) 983221385",
//            "personal_email" => "personal@email.com",
//            "personal_phone" => "(593) 96666666",
//            "address" => $faker->address(),
//            "about_me" => $faker->paragraph(),
//        ]);

//
//        $type = ['', 'Administrator', 'Student', 'Representative', 'Ambassador'];
//        $id = 1;
//        $userable_id = 1;
//		foreach(range(1, 40) as $index)
//		{
//            if($index >= 0)$id = 1;
//            if($index >= 11)$id = 2;
//            if($index >= 21)$id = 3;
//            if($index >= 31)$id = 4;
//
//            if( $index == 11 or $index ==21 or $index == 31 )$userable_id = 1;
//
//			User::create([
//                "userable_type" => $type[$id],
//                "userable_id" => $userable_id++,
//                "username" => $faker->userName(),
//                "email" => $faker->email(),
//                "password" => Hash::make('123456'),
//			]);
//		}

	}

}