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

            // 
        }
    }
?>
