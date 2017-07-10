<?php
if(!empty($_POST["register-user"])) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
		if(empty($_POST[$key])) {
		$error_message = "All Fields are required";
		break;
		}
	}
	
/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){ 
	$error_message = 'Passwords should be same<br>'; 
	}

	

	/* Validation to check if gender is selected */
	if(!isset($error_message)) {
	if(!isset($_POST["firstname"])) {
	$error_message = " All Fields are required";
	}
	}

	if(!isset($error_message)) {
	if(!isset($_POST["lastname"])) {
	$error_message = " All Fields are required";
	}
	}
	if(!isset($error_message)) {
	if(!isset($_POST["college"])) {
	$error_message = " All Fields are required";
	}
	}
	if(!isset($error_message)) {
	if(!isset($_POST["branch"])) {
	$error_message = " All Fields are required";
	}
	}
	if(!isset($error_message)) {
	if(!isset($_POST["email"])) {
	$error_message = " All Fields are required";
	}
	}
	if(!isset($error_message)) {
	if(!isset($_POST["year"])) {
	$error_message = " All Fields are required";
	}
	}
	if(!isset($error_message)) {
	if(!isset($_POST["mentor"])) {
	$error_message = " All Fields are required";
	}
	}
	if(!isset($error_message)) {
	if(!isset($_POST["project"])) {
	$error_message = " All Fields are required";
	}
	}
	

	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($error_message)) {
		if(!isset($_POST["terms"])) {
		$error_message = "Accept Terms and Conditions to Register";
		}
	}

	if(!isset($error_message)) {
		require_once("db.php");
		
		
		mysql_query("INSERT INTO users (firstname, lastname, dob, college, branch, email,username,password,year,mentor,project) VALUES
		('" . $_POST["firstname"] . "', '" . $_POST["lastname"] . "', '" . $_POST["dob"] . "', '" . $_POST["college"] . "', '" . $_POST["branch"] . "', '" . $_POST["email"] . "', '" . $_POST["username"] . "', '" . $_POST["password"] . "','" . $_POST["year"] . "','" . $_POST["mentor"] . "','" . $_POST["project"] . "')");
		$r=mysql_affected_rows();
		if ($r>0) 
		{
			
			$error_message = "";
			$success_message = "You have registered successfully!";	
			unset($_POST);
		}
		else
		{

			$error_message = "Problem in registration. Try Again!";
		}
		
	}
}

?>
<html>
<head>
<script type="text/javascript" src="JQuery.js"></script>
<title>Registration Form</title>
<style>
body{
	width:610px;
	font-family:calibri;
}
.error-message {
	padding: 7px 10px;
	background: #fff1f2;
	border: #ffd5da 1px solid;
	color: #d6001c;
	border-radius: 4px;
}
.success-message {
	padding: 7px 10px;
	background: #cae0c4;
	border: #c3d0b5 1px solid;
	color: #027506;
	border-radius: 4px;
}
.demo-table {
	background: #d9eeff;
	width: 100%;
	border-spacing: initial;
	margin: 2px 0px;
	word-break: break-word;
	table-layout: auto;
	line-height: 1.8em;
	color: #333;
	border-radius: 4px;
	padding: 20px 40px;
}
.demo-table td {
	padding: 15px 0px;
}
.demoInputBox {
	padding: 10px 30px;
	border: #a9a9a9 1px solid;
	border-radius: 4px;
}
.btnRegister {
	padding: 10px 30px;
	background-color: #3367b2;
	border: 0;
	color: #FFF;
	cursor: pointer;
	border-radius: 4px;
	margin-left: 10px;
}
#ck
{
 
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
<a href="silog.html" align="left"><img src="back.jpg" style="height: 20px; width: 20px;"></a>
<h2 style="margin-left: 400px; ">Registration Form</h2>
<form name="frmRegistration" method="post" action="">
<table border="0" width="500" align="center" class="demo-table" style="margin-left: 300px;">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
<?php } ?>
<tr>
<td>VT Reference no.</td>
<td><input type="text" class="demoInputBox" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>" ></td>
</tr>

<tr>
<td>First Name</td>
<td><input type="text" class="demoInputBox" name="firstname" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>"></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" class="demoInputBox" name="lastname" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>"></td>
</tr>
<tr>
<td>Date Of Birth</td>
<td><input type="Date" class="demoInputBox" name="dob" value="<?php if(isset($_POST['dob'])) echo $_POST['dob']; ?>"></td>
</tr>
<tr>
<td>College</td>
<td><input type="text" class="demoInputBox" name="college" value=""></td>
</tr>
<tr>
<td>Branch</td>
<td><input type="text" class="demoInputBox" name="branch" value=""></td>
</tr>
<tr>
<td>Email</td>
<td><input type="Email" class="demoInputBox" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" name="password" value=""></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
</tr>
<tr>
<td>Year of Training</td>
<td><input type="text" class="demoInputBox" name="year" value=""></td>
</tr>
<tr>
<td>Mentor Name</td>
<td><input type="text" class="demoInputBox" name="mentor" value=""></td>
</tr>
<tr>
<td>Project Title</td>
<td><input type="text" class="demoInputBox" name="project" value=""></td>
</tr>

<tr>
<td colspan=2>
<input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
</tr>
</table>
</form>
</body></html>
