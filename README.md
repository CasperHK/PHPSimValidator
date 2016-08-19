PHP Simple Validator
====================

Introduction
------------
An easy-to-use simple validator for checking user input in PHP. It does not use REGEX to check string input but use string operations in PHP standard library to check string input. Therefore, it can provide very fast speed performance of input validation checking. The valicator class will be written in well structured and documented format so you can easily make change it to fit you need.

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
For the detailed documentation, please check out [this file](https://github.com/CasperHK/PHPSimValidator/blob/master/doc.md).
