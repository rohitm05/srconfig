<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
#ck
{
 width: auto;
height:200px;

position: relative;
animation-name: example;
animation-delay:0s;
animation-duration: 10s;
animation-iteration-count:infinite;
animation-direction:alternate;
}
@keyframes example
{
0%{background-color:#b3ffb3;}
25%{background-color:#ccffff;}
50%{background-color:#ffffcc;}
75%{background-color:#ff9999;}
100%{background-color:#ffb3ff;}
}
</style>
</head>
<body id="ck">


<?php
	session_start();
	@$u=$_SESSION["username"];

?>
<a href="logout.php" align="left"><img src="back.jpg" style="height: 20px; width: 20px;"></a>
<h3 align="right">Welcome , <?php echo $u; ?> |<a href="logout.php">Logout</a></h3>
<br>
<br>

<br>
<br>
<table border="3" align="center" style="height: 100px; background-color: cyan; border-color: red;">
	<?php include 'db.php';
          $us=$_POST["t1"];	
          $c=mysql_query("select username,firstname,lastname,dob,college,branch,email,year,mentor,project from users where username='".$us."'");
         if($arr=mysql_fetch_array($c))
          {
	?>
	<tr><th>VT Refernce no</th><td><?php echo $arr["username"]?></td></tr>
	<tr><th>Name</th><td><?php echo $arr["firstname"]; echo " "; echo $arr["lastname"];?></td></tr>
	<tr><th>Date of Birth</th><td><?php echo $arr["dob"]?></td></tr>
	<tr><th>College</th><td><?php echo $arr["college"]?></td></tr>
	<tr><th>Branch</th><td><?php echo $arr["branch"]?></td></tr>
	<tr><th>Email Id</th><td><?php echo $arr["email"]?></td></tr>
	<tr><th>Year of Training</th><td><?php echo $arr["year"]?></td></tr>
	<tr><th>Mentor</th><td><?php echo $arr["mentor"]?></td></tr>
	<tr><th>Project Title</th><td><?php echo $arr["project"]?></td></tr>
	<?php }?>
</table>
</head>
<body>

</body>
</html>

