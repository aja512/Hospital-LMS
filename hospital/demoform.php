<!DOCTYPE HTML>  
<html>
<head>
  <title>AJAX Validation</title>
  <link rel="icon" href="assets/images/red_cross.jpg">  
</head>
<body>  

<?php
// define variables and set to empty values
	$name = $email = $gender = $appointmentdate = $doctors = $dob ="";

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$name = test_input($_POST["name"]);
		$email = test_input($_POST["email"]);
		$doctors = test_input($_POST["doctors"]);
		$appointmentdate = test_input($_POST["appointmentdate"]);
  	$gender = test_input($_POST["gender"]);
  	$dob = test_input($_POST["dob"]);
	}

	function test_input($data) 
	{
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}
?>
<form method="post" action="services.php">  
  Name: <input type="text" name="name" required="">
  <br><br>
  E-mail: <input type="text" name="email" required="">
  <br><br>
  Doctors: <select name="doctors">
  				<option selected="selected">Select Doctor</option>
                <option>Marc Parcival</option>
                <option>Alen Bailey</option>
                <option>Basil Andrew</option>
                <option>Giles Franklin</option>
				<option>Edgar Denzil</option>
                <option>Garfield Feris</option>
           	</select>
  <br><br>
  Appointment date: <input type="date" name="appointmentdate" required="">
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  DOB:<input type="date" name="dob" required="">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $doctors;
echo "<br>";
echo $appointmentdate;
echo "<br>";
echo $gender;
echo "<br>";
echo $dob;

?>

</body>
</html>