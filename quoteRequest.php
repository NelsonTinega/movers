<?php
$server="localhost";
$database="mover";
$username="root";
$password="nelson@moverdb1";
$status="unseen";

$connect= mysqli_connect("localhost","instantm_moverdb","nelson@moverdb1","instantm_mover") or die (mysqli_error());


$inser="INSERT INTO quoterequest(requestantName,requestantNumber,requestantEmail,moveDate,moveFrom,current,initialFloorNumber,Destination,destinationFloor,prevsitDate,previsitTime,Status) 
VALUES('$_POST[name]','$_POST[telno]','$_POST[email]','$_POST[moving_date]','$_POST[origin]','$_POST[currentHouse]','$_POST[currentFloorNo]','$_POST[destination]','$_POST[floorDes]','$_POST[pre_visit_day]','$_POST[time]','$status')";

 $submitRequest=mysqli_query($connect,$inser);      
                if($submitRequest) {	 
							echo "<script>alert('Quote request submitted succesfully. We will send you the quote to your email provided. Thanks in advance')</script>";
	                        echo"<script>window.open('index.php','_self')</script>";
							}
			
			else{
			echo "Error";
			}

?>