<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Attendance System</title>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<?php require("db-connect.php");
?>

<div class="container">
    <div class="content">
            <?php

            if(!isset($_COOKIE['login'])) {
                header('Location: login.php');
            }
            else{
                if(($_COOKIE['login']) == 1 && ($_COOKIE['student'])==1){
                    require("student.php");
                }
                elseif(($_COOKIE['login']) == 1 && ($_COOKIE['teacher'])==1){
                    require("teacher.php");
                }
            }
            ?>
    </div>
</div>

</body>
</html>