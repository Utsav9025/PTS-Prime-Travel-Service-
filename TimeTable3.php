<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus TimeTable</title>
    <link rel="stylesheet" href="Timetable.css">
    <style>
.Date h3
{
    position: relative;
    top: -340px;
    right:-950px;
    color: blue;
}
.Price h3
{
    position: relative;
    top: -360px;
    right:-1300px;
    color: red;
}
    </style>
</head>
<body>
    <h1>Bus Time Table</h1>
    <div class="Box">
        <img src="Blue.avif">
        <h3> 7:00:00 --------------<span style="color : Red"> 9:30 hrs</span> -------------- 16:30:00 </h3>
        <h4>EXPRESS</h4>
        <h2>Nadiad - Bhuj </h2>
        <p>Tripcode:127NDTOBJEXP1</p>
        <h5><span style="font-size: 20px;">
            Seats Available
        </span>
            <br>
            <span style="color:green">
            40/40
            </span>
        </h5>
        <div class="Date">
            <h3> 
            <?php
            $Date = date('d-m-Y', strtotime($_POST['date']));
              echo "Date - $Date";
              ?>
            </h3>
            </div>
            <div class="Price">
        <h3>
        <?php
        $price = 210 * $Seats;
        echo "INR : $price.00 ₹";
        ?>
        </h3>
    </div>

    <a href="Payment.html"><button>Book</button></a>
    </div>
    <div class="Box">
        <img src="Grey.jpeg">
        <h3> 12:00:00 --------------<span style="color : Red"> 9:00 hrs</span> -------------- 9:00:00 </h3>
        <h4>SLEEPER</h4>
        <h2>Nadiad - Bhuj </h2>
        <p>Tripcode:137NDTOBJSLP2</p>
        <h5><span style="font-size: 20px;">
            Seats Available
        </span>
            <br>
            <span style="color:green">
            40/40
            </span>
        </h5>
        <div class="Date">
            <h3> 
            <?php
            $Date = date('d-m-Y', strtotime($_POST['date']));
              echo "Date - $Date";
              ?>
            </h3>
            </div>
            <div class="Price">
        <h3>
        <?php
        $price = 279 * $Seats;
        echo "INR : $price.00 ₹";
        ?>
        </h3>
    </div>
     

    <a href="Payment.html"><button>Book</button></a>
    </div>
    <div class="Box">
        <img src="White.jpeg">
        <h3> 17:00:00 --------------<span style="color : Red"> 8:00 hrs</span> -------------- 1:00:00 </h3>
        <h4>VOLVO SLEEPER</h4>
        <h2>Nadiad - Bhuj </h2>
        <p>Tripcode:147NDTOBJVSLP3</p>
        <h5><span style="font-size: 20px;">
            Seats Available
        </span>
            <br>
            <span style="color:green">
            40/40
            </span>
        </h5>
        <div class="Date">
            <h3> 
            <?php
            $Date = date('d-m-Y', strtotime($_POST['date']));
              echo "Date - $Date";
              ?>
            </h3>
            </div>
            <div class="Price">
        <h3>
        <?php
        $price = 408 * $Seats;
        echo "INR : $price.00 ₹";
        ?>
        </h3>
    </div>
    
    <a href="Payment.html"><button>Book</button></a>
    </div>
</body>
</html>