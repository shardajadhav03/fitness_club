<?php

$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];

    // $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    $sql = "INSERT INTO `club`.`fitness`(`name`, `email`, `number`) VALUES ('$name','$email','$number')";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!DOCTYPE html>
<meta lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Club</title>
</head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="style.css">

</style>

<body class="imu">
    <header class="header">
        <!-- left box for logo -->
        <div class="left">
            <img src="gym1.jpg" alt="">
            <div>Fitness Club</div>
        </div>
        <!-- mid box for navbar -->
        <div class="mid">
            <ul class="navbar">
                <li><a href="gymProject.html" class="active">Home</a></li>
                <li><a href="about.html">About us</a></li>
                <li><a href="classes.html">Classes</a></li>
                <li><a href="contact.html">Contact us</a></li>
            </ul>
        </div>
        <!-- right box for botton -->
        <div class="right">
            <button class="btn">Call us Now</button>
            <button class="btn">Email us</button>
        </div>
    </header>
    <div class="health">
        <p>heath is wealth</p>
    </div>
    <div class="container">
        <h1>Join the best Yoga Class of New York</h1>
        <form action="gym.php" method="post">
            <div class="formgroup">
                <p>Name: </p>
                <input type="text" name="name" placeholder="Enter your Name">
            </div>
            <!-- <div class="formgroup">
                <input type="text" name="" placeholder="Enter your Age">
            </div>
            <div class="formgroup">
                <input type="text" name="" placeholder="Enter your Gender">
            </div>
            <div class="formgroup">
                <input type="text" name="" placeholder="Enter your Locality">
            </div> -->
            <div class="formgroup">
                <p>Email: </p>
                <input type="text" name="email" placeholder="Enter your Email Id">
            </div>
            <div class="formgroup">
                <p>Number: </p>
                <input type="text" name="number" placeholder="Enter your Phone number">
            </div>
            <button class="btn">Submit</button>
        </form>
    </div>
</body>

</html>