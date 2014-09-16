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
       // $this->call('UsersTableSeeder');
       $this->call('AdministratorsTableSeeder');
       $this->call('DirectorsTableSeeder');
       $this->call('AmbassadorsTableSeeder');
       $this->call('StudentsTableSeeder');
       $this->call('RepresentativesTableSeeder') ;
       $this->call('ManagersTableSeeder') ;
//        $this->call('AcademicSchoolsTableSeeder');
//        $this->call('MajorsTableSeeder');
//        $this->call('MinorsTableSeeder');
//        $this->call('PostsTableSeeder');
//        $this->call('RequirementsTableSeeder');

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }

}
