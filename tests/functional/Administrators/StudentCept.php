<?php

$I = new FunctionalTester($scenario);
$I->am('an administrator');
$I->wantTo('Administrator create a Student account');

$I->amOnPage('/login');
$I->loginAs('Student');
$I->amOnPage('dashboard/students/create');
$I->fillField('email', 'nesssswadministrator@email.com');
$I->fillField('firstname', 'StudentFirstname');
$I->fillField('lastname', 'StudentLastname');
$I->click('Save');
$I->canSeeInSession('success_message', 'Student StudentFirstname was created!');
$I->amGoingTo('dashboard/students');
$I->see('StudentFirstname');
