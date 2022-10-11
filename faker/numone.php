<?php
require('vendor/autoload.php');
require_once('../config/config.php');
require_once('../config/db.php');

$faker = Faker\Factory::create();

for ($i = 1; $i <= 100; $i++) {
    $fake_email = mysqli_real_escape_string($conn, $faker->email);
    $fake_lastname = mysqli_real_escape_string($conn, $faker->lastName);
    $fake_firstname = mysqli_real_escape_string($conn, $faker->firstName);
    $fake_username = mysqli_real_escape_string($conn, $faker->userName);
    $fake_password = mysqli_real_escape_string($conn, $faker->password);


    $query = "INSERT INTO useraccount(email, lastName, firstName, userName, password) VALUES('$fake_email', '$fake_lastname', '$fake_firstname', '$fake_username', '$fake_password')";

    if (mysqli_query($conn, $query)) {
        
        echo "successfully inserted new data</br>";
        header('Location: ' . ROOT_URL . '');
    } else {
        echo "insert data unsuccessful</br>";
        echo 'ERROR: ' . mysqli_error($conn);
    }
}
