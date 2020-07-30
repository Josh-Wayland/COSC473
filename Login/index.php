<?php
$servername = "localhost"; 
$dbname = "pizzapoloza";
$username = "root"; // default username to connect to DB is root
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT email, password, name FROM login";
$result = $conn->query($sql);
//echo $sql;exit;

if ($result->num_rows > 0) {
    // output data of each row
//echo " ID &nbsp;&nbsp; Name &nbsp;&nbsp; Password &nbsp;&nbsp; <br>";
	
    while($row = $result->fetch_assoc()) {
         $email = $row["email"];
         $password = $row["password"];
		$username = $row["name"];
        
          
          //echo " $password";
    }
} else {
    echo "invalid user or password";
}
?>
<html>
	<head>
		<title>Pizza Paradise Paloza - Login</title>
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

	</head>
	<body style="background-color:lightskyblue" font-family="Roboto">
	<div 1> <div style="float:left; padding-left: 5px">
			<img src="Images/Pizza.png" alt="Image could not load" width="8%" height="10%" margin:0 auto>
		
		<center>
			<font style="font-size:40px; padding-left:20px"><strong>Pizza Paradise Paloza</strong></font>
		</center>

	</div 1>
		<div 2><div style="float:right; padding-right:25px">
		<form action="RedirectHome.php" method="post">
			<input type="submit" value="Home"/>
		</form>
	</div 2>

	<div 3>
	<br><br><br><br><br><br><br><center>
		<h1><strong>Login</strong></h1>
		<br><form action="Login.php" method="POST" style="padding-right:70px">
			<label for="name"><strong>Username:</strong></font></label>
		<br><input type="text" id="name" name="name"/>

		<br><br>
			<label for="password"><strong>Password:</strong></font></label>
		<br><input type="password" id="password" name="password"/>
		
		<br><br><br>
			<input type="submit" name="submit" value="Login"/>
		
		
		<br><br><font>Don't have an account? <a href="http://localhost:80/Register">Register now!</font>

		</form>
	</center>
	</div 3>
	
	</body>

</html>