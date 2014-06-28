<?php


class MinorsTableSeeder extends Seeder {

	public function run()
	{
		Minor::truncate();

		$minors = [
			//Languages 35
			["name" => "Chinese", "slug" => Str::slug("Chinese"), "major_id" => "35"],
			["name" => "French", "slug" => Str::slug("French"), "major_id" => "35"],
			["name" => "German", "slug" => Str::slug("German"), "major_id" => "35"],
			["name" => "Japanese", "slug" => Str::slug("Japanese"), "major_id" => "35"],
			["name" => "Portuguese", "slug" => Str::slug("Portuguese"), "major_id" => "35"],
			["name" => "Spanish", "slug" => Str::slug("Spanish"), "major_id" => "35"],

			// Architecture and Design 41
			["name" => "Architecture", "slug" => Str::slug("Architecture"), "major_id" => "41"],

			// Visual Communication 42
			["name" => "Graphic Design", "slug" => Str::slug("Graphic Design"), "major_id" => "42"],
			["name" => "Industrial Design", "slug" => Str::slug("Industrial Design"), "major_id" => "42"],
			["name" => "Fashion Design", "slug" => Str::slug("Fashion Design"), "major_id" => "42"],
			["name" => "Web design", "slug" => Str::slug("Web design"), "major_id" => "42"],
			["name" => "Textile Design", "slug" => Str::slug("Textile Design"), "major_id" => "42"],

			// Healthcare science 45
			["name" => "Clinical laboratory sciences, Clinical pathology & Laboratory medicine", "slug" => Str::slug("Clinical laboratory sciences, Clinical pathology & Laboratory medicine"), "major_id" => "45"],
			["name" => "Dentistry", "slug" => Str::slug("Dentistry"), "major_id" => "45"],
			["name" => "Exercise Science", "slug" => Str::slug("Exercise Science"), "major_id" => "45"],
			["name" => "Physiotherapy", "slug" => Str::slug("Physiotherapy"), "major_id" => "45"],
			["name" => "Nursing", "slug" => Str::slug("Nursing"), "major_id" => "45"],
			["name" => "Ophthalmology", "slug" => Str::slug("Ophthalmology"), "major_id" => "45"],
			["name" => "Pharmacy", "slug" => Str::slug("Pharmacy"), "major_id" => "45"],
			["name" => "Speech and language pathology", "slug" => Str::slug("Speech and language pathology"), "major_id" => "45"],
			["name" => "Veterinary medicine", "slug" => Str::slug("Veterinary medicine"), "major_id" => "45"],

			// Natural Sciences 50
			["name" => "Space Sciences", "slug" => Str::slug("Space Sciences"), "major_id" => "50"],
			["name" => "Earth Sciences (Geography, geology, Meteorology, and Mineralogy)", "slug" => Str::slug("Earth Sciences (Geography, geology, Meteorology, and Mineralogy)"), "major_id" => "50"],
			["name" => "Biology", "slug" => Str::slug("Biology"), "major_id" => "50"],
			["name" => "Chemistry", "slug" => Str::slug("Chemistry"), "major_id" => "50"],
			["name" => "Physics", "slug" => Str::slug("Physics"), "major_id" => "50"],



		]; 

		foreach($minors as $index)
		{
			Minor::create($index);
		}
	}

}