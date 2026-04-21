<?php require_once "contact_process.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="../../portfolio/css/contactme.css">
    <style>
        .error {
            color: red;
            margin-left: 8px;
        }
        .required {
            color: red;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="../../index.html">Home</a></li>
            <li><a href="Education.html">Education</a></li>
            <li><a href="Experience.html">Experience</a></li>
            <li><a href="Project.html">Project</a></li>
            <li><a href="Contactme.php">Contact Me</a></li>
        </ul>
    </nav>

    <br>

    <h2>Student Registration</h2>
    <p><span class="required">* required field</span></p>

    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table>
            <tr>
                
                <td>Name <span class="required">*</span></td>
                <td>
                    <input type="text" name="name" value="<?= $name ?>">
                    <span class="error"><?= $nameErr ?></span>
                </td>
            </tr>

            <tr>
                <td>Email <span class="required">*</span></td>
                <td>
                    <input type="text" name="email" value="<?= $email ?>">
                    <span class="error"><?= $emailErr ?></span>
                </td>
            </tr>

            <tr>
                <td>Website</td>
                <td>
                    <input type="text" name="website" value="<?= $website ?>">
                    <span class="error"><?= $websiteErr ?></span>
                </td>
            </tr>

            <tr>
                <td>Comment</td>
                <td>
                    <textarea name="comment" rows="4" cols="40"><?= $comment ?></textarea>
                </td>
            </tr>

            <tr>
                <td>Gender <span class="required">*</span></td>
                <td>
                    <input type="radio" name="gender" value="female" <?= ($gender == "female") ? "checked" : "" ?>> Female
                    <input type="radio" name="gender" value="male" <?= ($gender == "male") ? "checked" : "" ?>> Male
                    <span class="error"><?= $genderErr ?></span>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Register">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" &&
        !$nameErr && !$emailErr && !$websiteErr && !$genderErr): ?>
        <h3>Submitted values</h3>
        <table border="1" cellpadding="8">
            <tr><td>Name</td><td><?= $name ?></td></tr>
            <tr><td>Email</td><td><?= $email ?></td></tr>
            <tr><td>Website</td><td><?= $website ?></td></tr>
            <tr><td>Comment</td><td><?= $comment ?></td></tr>
            <tr><td>Gender</td><td><?= $gender ?></td></tr>
        </table>
    <?php endif; ?>

    <br>
    <footer>
        <p>&copy; 2024 Md. Rasel Hossain. All rights reserved.</p>
        <p>Contact</p>
        <p><a href="https://www.facebook.com/russel11h">Facebook Profile</a></p>
        <p><a href="https://github.com/russel11h">GitHub Profile</a></p>
        <p><strong>Phone Number:</strong> +8801712345678</p>
        <p><strong>Email:</strong> <em>raselhossain11@gmail.com</em></p>
    </footer>
</body>
</html>