Feature: Config Set
  In order to change a configuration value
  As a developer
  I need to modify it in the Config

  Scenario Outline:
    Given a loaded Config
    And a Setting ID "<settingId>" with a new value "<newValue>"
    Then the Setting is changed in the Config

    Examples:
    | settingId    |  newValue  |
    | bool         |  false     |