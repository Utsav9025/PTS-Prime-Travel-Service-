<?php
if(isset($_POST['name']))
{
 $server = "localhost";
 $username = "root";
 $password = "";

 $con = mysqli_connect($server,$username,$password);

 if(!$con)
 {
    die("connection to this database failed due to" . mysqli_connect_error());
 }
//  echo "Success connect to DB <br>";

 $price=0;
 $name = $_POST['name'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $place = $_POST['Source'];
 $destination = $_POST['destination'];
 $date = date('Y-m-d', strtotime($_POST['date']));
 $Seats = $_POST['Seats'];
 $Gender = $_POST['Gender'];
 $Age = $_POST['Age'];
 if($Age < 0)
{
    echo '<script>alert("Error in age")</script>';
    header("location: Booking2.php");
}
// if($date < current_timestamp())
// {
//     echo '<script>alert("Error in date")</script>';
//     header("location: Booking2.html");
// }
if($phone <= 999999999)
{
    echo '<script>alert("Error in phone number")</script>';
    header("location: Booking2.php");
}
//  $rowcount = mysqli_num_rows( $con ); 
else {
 $sql = "INSERT INTO `pts`.`book` (`Sr no.`, `name`, `email`, `phone`, `source`, `Destination`, `date`, `seats`, `Gender`, `age`, `Booking Date`) VALUES (NULL, '$name', '$email', '$phone', '$place', '$destination', '$date', '$Seats', '$Gender', '$Age', current_timestamp());";
}

 if($con->query($sql) == true)
 {
   
    if ($destination=="Ahemdabad") { 
        $Sr=NULL;
        echo $Sr;
        include("Timetable.php");
    }
    elseif ($destination=="Surat") {
        # code...
        include("TimeTable2.php");
    }
    else {
        include("TimeTable3.php");
    }
 }
 else
 {
    echo "ERROR : $sql <br> $con->error";
 }

 $con -> close();
}
?>

