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
	$fullname = $_POST['fullname']; // or you can use this $email = $_POST['email
	$email = $_POST['email'];
	$pass = $_POST['psw']; 


$sql = "INSERT INTO login (email, password, name) 
		VALUES ('$email', '$pass', '$fullname')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>