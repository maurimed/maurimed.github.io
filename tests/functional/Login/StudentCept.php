<?php

$I = new FunctionalTester($scenario);
$I->am('an student');
$I->wantTo('Login with an Student account');

$I->amOnPage('/login');
$I->loginAs('Student');
$I->seeCurrentUrlEquals('/dashboard');
$I->see('Studentemailcom', 'span');
$I->amOnPage('/dashboard/users/studentemailcom/profile');
$I->see('Student Firstname');

