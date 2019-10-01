CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * Configuration
 * Maintainers


INTRODUCTION
------------

The **dellin_api** provides wrappers to use dellin.ru API. This module is not provide any of UI and targeted for developers.


REQUIREMENTS
------------

This module requires no modules outside of Drupal core.

INSTALLATION
------------

It's recommended to install module via composer.

 * Install the dellin_api module as you would normally install a contributed
   Drupal module. Visit https://www.drupal.org/node/1897420 for further
   information.


CONFIGURATION
-------------

    1. Navigate to Administration > Extend and enable the module.
    2. There is no UI for the module. These module are targeted for developers to
       use on demand, not globally.
    3. Visit the external documentation page for more details.


Roadmap
-----------

By default, all API supported by Client, where you can make an any request you wish by passing raw URI and params.

Some API has object wrappers to make request easy and semantic. The list of available and desired wrappers:

- **Authorization**
  - [ ] Login
  - [ ] Logout
  - [ ] Session info
  - [ ] Counteragents
- **Calculation**
  - [ ] Calculator
  - [ ] Calculator SF
- **Catalogs**
  - [x] City search

MAINTAINERS
-----------

 * Nikita Malyshev (Niklan) - https://www.drupal.org/u/niklan

- [Dellin API](https://dev.dellin.ru/api/) — Official API.
