<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
//        $this->call('UsersTableSeeder');
        $this->call('AmbassadorsTableSeeder');
        $this->call('AcademicSchoolsTableSeeder');
        $this->call('DirectorsTableSeeder');
        $this->call('AdministratorsTableSeeder');
//        $this->call('RepresentativesTa`bleSeeder') ;
//        $this->call('MajorsTableSeeder');
//        $this->call('MinorsTableSeeder');
//        $this->call('StudentsTableSeeder');
//        $this->call('PostsTableSeeder');
        $this->call('ContinentsTableSeeder');
//        $this->call('CountriesTableSeeder');
//        $this->call('StatesTableSeeder');
//        $this->call('CitiesTableSeeder');
//        $this->call('ZipsTableSeeder');
//        $this->call('RequirementsTableSeeder');
//        $this->call('UniversitiesTableSeeder');

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }

}
