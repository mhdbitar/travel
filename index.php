<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dream Travel | Home</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">

body{
margin:0;
padding:0;
line-height: 1.5em;
}



#maincontainer{
width: 840px; 
margin: 0 auto;
background-color:#F0FBFC; 
}

#topsection{
background:#89EAFF;
height: 90px; 
}

#topsection h1{
text-align:center;
margin: 0;
padding-top: 30px;
color:#036DA0;
}

#contentwrapper{
float: left;
width: 100%;
}

#contentcolumn{
margin-left: 200px; 

}

#leftcolumn{
float: left;
width: 200px;
height:600px;
margin-left: -840px; 
background:#CBF2FC;
margin-bottom:0;
}

#footer{
clear: left;
width: 100%;
background:#006883;
color: #FFF;
text-align: center;
padding: 4px 0;
}

#footer a{
color: #FFFF80;
}

.innertube{
margin: 10px; 
margin-top: 0;

}

img {
	width: 100%;
}


</style>



</head>
<body>
	<?php session_start(); ?>
<div id="maincontainer">

<header id="topsection"><div class="innertube"><h1>Dream Travel agency</h1></div></header>

<div id="contentwrapper">
<div id="contentcolumn">
<div class="innertube">
<div id="home" class="main_box">
				<h2>Welcome to Dream Travel agency</h2>
				<img src="img/tooplate_image_01.jpg" alt="image" class="img_frame img_float_l" />
				<p><em>The First Travel agency in Saudi Arabia to provide online Hotels, Apartment, sightseeing Tours and Transfers.</em></p>
				<p align="justify">    Dream Travel allow to book air travel through their smart phone, the application allow them to search for the lowest fare available and also make a booking request which is fulfilled offline.<br />Hotel Deals
AFFILIATE HOTELS

Partners:<br />

</p>
<br />
<br />
<br />
				
				<h2>Our Tours country:</h2>
                <nav>
                	<?php
                		$connection = mysqli_connect("localhost", "root", "", "travels");
		                $sql = "SELECT * FROM tours";
		                $result = mysqli_query($connection, $sql);

		                if ($result->num_rows > 0) {
                    		while ($row = mysqli_fetch_assoc($result)) {
                    			echo '<a href="pages/tours.php">'. $row['name'] .'</a> |';
                    	} } 
                    ?>
                </nav>
				
			</div>

</div>
</div>
</div>

<div id="leftcolumn">
<div class="innertube">
               <ul style="list-style:none">
					<li><a href="index.php" class="home"><span></span>Home</a></li>
					<li><a href="pages/aboutus.php" class="about"><span></span>About us</a></li>
					<li><a href="pages/tours.php" class="portfolio"><span></span>Tours</a></li>
					<li><a href="pages/service.php" class="services"><span></span>Services</a></li>
                    <li><a href="pages/branch.php" class="services"><span></span>Branches</a></li>
					<li><a href="pages/contactus.php" class="contact"><span></span>Contact us</a></li>
					<li><a href="pages/register.php">Register</a></li>
					<?php if (isset($_SESSION['logged_in'])) { ?>
						<li><a href="pages/logout.php">Logout</a></li>
						<?php if ($_SESSION['is_admin'] == 1) { ?>
							<li><a href="pages/admin.php">Admin</a></li>
						<?php  }?>
					<?php } else { ?>
						<li><a href="pages/login.php">Login</a></li>
					<?php } ?>
				</ul>
               
                
                </div>
</div>

<footer id="footer"><a href="http://www.dreamtravelagent.com/" target="blank">Copyright &copy; dreamtravel.com </a>
<p id="demo"></p></footer>

</div>


<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.toDateString();
</script>

</body>
</html>
