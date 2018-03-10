<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dream Travel</title>
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

table, th, td {
    border: 1px solid black;
    text-align: center;
}

td img {
    width: 100px;
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
    <table style="width: 100%;">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tour Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $connection = mysqli_connect("localhost", "root", "", "travels");
                $sql = "SELECT * FROM tours";
                $result = mysqli_query($connection, $sql);

                  if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                        echo "<td>". $row['id'] ."</td>";
                        echo "<td>". $row['name']. "</td>";
                        echo "<td><img src='../img/". $row['image'] ."'></td>";
                        echo "<td><a href='edit.php?id=". $row['id'] ."' class='edit btn'>Edit</a> <a href='delete.php?id=". $row['id'] ."' class='delete btn'>Delete</a></td>";
                      echo "</tr>";
                    }
                  }
              ?>
        </tbody>
    </table>

    <h2>Edit Tour</h2>
    <?php
        $connection = mysqli_connect("localhost", "root", "", "travels");
        if (isset($_POST["submit"]))
        {
            $name = mysqli_real_escape_string($connection,$_POST['name']);

            $sql = "UPDATE tours SET name = '".$name."' WHERE id = " . $_GET['id'];
            $result = mysqli_query($connection, $sql);

          header("location: admin.php");
        }
    ?>
    <form method="post" name="contact" action="edit.php?id=<?= $_GET['id'] ?>">
        <?php
            $connection = mysqli_connect("localhost", "root", "", "travels");
            $sql = "SELECT * FROM tours WHERE id = " . $_GET['id'];
            $result = mysqli_query($connection, $sql);

            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <label for="author">Tour Name:</label> 
                <input type="text" id="author" name="name" value="<?= $row['name'] ?>" class="required input_field" />
                <div class="cleaner h10"></div>
            <?php } }?>
        <input type="submit" value="Edit" id="submit" name="submit" class="submit_btn float_l" />
    </form>
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