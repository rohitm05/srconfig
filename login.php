<?php
session_start();
	if(isset($_REQUEST["b1"]))
	{
		include 'db.php';
		$username=mysql_real_escape_string($_REQUEST["username"]);
		$password=mysql_real_escape_string($_REQUEST["password"]);
		$result=mysql_query("select * from users where username='".$username."' and password='".$password."'");
		if ($arr=mysql_fetch_array($result)) 
		{
			
			if ($arr["username"]==$_REQUEST["username"] && $arr["password"]==$_REQUEST["password"]) 
			{
				$_SESSION["username"]=$arr["username"];
				header('location:upload.php');

			}
		}
		else
		{ echo "Invalid Info......!"; }
	}
?>
<!DOCTYPE html>
<html>
<head>

<title>LOGIN</title>
<script>
function check()
{
	var x=document.getElementById("username").value;
	var y=document.getElementById("password").value;
	 if((x.length)==0&&(y.length==0))
	{
		window.alert("Password and VT no. must not be empty");
		return false;
	}
	 else if((x.length)==0 )
	{
		window.alert("Password must not be empty");
		return false;
	}
	 else if((y.length)==0 )
		{
			window.alert("VT no. must not be empty");
			return false;
		}
}
</script>


<style>
#b1{
border-style:ridge;
border-bottom-color:green;
border-top-color:cyan;
padding-top:25px;
padding-left:35px;
padding-right:40px;
padding-bottom:15px;
background-color: gold;
outline-style:solid;
outline-color: red;
}
tr:hover 
{
background-color: green;
}
img {
    float: right;
    margin: 0 0 10px 10px;
}
input[type=text],[type=password],[type=file], select{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 40%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div{
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
    
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
<a href="index.html"><img src="home.ico" style="height: 30px; width: 30px; float: left;"></a>
<form >

<br><br><br>
<img src="username.jpg" align="right" height="120px">
<br><br><br><br><br><br><br>
<div>

    <label for="username">Enter VT Reference no.</label>
    <input type="text" id="username" name="username"></input>
    <label for="pass">Enter Password</label>
    <input type="password" id="password" name="password"></input>
    <center><input type="submit" value="Login" name="b1" onclick="check()"></input></center>
    <br>
    <a href="forget.php">forgot password</a>
</div>
<br><br><br>
</form>
</body>
</html>





