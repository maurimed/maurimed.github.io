Feature: Administrator Creation
  In order to administer the website
  As a Administrator
  I want to be able to create different types of users


#@javascript
  Scenario: Administrator creates another Administrator
    Given I am on "/login"
    And I login with Admin credentials
    Then I am on "/dashboard/administrators"
    Then I follow "administrator-create"
    Then I create a new Administrator
    Then I should see "Success Administrator New Admin was created!"


#@javascript
  Scenario: Administrator creates an Ambassador
    Given I am on "/login"
    And I login with Admin credentials
    Then I am on "/dashboard/ambassadors"
    Then I follow "ambassador-create"
    Then I create a new Ambassador
    Then I should see "Success Ambassador New Ambassador was created!"
#
#
##@javascript
#  Scenario: Administrator creates an Student
#    Given I am on "/login"
#    And I login with Admin credentials
#    Then I am on "/dashboard/students"
#    Then I follow "student-create"
#    Then I create a new Student
#    Then I should see "Success Student New Student was created!"