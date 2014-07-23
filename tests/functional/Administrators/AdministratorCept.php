<?php

$I = new FunctionalTester($scenario);
$I->am('an administrator');
$I->wantTo('Administrator create another Administrator account');

$I->amOnPage('/login');
$I->loginAs('Administrator');
$I->amOnPage('dashboard/administrators/create');
$I->fillField('email', 'nesssswadministrator@email.com');
$I->fillField('firstname', 'AdministratorFirstname');
$I->fillField('lastname', 'AdministratorLastname');
$I->click('Save');
$I->canSeeInSession('success_message', 'Administrator AdministratorFirstname was created!');
$I->amGoingTo('dashboard/administrators');
$I->see('AdministratorFirstname');
