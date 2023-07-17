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
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['city'];
    $age = $_POST['occasion'];
    $email = $_POST['members'];
    $phone = $_POST['budget'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `booking`.`booking` (`name`, `city`, `occasion`, `members`, `budget`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome in ED2D</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="area" >
        
    <div  class="container">
        <h1>Welcome to ED2D</h1>
        <p>Enter your details and submit this form to book the event </p>
        <?php
        if($insert == true){
        echo "<p class='submitMsg'>succesfully booked </p>";
        }
    ?>
        

       
        <form action="index2.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="city" id="city" placeholder="Enter your city">
            <input type="text" name="occasion" id="occasion" placeholder="Enter your occasion">
            <input type="text" name="members" id="members" placeholder="Enter your members">
            <input type="text" name="budget" id="budget" placeholder="Enter your budget">
            <textarea name="desc" id="desc" cols="15" rows="5" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
            <span><a href="#"></a></span>
            
        </form>
    </div >
    </div>
    <script src="index.js"></script>
    <!-- INSERT INTO `booking` (`sno`, `name`, `city`, `occasion`, `members`, `budget`, `other`, `dt`) VALUES ('1', 'ieshan', 'hamirpur', 'birthday', '499', '50000', 'no', current_timestamp()); -->
    
</body>
</html>