<?php namespace Codeception\Module;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

use Auth;
use Laracasts\TestDummy\Factory as TestDummy;
use Str;

class FunctionalHelper extends \Codeception\Module{

    public function loginAs($modelClass)
    {
        Auth::logout();

        $user = $this->haveAnAccount(  $modelClass );

        $I = $this->getModule('Laravel4');

        $I->amOnPage( '/login' );
        $I->fillField( 'email', $user['email'] );
        $I->fillField( 'password', 123456 );
        $I->click( 'Login' );
    }

    public function haveAnAccount($modelClass)
    {

        $model = $this->have($modelClass, ["firstname" => $modelClass. ' Firstname']);

        $email = strtolower($modelClass) . "@email.com";
        $username = Str::slug($email);
        $userable_id = $model['id'];
        $userable_type = $modelClass;

        $overrides = compact(
            'email',
            'username',
            'userable_id',
            'userable_type'
        );

        return $this->have('User', $overrides);
    }

    public function have($model, $overrides = [])
    {
        return TestDummy::create($model, $overrides);
    }

}