<?php
	if (session_status() == PHP_SESSION_NONE) {
		session_start();
    }

    if(isset($_POST['output']) && isset($_POST['public'])){
        $password = $_POST['output'];
        $public = $_POST['public'];
        $line = str_split($password);
        $line = implode("", $line);
        $line = explode(",", $line);

        $public = str_split($public);
        $public = implode("", $public);
        $public = intval($public);

        $cipher = [200];
        
        for($i=0; $i<sizeof($line); $i++){
            $n = ($line[$i] * $public)%256;
            $cipher[$i] = chr($n);
        }
        $password = implode("", $cipher);
    }
    else{
        echo "Error";
    }
    
    
$servername = "localhost";
$username = "root";
$dbname = "testdb";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$input_password = $password;
}

$sql = "SELECT * FROM info WHERE username='$name' limit 1";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // output data of each row
    $row = $result->fetch_assoc();
    if ($input_password == $row["password"]){
    	$_SESSION['login_check'] = "True"; 
    	$_SESSION['usersession'] = $name;
    	//header("location: index.html");
        echo "success";
    }
    else{
    	//echo "<script type='text/javascript'>alert('Incorrect password');</script>";
        echo "invalidPass";
    	//include 'log_in.html';
    }
} 
else {
    //echo "<script type='text/javascript'>alert('Please enter a valid ID');</script>";
    //include 'log_in.html';
    //header('location: log_in.html');
    echo "invalidID";
}

$conn->close();

?>