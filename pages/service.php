<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dream Travel | Services</title>
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
height:750px;
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
<div id="services" class="main_box">
				<h2>Dream Travel Services</h2>
				
					<h2 style="color:#00CBFF">Our  Services</h2>
					<h4>Air:</h4>
					<p>Speedy forwarding of goods and items is our main concern. Having good relations with airlines and our key partners enables us to do this.</p>
					<h4>Sea:</h4>
					<p>Efficient service across the seas with goods and items assured to reach their destinations with client satisfaction in mind. </p>
					<h4>Land:</h4>
					<p>With linkages Kingdom-wide, we guarantee overland deliveries will be there promptly and safely.</p>
                    
                    <h4>Door to Door: </h4>
					<p> Allow our staff to handle all your arrangements from your doorstep to the documentation requirements at the origin airport.</p>
                    <br>
                    <br>
                    <h2>Our Services are available in:</h2>
                    <p id="demo1"></p>
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
var partaners = ["KSA", "Dubai", "Istanbul","Bahrain","Vienna"];
var text = "";
var i;
for (i = 0; i < partaners.length; i++) {
    text += partaners[i] + "<br>";
}

document.getElementById("demo1").innerHTML = text;
</script>

<script>
var d = new Date();
document.getElementById("demo").innerHTML = d.toDateString();
</script>

</body>
</html>
