<?php
    class InputValidator {

        // This method is used to check whether the username format is correct.
        // Reault
        //      true (Boolean) - The format is correct.
        //         1 (Integer) - The length is less than the minimum.
        //         2 (Integer) - The length is larger than the maximum.
        //         3 (Integer) - The string is not only
        public static function isUsernameCorrect($username) {
            // Length checking.
            $minLength = 3;
            $maxLength = 15;
            if ($username < $minLength) { return 1; }
            if ($username > $maxLength) { return 2; }

            // Check whether alphanumeric.
            if (!ctype_alnum($username)) { return 3; }

            return true;
        }

        // This method is used to check whether the password format is correct.
        // Reault
        //      true (Boolean) - The format is correct.
        //         1 (Integer) - The length is less than the minimum.
        //         2 (Integer) - The length is larger than the maximum.
        //         3 (Integer) - The string contain whitespace.
        public static function isPasswordCorrect($password) {
            // Length checking.
            $minLength = 6;
            $maxLength = 20;
            if ($password < $minLength) { return 1; }
            if ($password > $maxLength) { return 2; }

            // Check whether the password contains white space.
            if (ctype_space($password)) { return 3; }

            return true;
        }

        // This method is used to check whether the email format is correct.
        // Reault
        //      true (Boolean) - The format is correct.
        //         1 (Integer) - The email does not contain '@'.
        //         2 (Integer) - String before `@` is empty.
        //         4 (Integer) - String after `@` is empty.
        //         5 (Integer) - The email domain is blacklisted.
        //         6 (Integer) - The email domain is not in the whitelist.
        public static function isEmailCorrect($email) {
            $lengthOfEmail = strlen($email);
            $pos = strpos($email, '@');

            if ($pos == false) { return 1; }
            if ($pos == 0) { return 2; }
            if ($pos == ($lengthOfEmail-1)) { return 3; }

            return true;
        }

        // This method is used to check whether the first name format is correct.
        // Reault
        public static function isFistNameCorrect($firstname) {

        }

        // This method is used to check whether the first name format is correct.
        // Reault
        public static function isLastNameCorrect($lastname) {

        }

        // This method is used to check whether the file name format is correct.
        // Reault
        public static function isFileNameCorrect($filename) {

        }

        // This method is used to check whether the file extension format is correct.
        // Reault
        public static function isFileExtensionCorrect($address) {

        }

        // This method is used to check whether the IPv4 address format is correct.
        // Reault
        public static function isIPv4AddressCorrect($address) {

        }

        // This method is used to check whether the IPv6 address format is correct.
        // Reault
        public static function isIPv6AddressCorrect($address) {

        }
    }
?>
