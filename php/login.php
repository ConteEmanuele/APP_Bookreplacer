<?php

session_start();

if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, "bookreplacer" );

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");

    $rows = mysqli_num_rows($query);
    if($rows != 1){

        header("Location:../login.php?message=I dati inseriti sono errati");
        exit();

    }
    
    $_SESSION['email'] = $email;
    header("Location:../dashboard.php");
    mysqli_close($conn);
    
}

?>