Feature: ConfigManager Get Objects
    In order to manipulate objects in the ConfigManager
    As a Developer
    I need to retrieve them from the ConfigManager

    Scenario Outline: Get loader from ConfigManager
        Given an alias "<alias>"
        Then it is retrieved from the ConfigManager

        Scenarios:
            | alias                           |
            | loader.configplusplus.yaml      |
            | loader.configplusplus.xml       |
            | loader.configplusplus.php       |

    Scenario Outline: Get writer from ConfigManager
        Given an alias "<alias>"
        Then it is retrieved from the ConfigManager

        Scenarios:
            | alias                           |
            | writer.configplusplus.yaml      |
            | writer.configplusplus.xml       |
            | writer.configplusplus.php       |

    Scenario Outline: Get config from ConfigManager
        Given an alias "<alias>"
        Then it is retrieved from the ConfigManager

        Scenarios:
            | alias                           |
            | config.configplusplus.test.yaml |
            | config.configplusplus.test.xml  |
            | config.configplusplus.test.php  |