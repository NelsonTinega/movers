<!DOCTYPE>
<?php 
include("functions/functions.php");
?>
<html>

<html lang="en us">

<head> 

 <title>Movers website</title>
   <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="instant movers is a company speciliazed in quick and efficient relocation of its clients' belongings. Lets move together">
	<meta name="keywords" content="movers,moving, Home relocation,office relocation,mover">
	
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
   <script src="bootstrap/js/respond.js"></script>
   
   <link rel="stylesheet" href="styles/styles.css" media="all"/>
   
   <link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
</head>
<body>
<div class="coLogo">
<img id="mainlogo" src="pictures/logo.png"/>
</div>

 

<div class="menubar">
<ul id="menu">
    <li><a href="index.php" />Home</li>
   <li><a href="contacts.php" />Contact us</li>
   <li><a href="quote.php" />Request Quote</li>
   <li><a href="testimonials.php" />Testimonials</li>
   <li><a href="services.php" />Our Services</li>
</ul>

</div>

 
<div class="content_wrapper">
<div class="row">
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
</div>
<div class="main_wrapper">

<form action="quoteRequest.php" method="POST">
<div id="info">
<p><b>Please fill all the fields accurately. You will be contacted as soon as posssibe using the contact information provided. Our company conducts a <br>previsit which allows us to familiarize ourselves with the area and the goods to be moved. The planned day for moving will <br>assist us to adjust the schedule for conviniency reasons.Thanks in advance </b></p>
</div>
<table>
<tr> <td>Name</td> <td><input type="text" name="name" placeholder="Name" required></td></tr>
<tr> <td>Telephone</td> <td><input type="text" name="telno" placeholder="phone number" required></td></tr>
<tr> <td>Email</td> <td><input type="text" name="email" placeholder="Email" required></td></tr>
<tr> <td>Moving Date</td> <td><input type="text" name="moving_date" placeholder="dd/mm/yyyy" required></td></tr>
<tr> <td>Move From</td> <td><input type="text" name="origin" placeholder="Current place" required></td></tr>
<tr> <td>Current House</td> <td> <select name="currentHouse" >
   <option value="Office">Office</option>
   <option value="Singleroom">Singleroom</option>
   <option value="Bedsitter">Bedsitter</option>
   <option value="One Bedroom">One bedroom</option>
   <option value="Two Bedroom">Two Bedroom</option>
   <option value="Three Bedroom">Three Bedroom</option>
   <option value="Four Bedroom">Four Bedroom</option>
   <option value="Five Bedroom">Five Bedroom</option>
   <option value="Full House">Full House</option>
</select> </td></tr>
<tr> <td>Floor Number</td> <td><input type="text" name="currentFloorNo" placeholder="e.g groundfloor or 1" required ></td></tr>
<tr> <td>Move To</td> <td><input type="text" name="destination" placeholder="Destination" required></td></tr>
<tr> <td>Floor Number</td> <td><input type="text" name="floorDes" placeholder="e.g groundfloor or 1" required></td></tr>
<tr> <td>Pre-visit Date</td> <td><input type="text" name="pre_visit_day" placeholder="dd/mm/yyyy" required></td></tr>
<tr> <td>Time</td> <td><input type="text" name="time" placeholder="e.g 10:00am" required></td></tr>
<tr>  <td colspan="2"><input type="submit" value="SUBMIT"></td></tr>
</table>

</form>
 
<div id="footer"> 
	 <h2 style="text-align:center;padding_top:50px;">&copy; 2017 by nelTechs</h2>
	 
	 </div>
</div>
</div>
</body>
</html>
