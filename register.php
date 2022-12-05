<!DOCTYPE html>
    <head>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="css/register.css"/><!-- connected sa CSS -->
	            <title>Register</title>
    </head>

<body>
      
<form action="" method="post"><!-- dito mapupunta pagg naclick register -->
   <form>
   <div class="container">
   <h1>REGISTER</h1>
   <h2>Please fill in this form to create an account.</h2>
   <hr>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="lastName" placeholder="lastName" required>
                    <label for="floatingInput">Last Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="firstName" placeholder="FirstName" required>
                    <label for="floatingInput">First Name</label>
                </div> 

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="middleName" placeholder="MiddleName">
                    <label for="floatingInput">Middle Name</label>
                </div>
                                        
                <select class="form-select" name="course" required>
                        <option value= "">Select Course</option>
                        <option value="BSIT">BSIT</option>
                        <option value="BSCpE">BSCpE</option>
                        <option value="BSIT-BA">BSIT-BA</option>
                </select>

               
                <select class="form-select" name="year_level" required>
                        <option value= "" >Select Year Level</option>
                        <option value="1">Year 1</option>
                        <option value="2">Year 2</option>
                        <option value="3">Year 3</option>
                        <option value="4">Year 4</option>
                        <option value="5">Year 5</option>
                </select>

              
                <select class="form-select" name="subject" required>
                        <option value= "" >Select Subject</option>
                        <option value="ITE ELECTIVE 2">ITE ELECTIVE 2</option>
                        <option value="INTEGRATIVE PROGRAMMING AND TECHNOLOGIES">INTEGRATIVE PROGRAMMING AND TECHNOLOGIES</option>
                        <option value="INFORMATION SECURITY">INFORMATION SECURITY</option>
                        <option value="PRESENTATION SKILLS FOR IT">PRESENTATION SKILLS FOR IT</option>
                        <option value="TECHNICAL WRITING FOR IT">TECHNICAL WRITING FOR IT</option>
                </select>

               
                <select class="form-select" name="section" required>
                        <option value=""   >Select Section</option>
                        <option value="301">301</option>
                        <option value="302">302</option>
                        <option value="303">303</option>
                        <option value="304">304</option>
                        <option value="305">305</option>
                </select>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="address" placeholder="address" required>
                    <label for="floatingInput">Email Address</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="contact" placeholder="contact" maxlength="11" required>
                    <label for="floatingInput">Contact</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="username" placeholder="username" required>
                    <label for="floatingInput">Username</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingInput" name="password" placeholder="password" required>
                    <label for="floatingInput">Password</label>
                </div>

        <hr>
                <input type="submit" value="REGISTER" name = "submit" class="registerbtn"/>

                    <center><p>Already have an account? <a href="login_user.php">Login here</a></p> <!-- mapunta sa Login page if click -->
        </form>
    </body>
</html>

<?php
include('mysql_connect.php'); //connection sa mysql

    if (isset($_POST['submit'])) {

            //check if the form has been submitted
        $ln = $_POST['lastName']; //galing sa input tag sa name
        $fn = $_POST['firstName']; 
        $mn = $_POST['middleName']; 
        $co = $_POST['course'];
        $yr = $_POST['year_level']; 
        $sub = $_POST['subject']; 
        $sec = $_POST['section']; 
        $add = $_POST['address']; 
        $con = $_POST['contact']; 
        $un = $_POST['username']; 
        $ps = $_POST['password']; 

        if(mysqli_num_rows(mysqli_query($conn,"SELECT * FROM tbodetocode_users WHERE username = '$un'"))>0){

                echo '<script type="text/javascript">';
                echo 'alert("This username already exist!")';
                echo '</script>';
                echo "<script>
                document.location.href = 'register.php';
                    </script>";
        }
        
        else
        {
        $query = mysqli_query($conn,"INSERT INTO tbodetocode_users (user_id, lastName, firstName, middleName, course, year_level, subject, section, address, contact, username, password) VALUES(' ','$ln', '$fn', '$mn', '$co', '$yr','$sub','$sec','$add','$con','$un','$ps')");
        

        echo '<script type="text/javascript">';
                echo 'alert("You have registered successfully!")';
        echo '</script>';

        echo "<script>
                document.location.href = 'login_user.php';
            </script>";
     }
}

?>