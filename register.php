<?php
    $email = $_GET['remail'];
    $pass = $_GET['rpass'];
    $uname = $_GET['rtext'];

    // Database Connection Code
    $servername = "localhost";
    $username = "id21755224_lmosayan";
    $password = "Drag01@2024!";
    $dbname = "id21755224_web";

    $con = mysqli_connect($servername, $username, $password, $dbname);

    if (!$con) {
        die("Error: " . mysqli_connect_error());
    }

    // SQL query for inserting data
    $sql = "INSERT INTO `webpage`(`Username`, `Email`, `Password`) VALUES ('$uname', '$email', '$pass')";

    // Execute the query
    if (mysqli_query($con, $sql)) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    // Close the connection
    mysqli_close($con);
?>
