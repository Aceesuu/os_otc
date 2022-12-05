<?php
session_start(); 

if(!$_SESSION['username']){
    header("Location: login_user.php");
}
?>

<!DOCTYPE html>
<html>
  <head>
        <link rel="stylesheet" type="text/css" href="css/welcome.css"/><!-- connected sa CSS -->
    <title>Welcome</title>
</head>

<header>
<h1>STUDENT DASHBOARD</h1>
</header>

<body>
<div class="center">
<div class="container">
<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<p>You are now in the student dashboard page.</p>
<hr>
<p>Take the quiz.</p>
<button type="button" onclick="btnConfirm()" class="quizbtn">QUIZ PAGE</button>

<!-- pag click yung button may alert na lalabas -->
<script>
function btnConfirm() {
  if (!confirm("You will now proceed to take the quiz.")) return false;
  location.href = "user_quizpage.php";
}
</script>

<p>View/Update User Information.</p>
<button class="quizbtn" onclick="document.location='view_user_details.php'">VIEW INFORMATION</button> <br> <br>
<br> <button class="quizbtn" onclick="document.location='login_user.php'">LOGOUT</button>
    </div>
<br> <br> <br> <br> <br> <br><br> <br>
<footer>
<h2>Created by: Ode to Code</h2>
<h2>Members: Babas.  Clores.  Estrera</h2>
</footer>
