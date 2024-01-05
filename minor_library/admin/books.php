<?php
include("navbar.php");
include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Books</title>
        <style type="text/css">
            .srch
            {
                padding-left: 1000px;

            }
            </style>
            
    </head>
    <body>
        <!--___________________Searchbar_____________________________-->
        <div class="srch">
            <form class="navbar-form" method="post" name="form1">
                    <input class="form-control" type="text" name="search" placeholder="search books..." required="">
                    <button style="background-color:#6db6b9e6;" type="submit" name="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search">
                </button>
            </form>
        </div>
        <h2>List of Books</h2>
        <?php
        if(isset($_POST['submit']))
        {
            $q=mysqli_query($db,"SELECT * FROM books where name like '%$_POST[search]%'");
            if(mysqli_num_rows($q)==0)
            {
                echo "Sorry! No book found.Try searching again.";
            }
            else
            {
                echo "<table class='table table-bordered table-hover'>";
        echo "<tr style='background-color:#6db6b9e6;'>";
        //Table Header
        echo "<th>";  echo "ID";   echo "</th>";
        echo "<th>";  echo "Book-Name";   echo "<th>";
        echo "<th>";  echo "Author Name";   echo "<th>";
        echo "<th>";  echo "Edition";   echo "<th>";
        echo "<th>";  echo "Status";   echo "<th>";
        echo "<th>";  echo "Quantity";   echo "<th>";
        echo "<th>";  echo "Department";   echo "<th>";
        echo "</tr>";
        while($row=mysqli_fetch_assoc($q))
        {
            
            echo "</tr>";

            echo "<th>";  echo $row['bid'];   echo "</th>";
        echo "<th>";  echo $row['name'];   echo "<th>";
        echo "<th>";  echo $row['authors'];   echo "<th>";
        echo "<th>";  echo $row['edition'];   echo "<th>";
        echo "<th>";  echo $row['status'];   echo "<th>";
        echo "<th>";  echo $row['quantity'];   echo "<th>";
        echo "<th>";  echo $row['department'];   echo "<th>";
        echo "</tr>";
        }
    echo "</table>";
            }

        }
        /*if the button is not pressed */
        else
        {
            $res=mysqli_query($db,"SELECT * FROM `books` ORDER BY `books`.`name` ASC;");
        echo "<table class='table table-bordered table-hover'>";
        echo "<tr style='background-color:#6db6b9e6;'>";
        //Table Header
        echo "<th>";  echo "ID";   echo "</th>";
        echo "<th>";  echo "Book-Name";   echo "<th>";
        echo "<th>";  echo "Author Name";   echo "<th>";
        echo "<th>";  echo "Edition";   echo "<th>";
        echo "<th>";  echo "Status";   echo "<th>";
        echo "<th>";  echo "Quantity";   echo "<th>";
        echo "<th>";  echo "Department";   echo "<th>";
        echo "</tr>";
        while($row=mysqli_fetch_assoc($res))
        {
            
            echo "</tr>";

            echo "<th>";  echo $row['bid'];   echo "</th>";
        echo "<th>";  echo $row['name'];   echo "<th>";
        echo "<th>";  echo $row['authors'];   echo "<th>";
        echo "<th>";  echo $row['edition'];   echo "<th>";
        echo "<th>";  echo $row['status'];   echo "<th>";
        echo "<th>";  echo $row['quantity'];   echo "<th>";
        echo "<th>";  echo $row['department'];   echo "<th>";
        echo "</tr>";
        }
    echo "</table>";

        }
   ?>

    </body>

</html>