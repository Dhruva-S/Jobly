<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="icon" href="../svg/main.png">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <header>
        <div class="container">
            <nav class="flex items-center justify-between">
                <div class="left flex items-center">
                    <div class="branding">
                        <a href="profile.php"><i class="fab fa-500px fa-3x">Jobly</i></a>
                    </div>
                    <div>
                         <a href="job_post.html" target="_self">Post</a>
                        <a href="searchjobs.php">Search</a>
                        <a href="subscribe.php" >Subscribe</a>
                        <a href="aboutus.php">About Us</a>
                        <a href="feedback.php">Feedback</a>
                    </div>
                </div>
                <div class="btn">
                    <a class="btn btn-primary"  href="profile.php">Profile</a>
                </div>
                
                <a style="background-color:white; color:black;" href="login.php"><b>logout</b></a> 
            </nav>
        </div>
    </header>
</body>
</html>