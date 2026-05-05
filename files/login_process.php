<?php
require_once __DIR__ . "/database.php";

$emailErr = $passwordErr = "";
$email = $password = "";
$loginMessage = "";

function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
    }

    if (empty($emailErr) && empty($passwordErr)) {
        $sql = "SELECT * FROM admin 
                WHERE email='$email' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $loginMessage = "Login successful";
        } else {
            $loginMessage = "Invalid email or password";
        }
    }
}
?>