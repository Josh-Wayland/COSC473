 <?php
$servername = "localhost"; 
$dbname = "pizzapoloza";
$username = "root"; // default username to connect to DB is root
$password = "";

if(isset($_POST['submit'])) {

$formuser = $_POST['name']; 
$pass = $_POST['password'];

} else {
	echo'Kindly fill in fields';
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
	// echo'I connected successfully, dad';
}
$sql = "SELECT email, name, password FROM login";
$result = mysqli_query($conn, $sql);

// $row_cnt = $result->num_rows;
			 
if (!$result || mysqli_num_rows($result) > 0) {
    // output data from index
	$row = $result->fetch_assoc();
	// print_r($row);
    while($row = $result->fetch_assoc()) {
         $email = $row["email"];
	// print_r($email);
         $password = $row["password"];
	// print_r($pass);
	 $name = $row["name"];
	// print_r($name);
		 if ($name == $formuser and $password == $pass)
		 {	 
			include 'Redirect.php';
			echo " $id &nbsp;&nbsp;&nbsp;&nbsp; $email &nbsp;&nbsp;&nbsp;&nbsp;  $password &nbsp;&nbsp;&nbsp;&nbsp; $name &nbsp;&nbsp;&nbsp;&nbsp; <br>";
		 }
		 
		 
    }
} 


?>