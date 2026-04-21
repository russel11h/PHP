<?php require_once "contact_process.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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

    <h2>Registration Form</h2>
    <p><span class="required">* required field</span></p>

    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
            <legend>Registration Form</legend>

            <table>
                <tr>
                    <td><label for="first_name">First Name:</label></td>
                    <td>
                        <input type="text" id="first_name" name="first_name" value="<?= $firstName ?>">
                        <span class="error"><?= $firstNameErr ?></span>
                    </td>
                </tr>

                <tr>
                    <td><label for="last_name">Last Name:</label></td>
                    <td>
                        <input type="text" id="last_name" name="last_name" value="<?= $lastName ?>">
                        <span class="error"><?= $lastNameErr ?></span>
                    </td>
                </tr>

                <tr>
                    <td><label>Gender:</label></td>
                    <td>
                        <input type="radio" name="gender" value="male" <?= ($gender == "male") ? "checked" : "" ?>> Male
                        <input type="radio" name="gender" value="female" <?= ($gender == "female") ? "checked" : "" ?>> Female
                        <span class="error"><?= $genderErr ?></span>
                    </td>
                </tr>

                <tr>
                    <td><label for="email">Email:</label></td>
                    <td>
                        <input type="text" id="email" name="email" value="<?= $email ?>">
                        <span class="error"><?= $emailErr ?></span>
                    </td>
                </tr>

                <tr>
                    <td><label>Reason Of Contact:</label></td>
                    <td>
                        <input type="radio" name="reason" value="Projects" <?= ($reason == "Projects") ? "checked" : "" ?>> Projects
                        <input type="radio" name="reason" value="Thesis" <?= ($reason == "Thesis") ? "checked" : "" ?>> Thesis
                        <input type="radio" name="reason" value="Job" <?= ($reason == "Job") ? "checked" : "" ?>> Job
                        <span class="error"><?= $reasonErr ?></span>
                    </td>
                </tr>

                <tr>
                    <td><label>Topics:</label></td>
                    <td>
                        <input type="checkbox" name="topics[]" value="Web Development" <?= in_array("Web Development", $topics) ? "checked" : "" ?>> Web Development
                        <input type="checkbox" name="topics[]" value="Mobile Development" <?= in_array("Mobile Development", $topics) ? "checked" : "" ?>> Mobile Development
                        <input type="checkbox" name="topics[]" value="AI/ML Development" <?= in_array("AI/ML Development", $topics) ? "checked" : "" ?>> AI/ML Development
                        <span class="error"><?= $topicsErr ?></span>
                    </td>
                </tr>

                <tr>
                    <td><label for="consultation_date">Consultation Date:</label></td>
                    <td>
                        <input type="date" id="consultation_date" name="consultation_date" value="<?= $consultationDate ?>">
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
        </fieldset>
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" &&
        !$firstNameErr && !$lastNameErr && !$emailErr && !$genderErr && !$reasonErr && !$topicsErr): ?>
        
        <h3>Submitted Values</h3>
        <table border="1" cellpadding="8">
            <tr><td>First Name</td><td><?= $firstName ?></td></tr>
            <tr><td>Last Name</td><td><?= $lastName ?></td></tr>
            <tr><td>Gender</td><td><?= $gender ?></td></tr>
            <tr><td>Email</td><td><?= $email ?></td></tr>
            <tr><td>Reason Of Contact</td><td><?= $reason ?></td></tr>
            <tr><td>Topics</td><td><?= implode(", ", $topics) ?></td></tr>
            <tr><td>Consultation Date</td><td><?= $consultationDate ?></td></tr>
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