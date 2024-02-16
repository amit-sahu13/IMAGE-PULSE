<?php


    
global $email;
global $user;
global $pass;


$servername = "sql6.freemysqlhosting.net";
$username = "sql6684197";
$password = "9FVDhCdmUv";
$database = "sql6684197";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die('Connection failed' . $conn->connect_error);
}

if (isset($_POST['signup_submit'])) {
    $email = $_POST['signup_email'];
    $user = $_POST['username'];
    $pass = $_POST['signup_password'];
}





$sql = "INSERT INTO authentication(email,password,name) VALUES('$email','$pass','$user')";

if(mysqli_query($conn, $sql)==true){
   $insert = true;
}
else{
    echo '<script type="text/JavaScript">  
    alert("Failed to send"); 
    </script>';
}
mysqli_close($conn);

?>