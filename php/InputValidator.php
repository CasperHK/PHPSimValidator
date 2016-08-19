<?php
    class InputValidator {

        // This method is used to check whether the username format is correct.
        // Reault
        //      true (boolean) - The format is correct.
        //         1     (int) - The length is less than the minimum.
        //         2     (int) - The length is larger than the maximum.
        //         3     (int) - The string is not only
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
        //      true (boolean) - The format is correct.
        //         1     (int) - The length is less than the minimum.
        //         2     (int) - The length is larger than the maximum.
        public static function isPasswordCorrect($password) {
            // Length checking.
            $minLength = 3;
            $maxLength = 15;
            if ($password < $minLength) { return 1; }
            if ($password > $maxLength) { return 2; }

            return true;
        }

        // This method is used to check whether the email format is correct.
        // Reault
        public static function isEmailCorrect($email) {

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
