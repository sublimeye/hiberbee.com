Feature:
  In order to prove that website is correctly translating
  As a user
  I want to have a translation scenario

  Scenario: Variables are properly translated
    Given I am on "/"
    When I am on "/ru"
    Then I should see text matching "Консалтинг"
    And I am on "/en"
    Then I should see text matching "Consulting"
