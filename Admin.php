<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Login Form </title>
    <!--- css-->
    <link rel="stylesheet" href="login.css">

    <!--  boxicons css-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="container forms">


        <div class=" form login">
            <div class="form-content">
                <header> Login </header>
                <form action="Admin.php" method="post">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="email" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" name="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <!-- <div class="field input-field">
                        <input type="text" placeholder="Usertype" class="usertype" name="Usertype" required>
                    </div> -->
                    <!-- <div class="form-link">
                        <a href="#" class="forgot pass"> Forgot Password ?</a>
                    </div> -->
                    <div class="field button-field">
                    <!-- <a href="login.php">    <button>Login</button></a>  -->
                    <button>Login</button>
                    </div>




                    <div class="form-link">
                        <!-- <span> Don't have an account ? <a href="Signup.html" class="signup-link"> Sign up</a></span> -->

                        <!-- <div class="line"> </div> -->
                    </div>
                </form>
            </div>
        </div>
    </section>


</body>

</html>

<?php

$server = "localhost";
$username = "root";
$paword = "";
$db = "user";

 $data = mysqli_connect($server,$username,$paword,$db);

 $email = $_POST['email'];
 $password = $_POST['password'];

 if($email == "utsavp145@gmail.com" && $password == "C-9025709")
 {
header("location: Adminlogin.html");
        // include("Adminlogin.html");
 }
 else
 {
    echo '<script>alert("Incorrect Email or Password...")</script>';
 }
 ?>