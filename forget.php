

	<?php
	if(isset($_REQUEST["b1"]))
	{
		$arr=$_REQUEST;
		include 'db.php';
		$result=mysql_query("select * from users where username='".$arr["username"]."' and email='".$arr["email"]."' ");
		if($data=mysql_fetch_array($result)) 
		{
	
			$a= $data["password"]; ;
		}
		else
		{
			 $a= "Try Again !"; 
		}
	}
?>
</script>
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

<body id="ck">
<form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table border="3" align="center">
	<tr><td>VT Reference no. : </td><td><input type="text" name="username"></input></td></tr><br>
	
	<tr><td>Email :</td><td><input type="text" name="email"></input></td></tr><br>
	<tr><td colspan="2" align="center"><input type="submit" value="Confirm" name="b1"></input></td></tr>
	</table>
</form>
<div>
	<h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo @$a; ?></h4>
</div>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="login.php" >Login</a>
</body>
