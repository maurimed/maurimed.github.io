<?php

class AcademicSchoolsTableSeeder extends Seeder {

	public function run()
	{
		AcademicSchool::truncate();
		$academicSchools = [

			["name" => "Arts", "slug" => "arts"],
			["name" => "Business", "slug" => "business"],
			["name" => "Education", "slug" => "communication"],
			["name" => "Engineering", "slug" => "engineering"],
			["name" => "Humanities & Social Work", "slug" => "humanities-and-social-work"],
			["name" => "Medicine & Sciences", "slug" => "medicine-and-sciences"],
            ["name" => "Social Sciences", "slug" => "social-sciences"],
            ["name" => "Communication", "slug" => "communication"],

		];

		foreach($academicSchools as $index)
		{
			AcademicSchool::create($index);
		}
	}

}