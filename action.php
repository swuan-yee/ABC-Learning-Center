<?php

if(isset($_POST['fname']) && isset($_POST['lname']) && isset ($_POST['pwd1']) && isset ($_POST['pwd2']) && isset($_POST['uemail']))
{
    
    $first = $_POST['fname'];
    $last = $_POST['lname'];
    $pw1 = $_POST['pwd1'];
    $pw2 = $_POST['pwd2'];
    $email = $_POST['uemail'];


    echo($first);
   
    // $conn = new msqli("localhost", "root", "root", "wdd_db");
    // $sql = "INSERT INTO register(FirstName,Email,Phone,Password) values('" 
    // $_POST["name1"] . "','" . $_POST["email"] . "','" . $_POST["phone1"] . "','" . $_POST["pw1"] . "')";
    // $conn-> query($sql);
    // $conn->close();
}
?>