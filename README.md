# Rafaf HelloWorld

![Magento 2](https://img.shields.io/badge/Magento-2.3.4-orange.svg) ![Version 1](https://img.shields.io/badge/Version-1.0-green.svg)


>   @package      Rafaf_HelloWorld

>   @author       Rafael dos Passos FOrtes

>   @copyright    Copyright &copy; 2020 Rafaf


Description | Data
-------- | ---
Version | 1.0.0
Date     | 02/23/2020
Dev lead | [Rafael dos Passos Fortes](https://github.com/rafafortes)
----------


### Description
This is a simple Hello World Module. The idea is to use some of the Magento 2 capabilities as an example.

## Features

- Plugins
- Observers
- Admin Grid
- Command Line
- Repositories, Factories, Interfaces, API
- Frontend router
- Admin router

## Installation

1. Copy and parte the content into the app folder.
2. Run this commands below on the root folder:

```bash

php -f bin/magento --clear-static-content module:enable Rafaf_HelloWorld
php -f bin/magento setup:upgrade
php -f bin/magento cache:flush

```

Access the route **Stores > Configuration > Rafaf > HelloWorld**.
