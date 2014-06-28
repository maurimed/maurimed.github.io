<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
            $title =$faker->sentence(4);
			Post::create([
                "title" => $title,
                "image" => $faker->word(1).'.jpg',
                "body" => $faker->paragraph(6),
                "slug" => Str::slug($title)

			]);
		}
	}

}