<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Welcome</title>
<style type="text/css">

a:link{
text-decoration: none;
}
.dropbtn {
    background-color: #b1f4d4;
    color: #ga12f2;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}
.dropbtn:hover{
    background-color: #f98db2;
}
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
<h3 align="right">Welcome , <?php echo $u; ?> |<a href="logout.php">Logout</a>
<br>
<br>

<br>
<br>
<div align="center">
<a href="searchuser.php" class="dropbtn" role="button" id="bt">Search details</a>
<a href="userhome.php" class="dropbtn" role="button" id="bt">Statistics</a>

</div>
</body>
</html>