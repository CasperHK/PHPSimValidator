PHP Simple Validator
====================

Introduction
------------
A easy to use PHP simple validator for checking user input. It does not use REGEX to check string input but use string operation to check string input. Therefore, it can provide very fast performance of input validation checking. The valicator class will be written in well structured and documented format to let you easily make change to fit you need.

Usage
-----
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
For the detailed documentation for check out [this file](https://github.com/CasperHK/PHPSimValidator/blob/master/doc.md).
