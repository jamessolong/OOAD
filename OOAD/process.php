<?php


$serverName = "localhost";
$userName = "root";
$userPassword = "6388434";
$dbName = "demo";


$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);



$result = mysql_query("select * form user where username = '$username' and password = '$password' ")
  or die("Fail to query database ".mysql_error());
$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password){
  echo "Login success".$row['username'];

}else{
    echo "Fail to login";
}

?>