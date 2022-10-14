<?php

//Variable Definition
if (isset($_POST["submit"])) {
    $first_name = $_POST["firstname"];
    $last_name = $_POST["lastname"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $country = $_POST["country"];


    $user = [$first_name, $last_name, $email, $dob, $gender, $country];

    // saving the data in a csv file. "a" is used to write into the data without overwriting the other details in it.

    $filename = "user_data.csv";
    $handle = fopen($filename, "a");
    fputcsv($handle, $user); // The implode helps to convert the array to string, since fwrite arguement will only take in a string.
    fclose($handle);
}
