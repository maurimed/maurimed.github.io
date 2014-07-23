<?php

$I = new FunctionalTester($scenario);
$I->am('an administrator');
$I->wantTo('Login with an Administrator account');

$I->amOnPage('/login');
$I->loginAs('Administrator');
$I->seeCurrentUrlEquals('/dashboard');
$I->see('Administratoremailcom', 'span');
$I->amOnPage('/dashboard/users/administratoremailcom/profile');
$I->see('Administrator Firstname');

