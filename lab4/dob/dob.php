<?php
    if(isset($_POST["submit"])) {
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        if (!empty($day) && !empty($month) && !empty($year)) {
            // Validate day, month, and year
            if (!($day >= 1 && $day <= 31)) {
                echo "Day must be between 1-31";
            } else if (!($month >= 1 && $month <= 12)) {
                echo "Month must be between 1-12";
            } else if (!($year >= 1953 && $year <= 1998)) {
                echo "Year must be between 1953 and 1998";
            } else {
                echo "DOB is valid.";
            }
        } else {
            echo "Please fill all the information";
        }
    }
?>