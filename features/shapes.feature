@
Feature: Graphic editor We need to be sure that is possible to create at least
  circle and square geometric shapes.

  Scenario: create circle
    Given the shape circle
    Then  I should be notified that circle is created

  Scenario: create square
    Given the shape square
    Then  I should be notified that square is created
