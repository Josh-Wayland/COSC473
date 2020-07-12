 <?php
$servername = "localhost"; 
$dbname = "pizzapoloza";
$username = "root"; // default username to connect to DB is root
$password = "";

// if(isset($_POST['submit'])) {

$formuser = $_POST['username']; 
$pass = $_POST['password'];

// } else {
// 	echo'Kindly fill in fields';
// }

print_r($_POST);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT email, username, password FROM login";
$result = $conn->query($sql);
			 
if ($result->num_rows > 0) {
    // output data from index
	print_r($_POST); 
    while($row = $result->fetch_assoc()) {
         $email = $row["email"];
         $pass = $row["password"];
	 $username = $row["username"];

		 if ($username == $formuser and $password == $pass)
		 {	 
			 header("Location: Hhome/index.php");
		 }
		 
		 
    }
}



?>