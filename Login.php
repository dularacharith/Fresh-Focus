<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD']== "POST")
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "select * FROM form where email = '$email' limit 1";
            $result = mysqli_query($con, $query);

            if (mysqli_num_rows($result) > 0) {
                $user_data = mysqli_fetch_assoc($result);
    
                if ($password == $user_data['password']) {
                    header("location: index.php");
                    die;
                } 
            } else {
                echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
            }  
        }
        else{
            echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
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

    <main class="my-form__login">
        <h1 class="my-form__signup-title">Log In</h1>
        <form method="POST" action="#" class="my__form">
            
            <label for="">Email</label>
            <input type="email" name="email" required>
            <label for="">Password</label>
            <input type="password" name="password" required>
            <a class="form-a" href="Signup.php">Don't have an account?</a>
            <button class="submit" type="submit">LogIn</button>
        </form>
    </main>
   
</body>
</html>