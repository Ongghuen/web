<!DOCTYPE html>
<html>

<head>
  <title>Suki - Admin Login</title>
  <link rel="stylesheet" type="text/css" href="../styles/login.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="icon" href="../assets/images/icon.png" sizes="32x32" />
  <link rel="icon" href="../assets/images/icon.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="images/icon.png" />
</head>

<body>
  <div class="background">
    <div class="container">
      <div class="login-content anim">
        <form method="POST" action="login.php">
          <img src="../assets/images/user-pic.png" />
          <h2 class="title">Sign in</h2>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="div">
              <h5>Email</h5>
              <input type="text" class="input" name="email" required />
            </div>
          </div>
          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>Password</h5>
              <input type="password" class="input" name="password" required />
            </div>
          </div>
          <!-- <a href="register.php">Dont Have Account?</a> -->
          <input name="submit" type="submit" class="btn" value="Login" />
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../js/login.js"></script>
  <script type="php"></script>
</body>

</html>