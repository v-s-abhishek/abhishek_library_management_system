<?php
include("navbar.php");
include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Information</title>
        <style type="text/css">
            .srch
            {
                padding-left: 900px;

            }
            </style>
            
    </head>
    <body>
        <!--___________________Searchbar_____________________________-->
        <div class="srch">
            <form class="navbar-form" method="post" name="form1">
                    <input class="form-control" type="text" name="search" placeholder="student username..." required="">
                    <button style="background-color:#6db6b9e6;" type="submit" name="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search">
                </button>
            </form>
        </div>
        <h2>List of Students</h2>
        <?php
        if(isset($_POST['submit']))
        {
            $q=mysqli_query($db,"SELECT first,last,username,roll,email,contact FROM `student` where username like '%$_POST[search]%'");
            if(mysqli_num_rows($q)==0)
            {
                echo "Sorry! No student found with that username.Try searching again.";
            }
            else
            {
                echo "<table class='table table-bordered table-hover'>";
        echo "<tr style='background-color:#6db6b9e6;'>";
        //Table Header
        echo "<th>";  echo "First Name";   echo "</th>";
        echo "<th>";  echo "Last Name";   echo "<th>";
        echo "<th>";  echo "Username";   echo "<th>";
        echo "<th>";  echo "Roll";   echo "<th>";
        echo "<th>";  echo "Email";   echo "<th>";
        echo "<th>";  echo "Contact";   echo "<th>";
        echo "</tr>";
        while($row=mysqli_fetch_assoc($q))
        {
            
            echo "</tr>";

            echo "<th>";  echo $row['first'];   echo "";
            echo "<th>";  echo $row['last'];   echo "<th>";
            echo "<th>";  echo $row['username'];   echo "<th>";
            echo "<th>";  echo $row['roll'];   echo "<th>";
            echo "<th>";  echo $row['email'];   echo "<th>";
            echo "<th>";  echo $row['contact'];   echo "<th>";
        echo "</tr>";
        }
    echo "</table>";
            }

        }
        /*if the button is not pressed */
        else
    {
            $res=mysqli_query($db,"SELECT first,last,username,roll,email,contact FROM `student`;");
            echo "<table class='table table-bordered table-hover'>";
            echo "<tr style='background-color:#6db6b9e6;'>";
        //Table Header
            echo "<th>";  echo "First Name";   echo "</th>";
            echo "<th>";  echo "Last Name";   echo "<th>";
            echo "<th>";  echo "Username";   echo "<th>";
            echo "<th>";  echo "Roll";   echo "<th>";
            echo "<th>";  echo "Email";   echo "<th>";
            echo "<th>";  echo "Contact";   echo "<th>";
            echo "</tr>";
        while($row=mysqli_fetch_assoc($res))
        {
            
            echo "</tr>";
            echo "<th>";  echo $row['first'];   echo "";
            echo "<th>";  echo $row['last'];   echo "<th>";
            echo "<th>";  echo $row['username'];   echo "<th>";
            echo "<th>";  echo $row['roll'];   echo "<th>";
            echo "<th>";  echo $row['email'];   echo "<th>";
            echo "<th>";  echo $row['contact'];   echo "<th>";
            echo "</tr>";
        }
            echo "</table>";
    }
   ?>

    </body>

</html>