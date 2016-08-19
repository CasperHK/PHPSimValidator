Documentation of Methods
========================

----------------------------------------------------------------------
## Username

 * Basics
 
   | Usage       | `InputValidator::isUsernameCorrect("USERNAME");` |
   |-------------|--------------------------------------------------|
   | Description | This is used to check the username format.       |

 * Result

   | Return Value | Type    | Meaning                                   |
   |--------------|---------|-------------------------------------------|
   | `true`       | Boolean | The format is correct.                    |
   | `1`          | Integer | The length is less than the minimum.      |
   | `2`          | Integer | The length is larger than the maximum.    |
   | `3`          | Integer | The string is not alphanumeric.           |

 * Custom Setting
 
   | Variable     | Meaning                                          |
   |--------------|--------------------------------------------------|
   | `$minLength` | Define the minimum length for check.             |
   | `$maxLength` | Define the maximum length for check.             |


----------------------------------------------------------------------
## Password

 * Basics
 
   | Usage       | `InputValidator::isPasswordCorrect("PASSWORD");` |
   |-------------|--------------------------------------------------|
   | Description | This is used to check the password format.       |

 * Result

   | Return Value | Type    | Meaning                                   |
   |--------------|---------|-------------------------------------------|
   | `true`       | Boolean | The format is correct.                    |
   | `1`          | Integer | The length is less than the minimum.      |
   | `2`          | Integer | The length is larger than the maximum.    |
   | `3`          | Integer | The string contain whitespace.            |
   

 * Custom Setting
 
   | Variable     | Meaning                                          |
   |--------------|--------------------------------------------------|
   | `$minLength` | Define the minimum length for check.             |
   | `$maxLength` | Define the maximum length for check.             |

----------------------------------------------------------------------
## Email

----------------------------------------------------------------------
## First Name

----------------------------------------------------------------------
## Last Name

----------------------------------------------------------------------
## File Name

----------------------------------------------------------------------
## File Extension

----------------------------------------------------------------------
## IPv4 Address

----------------------------------------------------------------------
## IPv6 Address



