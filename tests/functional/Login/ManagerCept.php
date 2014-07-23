<?php

$I = new FunctionalTester($scenario);
$I->am('a manager');
$I->wantTo('Login with an Manager account');

$I->amOnPage('/login');
$I->loginAs('Manager');
$I->seeCurrentUrlEquals('/dashboard');
$I->see('Manageremailcom', 'span');
$I->amOnPage('/dashboard/users/manageremailcom/profile');
$I->see('Manager Firstname');

