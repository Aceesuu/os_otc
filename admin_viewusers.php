<!doctype html>
<head>
  <title>Student List</title>
  <link rel="stylesheet" type="text/css" href="css/viewuser1.css" />
</head>

<header>
<h1>STUDENT INFORMATION LIST</h1>
</header>

<body>
      <div class ="center">
      <form action='view_user_details.php' method='post'>
        </form>
  <thead>
  <table class="table"> <br>
  <table width = "100%" border="1" cellspacing="2" cellpadding ="2"> 
    <tr>
        <th scope="col">USER ID</th>
        <th scope="col">LASTNAME</th>
        <th scope="col">FIRSTNAME</th>
        <th scope="col">MIDDLENAME</th>
        <th scope="col">COURSE</th>
        <th scope="col">YEAR LEVEL</th>
        <th scope="col">SUBJECT</th>
        <th scope="col">SECTION</th>
        <th scope="col">EMAIL ADDRESS</th>
        <th scope="col">CONTACT NO.</th>
        <th> UPDATE/DELETE</th>

    </tr>
  </thead>
  <tbody>
    
    <?php
    
    include('mysql_connect.php');
        $query = "SELECT * FROM tbodetocode_users"; 
        $result = mysqli_query($conn, $query);

        if($result){
           while ($row = mysqli_fetch_array($result)){
            $UserId = $row['user_id']; 
            $last = $row['lastName']; 
            $first = $row['firstName']; 
            $middle = $row['middleName']; 
            $crse = $row['course']; 
            $yrlvl = $row['year_level']; 
            $sbjt = $row['subject']; 
            $sec = $row['section']; 
            $add = $row['address']; 
            $cont = $row['contact'];  
            echo '<th scope="row">'.$UserId.'</th>
                <td>'.$last.'</td>
                <td>'.$first.'</td>
                <td>'.$middle.'</td>
                <td>'.$crse.'</td>
                <td>'.$yrlvl.'</td>
                <td>'.$sbjt.'</td>
                <td>'.$sec.'</td>
                <td>'.$add.'</td>
                <td>'.$cont.'</td>
                <td>
                <button class = "updatebtn"><a href="admin_updateusers.php? updateid='.$UserId.'">Update</a></button>
               <br> <button class = "updatebtn"><a href="admin_deleteusers.php? deleteid='.$UserId.'">Delete</a></button>
                </tr>';
           }
        }
    ?>
    <tr>
  </tbody>
</table>
<br><br><br><br><button class="dashbtn" onclick="document.location='admin_searchusers.php'">SEARCH USER</button>
<br><button class="dashbtn" onclick="document.location='admin_dashboard.php'">BACK TO ADMIN DASHBOARD</button> <br> <br> <br>
</body>

</html>