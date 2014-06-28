<?php


class ContinentsTableSeeder extends Seeder {

	public function run()
	{
        Continent::truncate();
        $continents = [
            ["name" => 'Africa'],
            ["name" => 'Asia'],
            ["name" => 'Europe'],
            ["name" => 'North America'],
            ["name" => 'South America'],
            ["name" => 'Oceania'],
        ];

		foreach($continents as $continent)
		{
			Continent::create([
                "name" => $continent['name']
			]);
		}
	}

}