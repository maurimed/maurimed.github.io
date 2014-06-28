<?php


class StudentsTableSeeder extends Seeder {

    public function run()
    {
        Student::truncate();

        $students = [
            [
                "firstname" => "Student",
                "lastname" => "User",
                "image" => "default",
                "email" => "student@email.com",
//                "country_id" => 174,
                "phone" => "(+593) 985 176 257",
//                "personal_phone" => "(+593) 428 230 24"
            ],
            [
                "firstname" => "Student 2",
                "lastname" => "User",
                "image" => "default",
                "email" => "student2@email.com",
//                "country_id" => 174,
                "phone" => "(+593) 994 055 115",
//                "personal_phone" => "(+593) 428 230 24"

            ]

        ];


        foreach($students as $index => $student)
        {
            Student::create([
                "firstname" => $student['firstname'],
                "lastname" => $student['lastname'],
//                "country_id" => $student['country_id'],
                "phone" => $student['phone'],
            ]);

            User::create([
                "username" => Str::slug($student['email']),
                "email" => $student['email'],
                "password" => Hash::make('123456'),
                "image" => $student['image'],
                "userable_type" => "Student",
                "userable_id" => $index + 1
            ]);
        }
    }

}