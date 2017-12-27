Feature:
  In order to prove that website is correctly running
  As a user
  I want to have a homepage scenario

  Scenario: It receives a response from homepage
    When I am on "/"
    Then the response status code should be 200
    And I should see text matching "Bootstrap starter template"
