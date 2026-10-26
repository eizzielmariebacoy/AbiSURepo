
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ab!SU SignUp & Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>

  <!-- Welcome -->
  <main class="page" id="welcome">
    <div class="container">
      <div class="logo"><img src="Ab!SU.png" alt="Ab!SU logo"></div>
      <div class="actions">
        <a href="#login" class="btn btn-login">Log in</a>
        <a href="#signup" class="btn btn-signup">Sign up</a>
      </div>
    </div>
  </main>

  <!-- Sign up -->
  <main class="page" id="signup">
    <div class="container">
      <h1 class="title">Sign up</h1>
      <div class="logo"><img src="Ab!SU.png" alt="Ab!SU logo"></div>
      <form class="form" action="signup.php" method="POST">
        <input type="text" name="firstName" placeholder="Enter first name"  required>
        <input type="text" name="lastName" placeholder="Enter last name"  required>
        <input type="email" name="email" placeholder="Enter email" autocomplete="email" required>
        <input type="password" name="password" placeholder="Enter password" autocomplete="new-password" required>
        <input type="password" name="confirm" placeholder="Confirm password" autocomplete="new-password" required>
        <button type="submit" class="btn btn-signup" value="Sign Up" name="signup">Sign up</button>
        <p class="switch">Already have an account? <a href="#login">Log in</a></p>
      </form>
    </div>
  </main>

  <!-- Log in -->
  <main class="page" id="login">
    <div class="container">
      <h1 class="title">Login</h1>
      <div class="logo"><img src="Ab!SU.png" alt="Ab!SU logo"></div>
      <form class="form" action="login.php" method="POST">
        <input type="email" name="email" placeholder="Enter email address" autocomplete="email" required>
        <input type="password" name="password" placeholder="Enter password" autocomplete="current-password" required>
        <a href="#" class="forgot">Forget Password?</a>
        <button type="submit" class="btn btn-login" value="Log in" name="login">Log in</button>
        <p class="switch">Not registered yet? <a href="#signup">Sign up</a></p>
      </form>
    </div>
  </main>
  
</body>
</html>
