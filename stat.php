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
 <a href="userhome.php"><img src="back.jpg" style="height: 20px; width: 20px; float: left;"></a>
<h3 align="right">Welcome , <?php echo $u; ?> |<a href="logout.php">Logout</a></h3>
<br>
<br>

<br>
<br>
<?php include 'db.php';
if (isset($_REQUEST["college"])) {
	$s=$_REQUEST["college"];
	}
@$co=mysql_query("select count(*) from users where college='".$s."'");
if($arr=mysql_fetch_array($co)) 
{?>
<br>
<br><br>
<center>
<legend>College Statistic</legend>
<table border="4" style="background-color: cyan; border-color: red;">
	<tr>
		<th colspan="2">college</th><th colspan="2">count</th>
	</tr>
	<tr>
		<td colspan="2"><?php echo @$s;?></td><td colspan="2"><?php echo @$arr[0]; ?></td>
	</tr>
</table>
</center>
<?php }
//session_destroy();?>
</body>
</html>
