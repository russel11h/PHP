<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contract Me</title>
    <link rel="stylesheet" href="../../portfolio/css/contactme.css">
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="../../index.html">Home</a></li>
        <li><a href="Education.html">Education</a></li>
        <li><a href="Experience.html">Experience</a></li>
        <li><a href="Project.html">Project</a></li>
        <li><a href="contactme.html">Contract Me</a></li>
      </ul>
    </nav>
    <br>
    <form action="Form.php" method="post">
      <fieldset>
        <legend>Registration Form</legend>

        <table>
          <tr>
            <td><label for="fname">First Name:</label></td>
            <td><input type="text" id="fname" name="fname" required /></td>
          </tr>
          <tr>
            <td><label for="lname">Last Name:</label></td>
            <td><input type="text" id="lname" name="lname" required /></td>
          </tr>
          
          <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email" required /></td>
          </tr>
          <tr>
            <td><label for="number">Contact Number:</label></td>
            <td><input type="tel" id="number" name="number"  /></td>
          </tr>

          <tr><td>
            <label>Password:</label></td>
            <td><input type="password" name="password"  /></td>
          </td></tr>
          

          <tr>
            <td></td>
            <td>
              <input type="submit" name="confirm" value="confirm" />
              <input type="reset" />
            </td>
          </tr>
        </table>
      </fieldset>
    </form>

    <br />
     <footer>
      <p>&copy; 2024 Md. Rasel Hossain. All rights reserved.</p>
      <p>Contract</p>
      <p><a href="https://www.facebook.com/russel11h">Facebook Profile</a></p>
      <p><a href="https://github.com/russel11h">GitHub Profile</a></p>
      <p><strong>Phone Number:</strong> +8801712345678</p>
      <p><strong>Email:</strong> <em>raselhossain11@gmail.com </em></p>
    </footer>
  </body>
</html>

<?php
$fnameErr = $lnameErr = $emailErr = $numberErr = $passwordErr = "";
$fname = $lname = $email = $number = $password = "";

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

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = cleanInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["number"])) {
        $numberErr = "Contact number is required";
    } else {
        $number = cleanInput($_POST["lname"]);
        if (!preg_match("/^[0-9' ]*$/", $number)) {
            $numberErr = "Only numbers are allowa";
        }
    }

    if (empty($_POST["password"])) {
      if (strlen($_POST["password"]) < 8) {
            $passwordErr = "Password must be at least 8 characters long";
        } else {
            $password = cleanInput($_POST["password"]);
        }
        $passwordErr = "Password is required";
    } 
        }

if (empty($fnameErr) && empty($lnameErr) && empty($emailErr) && empty($numberErr) && empty($passwordErr)) {
    echo "First Name: {$fname} <br>";
    echo "Last Name: {$lname} <br>";
    echo "Email: {$email} <br>";
    echo "Contact Number: {$number} <br>";
    echo "Password: {$password} <br>";
} else {
    echo $fnameErr . "<br>" . $lnameErr . "<br>" . $emailErr . "<br>" . $numberErr . "<br>" . $passwordErr;
}