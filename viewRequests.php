<!DOCTYPE>
<?php
$server="localhost";
$database="mover";
$username="root";
$password="";
$status="unseen";

$connect= mysqli_connect("localhost","root","","mover") or die (mysqli_error());

if($connect){
echo"connected";
}
else{
echo"not connected";
}
$searchDetails="select * from quoterequest where Status='$status'";
$runSearch=mysqli_query($connect, $searchDetails);




?>

<html>

<head> 
   <title>Instant Movers Official website</title>
   <link rel="stylesheet" href="styles/styles.css" media="all"/>
   
   <link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
</head>
<body>
<div class="coLogo">
<img id="mainlogo" src="pictures/logo.png"/>
</div>
<div class="header_wrapper">
<img id="logo" src="pictures/1.jpg"/>
<img id="logo2" src="pictures/2.jpg"/>
</div>
 

<div class="menubar">
<ul id="menu">
   <li><a href="#" />View Quote Requests</li>
   

</ul>

</div>

 
<div class="content_wrapper">

<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/2.png" alt="2" title="2" id="wows1_0"/></li>
		<li><img src="data1/images/3.jpg" alt="3" title="3" id="wows1_1"/></li>
		<li><img src="data1/images/4.jpg" alt="4" title="4" id="wows1_2"/></li>
		<li><img src="data1/images/5.jpg" alt="5" title="5" id="wows1_3"/></li>
		<li><img src="data1/images/6.jpg" alt="6" title="6" id="wows1_4"/></li>
		<li><img src="data1/images/7.jpg" alt="7" title="7" id="wows1_5"/></li>
		<li><img src="data1/images/8.png" alt="8" title="8" id="wows1_6"/></li>
		<li><img src="data1/images/9.jpg" alt="9" title="9" id="wows1_7"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/10.jpg" alt="jquery slider" title="10" id="wows1_8"/></a></li>
		<li><img src="data1/images/11.png" alt="11" title="11" id="wows1_9"/></li>
	</ul></div>
<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">slider</a> by WOWSlider.com v8.6</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<div class="main_wrapper">

<div id="table1">

<table border="1" style="margin:auto">
<tr> <th>Name</th><th>Number</th><th>Email</th><th>Move on</th><th>From</th><th>current house</th><th>Floor</th><th>Destination</th><th>Floor</th><th>Previsit</th><th>Time</th></tr>
<?php
while($details=mysqli_fetch_array($runSearch)){
$name=$details['requestantName'];
$number=$details['requestantNumber'];
$email=$details['requestantEmail'];
$moveDate=$details['moveDate'];
$currentPlace=$details['moveFrom'];
$currentHouse=$details['current'];
$initialFloor=$details['initialFloorNumber'];
$Dest=$details['Destination'];
$DestFloor=$details['destinationFloor'];
$preDate=$details['prevsitDate'];
$preTime=$details['previsitTime'];
?>
<tr><td><?php echo $name;?></td><td><?php echo $number;?></td><td><?php echo $email;?></td><td><?php echo $moveDate;?></td><td><?php echo $currentPlace;?></td><td><?php echo $currentHouse;?></td><td><?php echo $initialFloor;?></td><td><?php echo $Dest;?></td><td><?php echo $DestFloor;?></td><td><?php echo $preDate;?></td><td><?php echo $preTime;?></td>
</tr>
<?php
}
?>
</table>

</div>
 
<div id="footer"> 
	 <h2 style="text-align:center;padding_top:50px;">&copy; 2017 by nelTechs</h2>
	 
	 </div>
</div>
</div>
</body>

</html>