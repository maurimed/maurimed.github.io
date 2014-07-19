<?php


class RequirementsTableSeeder extends Seeder {

	public function run()
	{
        Requirement::truncate();

        $requirements = [
            ["name" => "Contract Online", "template" => Str::slug('Contract Online').'.pdf',"slug" => Str::slug('Contract Online')],
            ["name" => "Application Form Online", "template" => Str::slug('Application Form Online').'.pdf',"slug" => Str::slug('Application Form Online')],
            ["name" => "Passport", "template" => Str::slug('Passport').'.pdf',"slug" => Str::slug('Passport')],
            ["name" => "National ID", "template" => Str::slug('National ID').'.pdf',"slug" => Str::slug('National ID')],
            ["name" => "High School Grades 1", "template" => Str::slug('High School Grades 1').'.pdf',"slug" => Str::slug('High School Grades 1')],
            ["name" => "High School Grades 2", "template" => Str::slug('High School Grades 2').'.pdf',"slug" => Str::slug('High School Grades 2')],
            ["name" => "High School Grades 3", "template" => Str::slug('High School Grades 3').'.pdf',"slug" => Str::slug('High School Grades 3')],
            ["name" => "Final High School Diploma", "template" => Str::slug('Final High School Diploma').'.pdf',"slug" => Str::slug('Final High School Diploma')],
            ["name" => "Letter of Recommendation 1", "template" => Str::slug('Letter of Recommendation 1').'.pdf',"slug" => Str::slug('Letter of Recommendation 1')],
            ["name" => "Letter of Recommendation 2", "template" => Str::slug('Letter of Recommendation 2').'.pdf',"slug" => Str::slug('Letter of Recommendation 2')],
            ["name" => "Personal Essay", "template" => Str::slug('Personal Essay').'.pdf',"slug" => Str::slug('Personal Essay')],
            ["name" => "Bank Letter", "template" => Str::slug('Bank Letter').'.pdf',"slug" => Str::slug('Bank Letter')],
            ["name" => "Health Certificate", "template" => Str::slug('Health Certificate').'.pdf',"slug" => Str::slug('Health Certificate')],
            ["name" => "Affidavit Support from Parents", "template" => Str::slug('Affidavit Support from Parents').'.pdf',"slug" => Str::slug('Affidavit Support from Parents')],
            ["name" => "TOEFL Score", "template" => Str::slug('TOEFL Score').'.pdf',"slug" => Str::slug('TOEFL Score')],
            ["name" => "Extracurricular Diplomas (Not Necessary)", "template" => Str::slug('Extracurricular Diplomas (Not Necessary)').'.pdf',"slug" => Str::slug('Extracurricular Diplomas (Not Necessary)')],

        ];

		foreach($requirements as $requirement)
		{
			Requirement::create($requirement);
		}

        DB::table('student_university')->truncate();
        DB::table('student_university')->insert(
            [
                ['student_id' => 1,'university_id' => 1],
                ['student_id' => 2,'university_id' => 1],
            ]
        );

        DB::table('requirement_university')->truncate();
        DB::table('requirement_university')->insert(
            [
                ['requirement_id' => 1,'university_id' => 1],
                ['requirement_id' => 2,'university_id' => 1],
                ['requirement_id' => 3,'university_id' => 1],
                ['requirement_id' => 4,'university_id' => 1],
                ['requirement_id' => 5,'university_id' => 1],
                ['requirement_id' => 6,'university_id' => 2],
                ['requirement_id' => 7,'university_id' => 2],
                ['requirement_id' => 8,'university_id' => 2],
                ['requirement_id' => 9,'university_id' => 2],
            ]
        );


	}

}