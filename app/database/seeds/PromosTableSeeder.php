<?php

use Faker\Factory as Faker;

class PromosTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index)
        {
            Promo::create([
                "title"     => $faker->sentence(),
                "image"     => 'default',
                "youtube"   => "https://www.youtube.com/watch?v=IpFk3bkCtmw",
                "lang"      => "es",
                "published" => 0,
                "user_id"   => 1
            ]);
        }
    }

}