<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, "bookreplacer" );

    $query = mysqli_query($conn, "INSERT INTO users (name, surname, email, password)
                                  VALUES ('$name', '$surname' , '$email' , '$password' )");

    if(!$query){
        header("Location:../registration.php?message=Le credenziali sono gia registrate");
        exit();
    }

    header("Location: ../login.php");
    mysqli_close($conn);

}


?>