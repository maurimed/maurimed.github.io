<?php

$I = new FunctionalTester($scenario);
$I->am('an representative');
$I->wantTo('Login with an Representative account');

$I->amOnPage('/login');
$I->loginAs('Representative');
$I->seeCurrentUrlEquals('/dashboard');
$I->see('Representativeemailcom', 'span');
$I->amOnPage('/dashboard/users/representativeemailcom/profile');
$I->see('Representative Firstname');

