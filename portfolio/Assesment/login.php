<?php require_once "php_process.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>log in</title>
    <link rel="stylesheet" href="../../portfolio/Assesment/signup.css" />
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
    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <table class="form-table">
            <tr>
            <td>Email <span class="required">*</span></td>
                <td>
                    <input type="text" name="email" value="<?= $email ?? ''?>">
                    <span class="error"><?= $emailErr ?? '' ?></span>
                </td>
            </tr>          

          <tr>
            <td>
            <label>Password:</label></td>
            <td><input type="password" name="password" value="<?= $password ?? '' ?>">
                <span class="error"><?= $passwordErr ?? '' ?></span>
              </td>
            </tr>
          

          <tr>            
            <td>
              <input type="submit" name="confirm" value="confirm" />
            </td>              
          </tr>
        </table>
      
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" &&
    empty($emailErr) && empty($passwordErr)): 
    ?>
    <h3>Submitted values</h3>
    <table class="result-table">
        <tr><td>Email</td><td><?= $email ?? '' ?></td></tr>       
        <tr><td>Password</td><td><?= $password ?? '' ?></td></tr>
    </table>
<?php endif; ?>


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

