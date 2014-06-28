<?php


class StatesTableSeeder extends Seeder {

    public function run()
    {
        State::truncate();
        $states = [
            // United States
            ["name" => "Alabama", "country_id" => 168, "abbreviation" => "AL"],
            ["name" => "Alaska", "country_id" => 168, "abbreviation" => "AK"],
            ["name" => "Arizona", "country_id" => 168, "abbreviation" => "AZ"],
            ["name" => "Arkansas", "country_id" => 168, "abbreviation" => "AR"],
            ["name" => "California", "country_id" => 168, "abbreviation" => "CA"],
            ["name" => "Colorado", "country_id" => 168, "abbreviation" => "CO"],
            ["name" => "Connecticut", "country_id" => 168, "abbreviation" => "CT"],
            ["name" => "Delaware", "country_id" => 168, "abbreviation" => "DE"],
            ["name" => "Florida", "country_id" => 168, "abbreviation" => "FL"],
            ["name" => "Georgia", "country_id" => 168, "abbreviation" => "GA"],
            ["name" => "Hawaii", "country_id" => 168, "abbreviation" => "HI"],
            ["name" => "Idaho", "country_id" => 168, "abbreviation" => "ID"],
            ["name" => "Illinois", "country_id" => 168, "abbreviation" => "IL"],
            ["name" => "Indiana", "country_id" => 168, "abbreviation" => "IN"],
            ["name" => "Iowa", "country_id" => 168, "abbreviation" => "IA"],
            ["name" => "Kansas", "country_id" => 168, "abbreviation" => "KS"],
            ["name" => "Kentucky", "country_id" => 168, "abbreviation" => "KY"],
            ["name" => "Louisiana", "country_id" => 168, "abbreviation" => "LA"],
            ["name" => "Maine", "country_id" => 168, "abbreviation" => "ME"],
            ["name" => "Maryland", "country_id" => 168, "abbreviation" => "MD"],
            ["name" => "Massachusetts", "country_id" => 168, "abbreviation" => "MA"],
            ["name" => "Michigan", "country_id" => 168, "abbreviation" => "MI"],
            ["name" => "Minnesota", "country_id" => 168, "abbreviation" => "MN"],
            ["name" => "Mississippi", "country_id" => 168, "abbreviation" => "MS"],
            ["name" => "Missouri", "country_id" => 168, "abbreviation" => "MO"],
            ["name" => "Montana", "country_id" => 168, "abbreviation" => "MT"],
            ["name" => "Nebraska", "country_id" => 168, "abbreviation" => "NE"],
            ["name" => "Nevada", "country_id" => 168, "abbreviation" => "NV"],
            ["name" => "New Hampshire", "country_id" => 168, "abbreviation" => "NH"],
            ["name" => "New Jersey", "country_id" => 168, "abbreviation" => "NJ"],
            ["name" => "New Mexico", "country_id" => 168, "abbreviation" => "NM"],
            ["name" => "New York", "country_id" => 168, "abbreviation" => "NY"],
            ["name" => "North Carolina", "country_id" => 168, "abbreviation" => "NC"],
            ["name" => "North Dakota", "country_id" => 168, "abbreviation" => "ND"],
            ["name" => "Ohio", "country_id" => 168, "abbreviation" => "OH"],
            ["name" => "Oklahoma", "country_id" => 168, "abbreviation" => "OK"],
            ["name" => "Oregon", "country_id" => 168, "abbreviation" => "OR"],
            ["name" => "Pennsylvania", "country_id" => 168, "abbreviation" => "PA"],
            ["name" => "Rhode Island", "country_id" => 168, "abbreviation" => "RI"],
            ["name" => "South Carolina", "country_id" => 168, "abbreviation" => "SC"],
            ["name" => "South Dakota", "country_id" => 168, "abbreviation" => "SD"],
            ["name" => "Tennessee", "country_id" => 168, "abbreviation" => "TN"],
            ["name" => "Texas", "country_id" => 168, "abbreviation" => "TX"],
            ["name" => "Utah", "country_id" => 168, "abbreviation" => "UT"],
            ["name" => "Vermont", "country_id" => 168, "abbreviation" => "VT"],
            ["name" => "Virginia", "country_id" => 168, "abbreviation" => "VA"],
            ["name" => "Washington", "country_id" => 168, "abbreviation" => "WA"],
            ["name" => "West Virginia", "country_id" => 168, "abbreviation" => "WV"],
            ["name" => "Wisconsin", "country_id" => 168, "abbreviation" => "WI"],
            ["name" => "Wyoming", "country_id" => 168, "abbreviation" => "WY"],

            

            
        ];

        foreach($states as $state)
        {
            State::create([
                "name" => $state['name'],
                "country_id" => $state['country_id'],
                "abbreviation" => $state['abbreviation'],
            ]);
        }
    }

}