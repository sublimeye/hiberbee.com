Feature:
  In order to prove that website is correctly running
  As a user
  I want to have a homepage scenario

  Scenario: It receives a response from homepage
    Given I am on "/index.html"
    When the response status code should be 200
    Then I should see text matching "Hiberbee"
