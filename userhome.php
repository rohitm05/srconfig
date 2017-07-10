<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="JQuery.js"></script>

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
 <a href="upload.php"><img src="back.jpg" style="height: 20px; width: 20px; float: left;"></a>
<h3 align="right">Welcome , <?php echo $u; ?> |<a href="logout.php">Logout</a></h3>
<br>
<br>

<br>
<br>
<table align="center">
<tr><td>College</td>
<td>
<?php
include 'db.php';
$result=mysql_query("select distinct(college) from users ");
?>
<form method="POST" action="stat.php">
    <select name="college"  >
        <option selected="selected"  hidden="hidden">Choose one</option>
        <?php
        
        while ( ($arr=mysql_fetch_array($result))){
        ?>
        <option  value="<?php echo $arr["college"]; ?>"><?php echo $arr["college"]; ?></option>
        <?php
        }
        ?>
         </select>
    <input type="submit" value="Submit" id="b1" >
    
    <?php// @$_SESSION["c"]=$_POST["college"]; 
    //header('location:stat.php') ?>
    </form>
</td>
<td>Year</td>
<td>
<?php

$result=mysql_query("select distinct(year) from users ");
?>
<form method="POST" action="stat1.php">
    
    <select name="year">
        <option selected="selected"  hidden="hidden">Choose one</option>
        <?php
        
        while ( ($arr=mysql_fetch_array($result))){
        ?>
        <option value="<?php echo $arr["year"]; ?>"><?php echo $arr["year"]; ?></option>
        <?php
        }
        ?>
         </select>
    <input type="submit" value="Submit" id="b2">
    <?//php @$_SESSION["y"]=$_POST["year"]; 
    //header('location:stat1.php'); ?>
    </form>
    </td>
    </tr>
</table>
<div id="stati">
	
</div>
</body>
</html>
