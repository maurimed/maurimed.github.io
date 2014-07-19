  Feature: Blog
  In order to publish posts to the website
  As a Administrator
  I want to be able to make a post


#  @javascript
  Scenario: Administrator makes a post published
    Given I am on "/login"
    And I login with Admin credentials
    Then I follow "Posts"
    Then I follow "New Post"
    Then I create a public post
    Then I should see "Post was created"
    Then I am on "es/blog"
    And I should see "My dummy text of my new post"

