<?php
require_once __DIR__ . "/database.php";

$fnameErr = $lnameErr = $emailErr = $numberErr = $ageErr = $passwordErr = "";
$fname = $lname = $email = $number = $age = $password = "";
$success = "";

function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["fname"])) {
        $fnameErr = "First name is required";
    } else {
        $fname = cleanInput($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
            $fnameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["lname"])) {
        $lnameErr = "Last name is required";
    } else {
        $lname = cleanInput($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
            $lnameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["number"])) {
        $numberErr = "Contact number is required";
    } else {
        $number = cleanInput($_POST["number"]);
        if (!preg_match("/^[0-9]{11}$/", $number)) {
            $numberErr = "Invalid contact number";
        }
    }

    if (empty($_POST["age"])) {
        $ageErr = "Age is required";
    } else {
        $age = cleanInput($_POST["age"]);
        if (!is_numeric($age) || $age < 1) {
            $ageErr = "Invalid age";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = cleanInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = cleanInput($_POST["password"]);
        if (strlen($password) < 8) {
            $passwordErr = "Password must be at least 8 characters long";
        }
    }

    if (
        empty($fnameErr) &&
        empty($lnameErr) &&
        empty($numberErr) &&
        empty($ageErr) &&
        empty($emailErr) &&
        empty($passwordErr)
    ) {
        $sql = "INSERT INTO admin(first_name, last_name, contact, age, email, password)
                VALUES('$fname', '$lname', '$number', '$age', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            $success = "Data inserted successfully";
        } else {
            $success = "Data not inserted: " . mysqli_error($conn);
        }
    }
}
?>