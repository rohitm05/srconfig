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
<form method="post" action="searchuser1.php">
<br><br>
<table border="4" align="center" >
<tr>
<br><br><br><br><br>
<td>Enter VT Reference no. to search</td><td><Input type ="text" name="t1" id="t1" width="100"></td>
<td><input type ="submit" value="search" name="bt" align="center"></td></tr>
</table>
</center>
</form>

</body>