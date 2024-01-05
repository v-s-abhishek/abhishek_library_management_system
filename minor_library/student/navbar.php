<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  
</head>
<body>
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
            <?php
            if(isset($_SESSION['login_user']))
            {    ?>
            
                
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="">
                <div style="color:white">
                <?php
                    echo "Welcome".$_SESSION['login_user'];
                ?>
                </div>

                    </a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
                </ul>
                <?php
            }
            else
            {    ?>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="student_login.php"><span class="glyphicon glyphicon-log-in"></span> LOGIN</a></li>
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> SIGN UP</a></li>
                </ul>

                <?php
            }

            ?>

            
        </div>
    </nav>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>