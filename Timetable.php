<!DOCTYPE html>

<head>
   
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
        <h3> 10:00:00 --------------<span style="color : Red"> 1:30 hrs</span> -------------- 11:30:00 </h3>
        <h4>EXPRESS</h4>
        <h2>Nadiad - Ahemdabad Gita Mandir </h2>
        <p>Tripcode:127NDTOAMGMEXP1</p>
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
        $price = 48 * $Seats;
        echo "INR : $price.00 ₹";
        ?>
        </h3>
    </div>
        <a href="Payment.html"><button>Book</button></a>
    </div>
    <div class="Box">
        <img src="Grey.jpeg">
        <h3> 4:00:00 --------------<span style="color : Red"> 1:30 hrs</span> -------------- 5:30:00 </h3>
        <h4>EXPRESS</h4>
        <h2>Nadiad - Ahemdabad Gita Mandir </h2>
        <p>Tripcode:137NDTOAMGMEXP2</p>
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
            </span>
            </h3>
            </div>
            <div class="Price">
        <h3>
        <?php
        $price = 43 * $Seats;
        echo "INR : $price.00 ₹";
        ?>
        </h3>
    </div>
    <a href="Payment.html"><button>Book</button></a>
    </div>
    <div class="Box">
        <img src="White.jpeg">
        <h3> 8:00:00 --------------<span style="color : Red"> 2:00 hrs</span> -------------- 10:00:00 </h3>
        <h4>EXPRESS</h4>
        <h2>Nadiad - Ahemdabad Gita Mandir </h2>
        <p>Tripcode:147NDTOAMGMEXP3</p>
        <h5><span style="font-size: 20px;">
            Seats Available
        </span>
            <br>
            <span style="color:green">
            40/40
            </span>
        </h5>
        <div class=Date>
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
        $price = 50 * $Seats;
        echo "INR : $price.00 ₹";
        ?>
        </h3>
    </div>
    <a href="Payment.html"><button>Book</button></a>
    </div>
</body>
</html>