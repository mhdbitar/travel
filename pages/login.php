<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dream Travel | Contact us</title>
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
    <?php session_start(); ?>
<div id="maincontainer">

<header id="topsection"><div class="innertube"><h1>Dream Travel agency</h1></div></header>

<div id="contentwrapper">
<div id="contentcolumn">
<div class="innertube">
<div id="contact" class="main_box">
                <h2>Login</h2>
                <p style="text-align:center; color:#00C3FF; font-size:20px">Fill your Email and Password<br /><br /></p>
                    <div class="cleaner h30"></div>
                    <div class="col_12 float_l">
                        <div id="contact_form">
                            <?php
                                $connection = mysqli_connect("localhost", "root", "", "travels");
                                if (isset($_POST["submit"]))
                                {
                                    $password = mysqli_real_escape_string($connection,$_POST['password']);
                                    $email = mysqli_real_escape_string($connection,$_POST['email']);
                                    
                                    $sql = "SELECT * FROM users where email='".$email."' AND password='".$password."'";
                                    $result = mysqli_query($connection, $sql);

                                    if ($result->num_rows == 1) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $_SESSION['logged_in'] = 1;
                                            $_SESSION['user_id'] = $row['id'];
                                            $_SESSION['name'] = $row['full_name'];
                                            $_SESSION['email'] = $row['email'];
                                            $_SESSION['is_admin'] = $row['admin']; 
                                        }

                                        if ($_SESSION['is_admin'] == "1") {
                                          header("location: admin.php");
                                        } else {
                                          header("location: ../index.php");
                                        }
                                    }
                                }
                            ?>
                            <form method="post" name="contact" action="login.php">
                                <label for="email">Email:</label> 
                                <input type="email" class="validate-email required input_field" name="email" id="email" />
                                <div class="cleaner h10"></div>
                                                    
                                <label for="subject">Password:</label> 
                                <input type="password" class="validate-subject required input_field" name="password" id="subject"/>

                                <div class="cleaner h10"></div>             
                                                        
                                <input type="submit" value="Login" id="submit" name="submit" class="submit_btn float_l" />
                                <input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />                     
                            </form>     
                        </div> 
                    </div>
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