<?php
$server = "localhost";
$username = "root";
$paword = "";
$db = "user";

 $data = mysqli_connect($server,$username,$paword,$db);


 $count=0;
 $email = $_POST['email'];
 $password = $_POST['password'];


//  $Usertype = $_POST['Usertype'];
$existSql1 = "SELECT * FROM `signup`";
 $result = mysqli_query($data,$existSql1);
$num=mysqli_num_rows($result);

//  $sql = "INSERT INTO `user`.`login` (`id`, `Username`, `Password`) VALUES (NULL, '$email', '$password');";
//  $spl=mysqli_query($data,$sql);
 for ($i=0; $i < mysqli_num_rows($result); $i++) { 
      $row=mysqli_fetch_assoc($result);
      $pass=password_verify($password,$row['Password']);
      // echo var_dump($pass);
      if($email===$row['Email'] )
      {
        $count=1;
        // session_start();
        // $_SESSION['loggedin'] = true;
        // $_SESSION['email']=$email;
        header("location: Booking2.php");
      }
 }


//  $numExistRowsemail1=mysqli_num_rows($result);
//  $existSql2 = "SELECT * FROM `signup` WHERE Password = '$password'";
//  $result = mysqli_query($data,$existSql2);
//  $numExistRowsPass=mysqli_num_rows($result);
 if ($count == 0) {
  
  echo '<script>alert("Incorrect Email or Password")</script>';
  // header("location: Signup.html");
  include("Login.html");
}

 ?>

<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Bus Booking Form</title>
    <link rel="stylesheet" href="Booking.css">
   
  </head>
  <body>
    <fieldset class="chalook">
    
        <form  action="Booking.php" method="post">
          <h1><EM>LET'S TRAVEL</EM></h1>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" >

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" >

        <label for="phone">Phone:</label>
        <input type="number" id="phone" name="phone" >
    
    
      
        
        <select class="Source" name="Source">
         <option value="" selected>Source</option>
          <option value="Nadiad">Nadiad</option>
        </select>
          


        <select class="Destination" name="destination">
            <option value="" selected>Destination</option>
            <option value="Surat">Surat</option>
              <option value="Ahemdabad" >Ahemdabad</option>
              <option value="Kutch">Kutch</option>
            </select>
            
              
              
          
        
          </div>
      
    <div class="del">
     
      <b><input type="date" id="date" name="date"></b>

     

      
        <select class="seats" name="Seats" >
        <option value=""selected>Seats</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
        </div>

       <div class="Gen">
        <input type="radio" name="Gender" value="MALE" id="Male"><b>Male</b>
        <input type="radio" name="Gender" value="FEMALE" id="Female"><b>Female</b>
  
        
        <input class="age" type="number" name="Age" placeholder="Age" >
      </div>

     <form action="TimeTable2.html">
      <button class="btn" ><b>Book</b></button>
     </form>
      
    </form>
    </fieldset>

   
  </body>
</html> -->
