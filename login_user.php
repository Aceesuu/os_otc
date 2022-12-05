<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="css/login2.css"/><!-- connected sa CSS -->
    <title>Register</title>
</head>

<body>  
  <form method="post" action="login_user.php">  
      <div class="container"> <br><br>
        <h1>LOGIN USER</h1>
     <center> <h2>Please login here to proceed.</h2> <center>
       <hr>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br>
      
        <button type="submit" class="signupbtn" name="submit">LOGIN</button>
        <button type="submit" class="signupbtn" onclick="document.location='homepage.php'" name="submit">HOME</button>
      <br>
      <p>Don't have an account yet? <a href="register.php">Sign up here</a>.</p> 
  </div>

  <?php
  include("mysql_connect.php");

    if (isset($_POST['submit'])) {
            //check if the form has been submitted
        $un = $_POST['username']; //galing sa input tag sa name
        $ps = $_POST['password'];

        $query = "SELECT * FROM tbodetocode_users WHERE username = '$un' AND password='$ps'";
        $row = mysqli_query($conn,$query);

        if(mysqli_num_rows($row))
        {
          echo "<script>window.open('user_dashboard.php','_self')</script>";  
                $_SESSION['username']=$un;
        }
        else
        {
          echo "<script>alert('Username or Password is incorrect!')</script>"; 
        }

        }
?>

</body>
</html>