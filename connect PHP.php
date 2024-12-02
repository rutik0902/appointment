<?php
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    
    #$fullname = $_POST['firstname'];
 #   $fullname = $_POST['firstname']
  #  $fullname = $_POST['firstname']

    $conn = new mysqli('localhost', 'root', '', 'hms');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(fullname, Email, phone, gender)
        value(?, ?, ?, ?)");
        $stmt->bind_param("ssis", $fullname, $email, $phone, $gender);
        $stmt->execute();
        echo "Registration Successfully..";
        $stmt->close();
        $conn->close();
    }