<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dream Travel | Branches</title>
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



</style>



</head>
<body>
<div id="maincontainer">

<header id="topsection"><div class="innertube"><h1>Dream Travel agency</h1></div></header>

<div id="contentwrapper">
<div id="contentcolumn">
<div class="innertube">
<div id="home" class="main_box">
				<h2>Dream Travel Services Branches</h2>
				
				<p><em>Our Branches</em></p>
				
				<table border="2">
  <tr>
    <th>Branch Name</th>
    <th>Address</th>		
    <th>Phone Number</th>
  </tr>
  <tr>
    <td>Main Store</td>
    <td>Riyadh - King Fahad Road</td>		
    <td>011-4880801</td>
  </tr>
  <tr>
    <td>Sultana Store</td>
    <td>Riyadh - Sultana – Sultana Street </td>		
    <td>011- 4594355</td>
  </tr>
  <tr>
    <td>Takhasusi Store </td>
    <td>Riyadh - Takhasusi - Takhasusi Street </td>		
    <td>011-4880801</td>
  </tr>
  <tr>
    <td>Main Store</td>
    <td>Riyadh - King Fahad Road</td>		
    <td>011-4880801</td>
  </tr>
  <tr>
    <td>Sultana Store</td>
    <td>Riyadh - Sultana – Sultana Street </td>		
    <td>011- 4594355</td>
  </tr>
  <tr>
    <td>Takhasusi Store </td>
    <td>Riyadh - Takhasusi - Takhasusi Street </td>		
    <td>011-4880801</td>
  </tr>
  <tr>
    <td>Main Store</td>
    <td>Riyadh - King Fahad Road</td>		
    <td>011-4880801</td>
  </tr>
  <tr>
    <td>Sultana Store</td>
    <td>Riyadh - Sultana – Sultana Street </td>		
    <td>011- 4594355</td>
  </tr>
  <tr>
    <td>Takhasusi Store </td>
    <td>Riyadh - Takhasusi - Takhasusi Street </td>		
    <td>011-4880801</td>
  </tr>
</table>
<br>
<br>

                
				<div class="cleaner"></div>
				
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