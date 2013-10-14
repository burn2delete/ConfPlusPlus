Feature: ConfigManager Remove Objects
    In order to empty objects from ConfigManager
    As a Developer
    I need to remove them from the ConfigManager

    Scenario Outline: Remove loader from ConfigManager
        Given an alias "<alias>"
        Then it is removed from the ConfigManager

        Scenarios:
            | alias                           |
            | loader.configplusplus.yaml      |
            | loader.configplusplus.xml       |
            | loader.configplusplus.php       |

    Scenario Outline: Remove writer from ConfigManager
        Given an alias "<alias>"
        Then it is removed from the ConfigManager

        Scenarios:
            | alias                           |
            | writer.configplusplus.yaml      |
            | writer.configplusplus.xml       |
            | writer.configplusplus.php       |

    Scenario Outline: Remove config from ConfigManager
        Given an alias "<alias>"
        Then it is removed from the ConfigManager

        Scenarios:
            | alias                           |
            | config.configplusplus.test.yaml |
            | config.configplusplus.test.xml  |
            | config.configplusplus.test.php  |