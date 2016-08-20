PHP Simple Validator
====================

Introduction
------------
An easy-to-use simple validator build on top of `Respect\Validation` for checking user input in PHP. It is written in well structured and documented format so you can easily make change on it to fit you need. This validator implemented a more high-level interface so that you can know less to validate user input.

Usage
-----
 * Download the PHP script file using this url: https://raw.githubusercontent.com/CasperHK/PHPSimValidator/master/php/InputValidator.php

 * Include the validator class.

        required_once('./InputValidator.php');

 * Use the validation method inside.

   ``` php
   if (InputValidator::isPasswordCorrect("PASSWORD")) {
       // Do something you want
   }
   ```
   
Supported Format
----------------
 * [x] Username
 * [x] Password
 * [ ] Email
 * [ ] First Name
 * [ ] Last Name
 * [ ] File Name
 * [ ] File Extension
 * [ ] IPv4 Address
 * [ ] IPv6 Address

Documentation
-------------
For the detailed documentation, please check out [this file](https://github.com/CasperHK/PHPSimValidator/blob/master/doc.md).
