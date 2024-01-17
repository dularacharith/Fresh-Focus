<?php
    include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fresh Focus</title>
    <link rel="stylesheet" href="/FreshFocus/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lato-font/3.0.0/css/lato-font.min.css" integrity="sha512-rSWTr6dChYCbhpHaT1hg2tf4re2jUxBWTuZbujxKg96+T87KQJriMzBzW5aqcb8jmzBhhNSx4XYGA6/Y+ok1vQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
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
        
        <!-- <a href="Properties/Land.html" class="dd-toggle__a"><button class="dd-toggle">Rent Us</button></a> -->
        
        <button class="dd-toggle__login"><a class="dd-toggle__login" href="/FreshFocus/Login.php">Log Out</a></button>
        
        <!-- <button class="dd-toggle__signup"><a class="dd-toggle__signup" href="/Signup.html">Sign Up</a></button>     -->
    
    </header>
   
</body>
</html>