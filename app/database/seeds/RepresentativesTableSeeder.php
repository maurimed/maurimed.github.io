<?php

use Faker\Factory as Faker;

class RepresentativesTableSeeder extends Seeder {

	public function run()
	{
        Representative::truncate();

        $faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Representative::create([
                'firstname' => $faker->firstName(),
                'lastname' => $faker->lastName()

			]);
		}
	}

}