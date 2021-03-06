<!DOCTYPE html>
<html>
<head>
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<script src="assets/js/script.js"></script>
</head>
<?php
	$value = $_POST['query'];
	$formfield = $_POST['field'];
	if ($formfield=="name") 
	{
		if (strlen($value) < 4) 
		{
		echo "Must be 3+ letters";
		} 
		else 
		{
			echo "<span>Valid</span>";
		}
	}
	if($formfield=="password") 
	{
		if (strlen($value) < 6) 
		{
			echo "Password too short";
		} 
		else 
		{
			echo "<span>Strong</span>";
		}
	}
	// Check Valid or Invalid email when user enters email in email input field.
	if ($formfield=="email") 
	{
		if (!preg_match("/([w-]+@[w-]+.[w-]+)/", $value)) 
		{
			echo "Invalid email";
		} 
		else 
		{
			echo "<span>Valid</span>";
		}
	}
?>
<body>
	<div id="mainform">
		<div class="innerdiv">
		<!-- Required Div Starts Here -->
		<h2>Form Validation Using AJAX</h2>
		<form action='index.php' id="myForm" method='post' name="myForm">
			<h3>Fill Your Information!</h3>
			<table>
			<tr>
				<td>Username</td>
				<td><input id='username1' name='name' onblur="validate('username',this.value)" type='text'></td>
				<td>
					<div id='username'></div>
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input id='password1' name='password' onblur="validate('password',this.value)" type='password'></td>
				<td>
					<div id='password'></div>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input id='email1' name='email' onblur="validate('email',this.value)" type='text'></td>
				<td>
					<div id='email'></div>
				</td>
			</tr>
			</table>
			<input onclick="checkForm()" type='submit' value='Submit' name="submit">
		</form>
	</div>
</body>
</html>