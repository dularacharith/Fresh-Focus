<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD']== "POST")
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $tel = $_POST['tel'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "insert into form (fname,lname,email,address,tel,password) values ('$firstname','$lastname','$email','$address','$tel','$password')";

            mysqli_query($con, $query);

            echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Please enter valid information')</script>";
        }
    }



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Focus</title>
    <link rel="stylesheet" href="/FreshFocus/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lato-font/3.0.0/css/lato-font.min.css" integrity="sha512-rSWTr6dChYCbhpHaT1hg2tf4re2jUxBWTuZbujxKg96+T87KQJriMzBzW5aqcb8jmzBhhNSx4XYGA6/Y+ok1vQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="app">
    
    <header class="header">
        
        <div class="Logo">
        <a href="#" class="logo__a">Fresh<span class="logo__a-focus">Focus</span></a>
        </div>
        
        <a href="/FreshFocus/Vehicles/Car_page/Car.html" class="dd-toggle__a"><button class="dd-toggle">
            <span class="dd-toggle__text">Vehicles</span>
        </button></a>
        
        <a href="/FreshFocus/Properties/Land_page/Land.html" class="dd-toggle__a"><button class="dd-toggle">
            <span class="dd-toggle__text">Properties</span>
        </button></a>
        
        <!-- <a href="/FreshFocus/Properties/Land.html" class="dd-toggle__a"><button class="dd-toggle">Rent Us</button></a> -->
        
        <button class="dd-toggle__login"><a class="dd-toggle__login" href="/FreshFocus/Login.php">Log In</a></button>
        
        <button class="dd-toggle__signup"><a class="dd-toggle__signup" href="/FreshFocus/Signup.php">Sign Up</a></button>    
    
    </header>

    <main class="my-form">
        <h1 class="my-form__signup-title">Sign Up</h1>
        <form method="POST" action="#" class="my__form">
            <label for="">First Name</label>
            <input type="text" name="fname" required>
            <label for="">Last Name</label>
            <input type="text" name="lname" required>
            <label for="">Email</label>
            <input type="email" name="email" required>
            <label for="">Address</label>
            <input type="text" name="address" required>
            <label for="">Telephone Number</label>
            <input type="tel" name="tel" required>
            <label for="">Password</label>
            <input type="password" name="password" required>
            <a class="form-a" href="Login.php">Already have an account?</a>
            <button class="submit" type="submit">Register</button>
        </form>
    </main>
   
</body>
</html>