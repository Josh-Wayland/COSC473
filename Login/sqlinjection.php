<?php

// Line below is a SQL Injection to display all user names and passwords to the attacker
// nothing' OR 1 = 1 -- '

$servername = "localhost"; 
$dbname = "pizzapoloza";
$username = "root"; // default username to connect to DB is root
$password = ""; // default password to connect to DB is empty, or you can also use root as password also. I am using empty password in my PC.

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$email = $_REQUEST['id']; // or you can use this $email = $_POST['email'];
$password = $_REQUEST['password']; // or you can use this $email = $_POST['email'];
//$sql = "SELECT id, email FROM users where email= '$email' ";

/* fix injection

//$email = mysqli_real_escape_string($conn, $email);

*/



//echo $clean_id;exit;
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

$result = $conn->query($sql);
//echo $sql;exit;
if ($result->num_rows > 0) {
    // output data of each row
	echo " ID &nbsp;&nbsp; Name &nbsp;&nbsp; Password &nbsp;&nbsp; <br>";
	
    while($row = $result->fetch_assoc()) {
         $id = $row["id"];
         $password = $row["password"];
		 $name = $row["name"];
        
          
          echo " $id &nbsp;&nbsp;&nbsp;&nbsp; $name &nbsp;&nbsp;&nbsp;&nbsp;  $password &nbsp;&nbsp;&nbsp;&nbsp; <br>";
    }
} else {
    echo "invalid user or password";
}

?>