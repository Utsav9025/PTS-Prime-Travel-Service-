<!DOCTYPE html>
<html>
  <head>
    <title>Bus Booking Form</title>
    <link rel="stylesheet" href="Booking.css">
    <!-- <link rel="php" href -->
  </head>
  <body>
    <fieldset class="chalook">
    
        <form  action="destination_backend.php" method="post">
          <h1><EM>LET'S TRAVEL</EM></h1>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" >

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" >

        <label for="phone">Phone:</label>
        <input type="number" id="phone" name="phone" >
    
        <!-- <div class="ram"  style=" display: inline-block;"> -->
        <!-- <label for="origin">Origin:</label> -->
      
      
        
        <select class="Source" name="Source">
         <option value="" selected>Source</option>
          <option value="Nadiad">Nadiad</option>
        </select>
          

      <!-- <label for="destination">Destination:</label> -->
      <!-- <select name="destination" id="destination"> -->
        <select class="Destination" name="destination">
            <option value="" selected>Destination</option>
            <option value="Surat">Surat</option>
              <option value="Ahemdabad" >Ahemdabad</option>
              <option value="Bhuj">Bhuj</option>
            </select>
            
              
              
            <!-- <option value="option2">Nadiad</option> -->
            <!-- <option value="option3">Nadiad</option> -->
        
          </div>
      
    <div class="del">
      <!-- <label for="date">Date:</label> -->
      <b><input type="date" id="date" name="date"></b>

      <!-- <label for="time">Time:</label>
      <input type="time" id="time" name="time" required> -->

      
        <select class="seats" name="Seats" >
        <option value=""selected>Seats</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        </select>
        </div>

        <!-- <select class="Gender" name="Gender" required>
          <label for="phone">Phone:</label>
        </select>
       -->
       <div class="Gen">
        <input type="radio" name="Gender" value="MALE" ><b>Male</b>
        <input type="radio" name="Gender" value="FEMALE" id=><b>Female</b>
      <!-- </div>
      <div class="Age"> -->
        
        <input class="age" type="number" name="Age" placeholder="Age" >
      </div>

     <form action="TimeTable2.html">
      <button class="btn" ><b>Book</b></button>
     </form>
      
    </form>
    </fieldset>

    <!-- <script src="Booking.js"></script> -->
    <!-- -->
  </body>
</html>
