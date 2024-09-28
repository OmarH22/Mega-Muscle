<?php 
include 'dbconfig.php';

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["uname"];
    $email=$_POST["email"];
    $pass=$_POST["pswd"];
    $phone=$_POST["phone"];

    $sqlinsert="INSERT INTO `signup`(`name`, `email`, `password`, `phone`) VALUES ('$username','$email','$pass','$phone')";

    $result = mysqli_query($conn,$sqlinsert);
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signupstyle.css">
    <link rel="icon" type="image/svg" href="logos/PNG image.png">

    <title>Sign Up | Mega Muscle</title>
</head>
<body>
    <header>
        <!-- <a href="HomePage.html" class="muscle-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MegaMuscle &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        -->
        
        <input type="search" placeholder="Search" class="search" size="100">         &nbsp;

        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="HomePage.html" ><img src="logos/Screenshot 1445-10-25 at 11.06.22 AM.png" class="myimg"></a>

        <div class="nav-buttons">
            <a href="HomePage.html" class="nav-button">Home</a>
            <div class="category-dropdown">
                <button class="nav-button">Categories &#9660;</button>
                <div class="dropdown-content">
                    <a href="protein.html">Protein</a>
                    <a href="ceatine.html">Creatine</a>
                    <a href="vitamins.html">Vitamins</a>
                    <a href="pre-workout.html">Pre-Workout</a>
                    <a href="snacks.html">Protein Bars & Snacks</a>
                    <a href="healthyfood.html">Healthy Food</a>
                    <a href="fitness.html">Fitness Equipment</a>
                </div>
            </div>
            <a href="contact_us.html" class="nav-button">Contact Us</a>
            <a href="loginform.html" class="nav-button">Log in</a>
            <a href="signupform.html" class="nav-button">Sign up</a>
        </div>
        
    </header>


    <fieldset>
    <form>
        <h3>Welcome</h3>
        <img src="logos/Screenshot 1445-10-25 at 12.47.58 PM.png" class="signupimg"><br><br><br>
        <table>
            <tr>
              <td><label for="name">Your Name</label></td>
              <td><input type="text" id="name" name="uname" placeholder="Enter First Name"></td>
            </tr>
            <tr>
              <td><label for="email">Email</label></td>
              <td><input type="email" id="email" name="email"placeholder="Email" required></td>
            </tr>
            <tr>
              <td><label for="password">Password</label></td>
              <td><input type="password" id="password" name="pswd" placeholder="Password" required></td>
            </tr>
            <!--<tr>
              <td><label for="confirm-password">Confirm Password</label></td>
              <td><input type="password" id="confirm-password" placeholder="Confirm Password" required></td>
            </tr>-->
            <tr>
              <td><label for="phone">Phone Number</label></td>
              <td><input type="tel" id="phone" name="phone" placeholder="Phone Number" required></td>
            </tr>
            
          </table>
        <br>
        <input type="submit" value="Confirm" class="confirm-signup">
    </form>
</fieldset>
</body>
</html>