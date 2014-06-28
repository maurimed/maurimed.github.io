<?php


class UniversitiesTableSeeder extends Seeder {

	public function run()
	{
        University::truncate();

        $universities = [
            [
                "name"             =>  "Lindenwood University",
                "zip_id"           =>  14044,
                "address"          =>  "209 South Kingshigway",
                "website"          =>  "http://www.lindenwood.edu/",
                "phone"            =>  "636 262 4622",
                "email"            =>  "international@lindenwood.edu",
                "tuition_link"     =>  "http://www.lindenwood.edu/financialServices/tuition.html",
                "admissions_link"   =>  "http://www.lindenwood.edu/admissions/international/index.html",
                "sports_division"  =>  "Division II MIA",
                "closest_airport"  =>  "STL (Saint Louis)",
                "far_from_airport" =>  "10 minutes"

            ],
        ];

		foreach($universities as $university)
		{
			University::create($university);
		}
	}

}