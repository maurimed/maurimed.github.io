<?php


class RequirementsTableSeeder extends Seeder {

	public function run()
	{
        Requirement::truncate();

        $requirements = [
            ["name" => "Contract Online", "file" => Str::slug('Contract Online')],
            ["name" => "Application Form Online", "file" => Str::slug('Application Form Online')],
            ["name" => "Passport", "file" => Str::slug('Passport')],
            ["name" => "National ID", "file" => Str::slug('National ID')],
            ["name" => "High School Grades 1", "file" => Str::slug('High School Grades 1')],
            ["name" => "High School Grades 2", "file" => Str::slug('High School Grades 2')],
            ["name" => "High School Grades 3", "file" => Str::slug('High School Grades 3')],
            ["name" => "Final High School Diploma", "file" => Str::slug('Final High School Diploma')],
            ["name" => "Letter of Recommendation 1", "file" => Str::slug('Letter of Recommendation 1')],
            ["name" => "Letter of Recommendation 2", "file" => Str::slug('Letter of Recommendation 2')],
            ["name" => "Personal Essay", "file" => Str::slug('Personal Essay')],
            ["name" => "Bank Letter", "file" => Str::slug('Bank Letter')],
            ["name" => "Health Certificate", "file" => Str::slug('Health Certificate')],
            ["name" => "Affidavit Support from Parents", "file" => Str::slug('Affidavit Support from Parents')],
            ["name" => "TOEFL Score", "file" => Str::slug('TOEFL Score')],
            ["name" => "Extracurricular Diplomas (Not Neccesary)", "file" => Str::slug('Extracurricular Diplomas (Not Neccesary)')],

        ];

		foreach($requirements as $requirement)
		{
			Requirement::create($requirement);
		}
	}

}