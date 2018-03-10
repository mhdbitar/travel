<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dream Travel | About</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">

body{
margin:0;
padding:0;
line-height: 1.8em;
}



#maincontainer{
width: 840px; 
margin: 0 auto;
background-color:#F0FBFC; 
}

#topsection{
background:#89EAFF;
height: 98px; 
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



</style>



</head>
<body>
<div id="maincontainer">

<header id="topsection"><div class="innertube"><h1>Dream Travel agency</h1></div></header>

<div id="contentwrapper">
<div id="contentcolumn">
<div class="innertube">
<div id="about" class="main_box">
				<h2>About Dream Travel agency </h2>
				<img  src="images/tooplate_image_02.jpg" alt="image" class="img_frame img_float_l" />
				<p><em>Dream Travel made its beginning in 1968.Today Ace Travel is ranked among the top three travel agencies in the Kingdom of Saudi Arabia and has over 30 offices located in the Kingdom of Saudi Arabia. </em></p>
				<p align="justify">   

 </p>
			<br /><br /><br /><br /><br /><br />	
		<h3>What We Do</h3>
					<ol class="tooplate_list">
						<li>Nulla facilisi. Maecenas ac odio ipsum donec cursus ames ac turpis egesta</li>
						<li>Fusce risus tortor, interdum in malesuada pulvinar rutrum nec molestie</li>
						<li>Proin facilisis ullamcorper turpis, in placerat  sed, varius a nequ</li>
						<li>Sed vel justo quis ligula blandit commodo molestie  sed, varius a nequ</li>
						<li>Ut tristique sagittis arcu, vel laoreet turpis eu bibendum libero egestas</li>
					</ol>		
				
			</div>

</div>
</div>
</div>

<div id="leftcolumn">
<div class="innertube">
               <ul style="list-style:none">
					<li><a href="../index.php" class="home"><span></span>Home</a></li>
                    <li><a href="aboutus.php" class="about"><span></span>About us</a></li>
                    <li><a href="tours.php" class="portfolio"><span></span>Tours</a></li>
                    <li><a href="service.php" class="services"><span></span>Services</a></li>
                    <li><a href="branch.php" class="services"><span></span>Branches</a></li>
                    <li><a href="contactus.php" class="contact"><span></span>Contact us</a></li>
                    <li><a href="register.php">Register</a></li>
                    <?php if (isset($_SESSION['logged_in'])) { ?>
                        <li><a href="logout.php">Logout</a></li>
                        <?php if (isset($_SESSION['is_admin'])) { ?>
                            <li><a href="admin.php">Admin</a></li>
                        <?php  }?>
                    <?php } else { ?>
                        <li><a href="login.php">Login</a></li>
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
