<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="header">
    <h2>Register</h2>
  </div>

  <div class="wrapper">
    <div class="title-text">
      <div class="title login">Welcome Back</div>
      <div class="title signup">Welcome</div>
    </div>
    <div class="form-inner">
      <form method="post" action="register.php" class="signup">
        <?php include('errors.php'); ?>
        <div class="field">
          <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
        </div>
        <div class="field">
          <input type="text" placeholder="Email Address" name="email" value="<?php echo $email; ?>" required>
        </div>
        <div class="field">
          <input type="password" placeholder="Password" name="password_1" required>
        </div>
        <div class="field">
          <input type="password" placeholder="Confirm password" name="password_2" required>
        </div>
        <div class="field btn">
          <div class="btn-layer"></div>
          <input type="submit" value="Signup" name="reg_user">
        </div>
        <div class="signup-link">Already a member? <a href="login.php">SignIn now</a>
        </div>
      </form>
    </div>
  </div>
</body>

</html>