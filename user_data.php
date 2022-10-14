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

    // The Output at the front end page.

    echo "FIRST NAME: ";
    print_r($first_name);
    echo "<br>", "<br>";
    echo "LAST NAME: ";
    print_r($last_name);
    echo "<br>", "<br>";
    echo "EMAIL: ";
    print_r($email);
    echo "<br>", "<br>";
    echo "DATE OF BIRTH: ";
    print_r($dob);
    echo "<br>", "<br>";
    echo "GENDER: ";
    print_r($gender);
    echo "<br>", "<br>";
    echo "COUNTRY: ";
    print_r($country);
    echo "<br>", "<br>";


    // saving the data in a csv file. "a" is used to write into the data without overwriting the other details in it.

    $filename = "user_data.csv";
    $handle = fopen($filename, "a");
    fputcsv($handle, $user);
    fclose($handle);
}
