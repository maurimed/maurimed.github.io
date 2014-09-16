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
//                "city_id" => 1,
                "phone" => "(+593) 985 176 257",
                "ambassador_id" => 1,
                "university_id" => 1
//                "personal_phone" => "(+593) 428 230 24"
            ],
            [
                "firstname" => "Student 2",
                "lastname" => "User",
                "image" => "default",
                "email" => "student2@email.com",
                "city_id" => 1,
                "phone" => "(+593) 994 055 115",
                "ambassador_id" => 6,
                "university_id" => 1

//                "personal_phone" => "(+593) 428 230 24"

            ]

        ];


        foreach($students as $index => $student)
        {
            Student::create([
                "firstname" => $student['firstname'],
                "lastname" => $student['lastname'],
//                "city_id" => $student['city_id'],
                "phone" => $student['phone'],
                "university_id" => $student['university_id'],
                "ambassador_id" => $student['ambassador_id'],
            ]);

            User::create([
                "username" => Str::slug($student['email']),
                "email" => $student['email'],
                "password" => '123456',
                "image" => $student['image'],
                "userable_type" => "Student",
                "userable_id" => $index + 1
            ]);
        }
    }

}