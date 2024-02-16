<?php

global $email;
global $password;

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$conn = mysqli_connect("sql6.freemysqlhosting.net", "sql6684197", "9FVDhCdmUv", "sql6684197");
$rows = mysqli_query($conn, "select DISTINCT name,email from authentication");
$rows = mysqli_query($conn, "delete from authentication where name=''");
$rows = mysqli_query($conn, "select *from authentication");
while ($row = mysqli_fetch_assoc($rows)) {
    if ($row['email'] === $email && $row['password'] === $password) {
        echo '<script type="text/JavaScript"> 
           
      alert("Login success"); 
      window.location.href ="logout.php";
     </script>';
    }
}


mysqli_close($conn);
