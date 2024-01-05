<?php
include "connection.php";
include "navbar.php";

?>

<!DOCTYPE html>
<html>
<head>

  <title>Admin Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src=
"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity=
"sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
  </style>   
</head>
<body>
<!--
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="books.php">BOOKS</a></li>
            <li><a href="feedback.php">FEEDBACK</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">

            <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in"> LOGIN</span></a></li>
            <li><a href="student_login.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
            <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
          </ul>

      </div>
    </nav>
-->
<section>
  <div class="reg_img"style="width: 100%; height: 700px">
  <div class="w3-content w3-section" style="width: 100%; height: 400px">


  
    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">    Library Management System</h1>
        <h1 style="text-align: center; font-size: 25px;">User Registration Form</h1>
      <form name="Registration" action="" method="post">
        
        <div class="login">
          <input class="form-control" type="text" name="first" placeholder="First Name" required=""> <br>
          <input class="form-control" type="text" name="last" placeholder="Last Name" required=""> <br>
          <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
          <input class="form-control" type="text" name="contact" placeholder="phone_number" required=""><br>
          <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div>
      </form>
     
    </div>
  </div>
</section>
<?php
if (isset($_POST['submit'])) {
  $count = 0;
  $sql = "SELECT username FROM `admin`";
  $res = mysqli_query($db, $sql);

  while ($row = mysqli_fetch_assoc($res)) {
      if ($row['username'] == $_POST['username']) {
          $count++; // Increment count when the username is found
      }
  }

  if ($count == 0) {
      // Assuming 'id' is an auto-incrementing primary key
      $stmt = $db->prepare("INSERT INTO `admin` (first, last, username, password, email, contact) VALUES (?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("ssssss", $_POST['first'], $_POST['last'], $_POST['username'], $_POST['password'], $_POST['email'], $_POST['contact']);

      if ($stmt->execute()) {
          echo "Record inserted successfully.";
      } else {
          echo "Error: " . $stmt->error;
      }

      $stmt->close();
      ?>
      <script type="text/javascript">
          alert("Registration successfully");
      </script>
      <?php
  } else {
      ?>
      <script type="text/javascript">
          alert("The username already exists.");
      </script>
      <?php
  }
}
?>

</body>

</body>

