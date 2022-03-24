<?php

    session_start();
    error_reporting(0);

$con=mysqli_connect("localhost","root","password","airline_reservation");
$q=mysqli_query($con,"select pnr from ticket_details where pnr='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['pnr'];
$id=$_SESSION['user'];

$result = mysqli_query($con,"SELECT * FROM passengers WHERE pnr='".$_SESSION['user']."'");
                    
                    
                        
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
         <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        <style>
            .img-thumbnail{
                height: 20vw;
            }
        </style>

        
        <script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>
        
        
    </head>
    <body>
        </div>
<center><img src='images/samolet-avialayner-polet.jpg' class='img-thumbnail' width='1100px' style='height:330px;'></center>
         
  <div class="container-fluid">
                            <div class="row">
                               <div class="col-sm-12">
      <center>  <table class="table table-bordered" style="font-family: Verdana" >
                
              
                
                <center><font style="font-family:Verdana; font-size:18px;">
                   Airport Authority Of India<br>
			Passanger Details against PNR Number
                    </font></center>
                
                <br>
                <br>
                <center><font style="font-family:Arial Black; font-size:20px;">
		______________________________________________________________________
                   </font></center>
                
        <?php
        $row = mysqli_fetch_array($result);

        echo "<br><br>"."pnr: " . $row["pnr"]. "<br>". "Name: " . $row["name"]. "<br>"."Age: "  . $row["age"]. "<br>". "Gender: ".$row["gender"]. "<br>"."Meal: ".$row["meal_choice"]. "<br><br>";
        ?>
    <center> <input type="submit" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></center>
<CENTER><a href="pnr.php">Check other PNR</a></center>
    </body>
</html>


 
            
    </body>
</html>


                     