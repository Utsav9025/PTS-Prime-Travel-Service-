<?php
$server = "localhost";
$usrname = "root";
$pasword = "";
$database = "user";
$data = mysqli_connect($server,$usrname,$pasword,$database);
    // $count=0;
    $user=1;
    $mail=1;
    $username = $_POST['username1'];
    $email = $_POST['email1'];
    $password = $_POST['password1'];
    $hash=password_hash($password,PASSWORD_DEFAULT);
    $existSql="SELECT * FROM `signup` WHERE Username = '$username'";
    $result = mysqli_query($data,$existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0 )
    {
        $user = 0;
        echo '<script>alert("This Username is already Taken")</script>';
        // header("location: Signup.html");
    }
    $existSql1 = "SELECT * FROM `signup` WHERE Email = '$email'";
    $result = mysqli_query($data,$existSql1);
    $numExistRowsemail=mysqli_num_rows($result);
    if ($numExistRowsemail > 0 ) {
        $mail = 0;
        echo '<script>alert("This Email is already Taken")</script>';
        // header("location: Signup.html");
    }
    if($user == 0 || $mail == 0)
    {
        include("Signup.html");
    }
    else
    {
$sql="INSERT INTO `signup` (`id`, `Username`, `Email`, `Password`) VALUES (NULL, '$username', '$email', '$hash');";
$result=mysqli_query($data,$sql);
include("Login.html");
    }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>   
    <title>Login Form </title>    
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <section class="container forms">
        <div class=" form login">
            <div class="form-content">
                <header> Login </header>
                <form action="logi" method="post">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="email" required>
                    </div>
                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" name="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>
                    <div class="field button-field">
                        <button>Login</button>     
                    </div>
                    <div class="form-link">
                        <span> Don't have an account ? <a href="Signup.html" class="signup-link"> Sign up</a></span>                        
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html> -->
