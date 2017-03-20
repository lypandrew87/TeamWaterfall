<?php 

//login
if(isset($_POST['username'] ,$_POST['password']) && !isset( $_POST['firstname'], $_POST['lastname'] ))
{


  login(get_connection(), $_POST['username'], $_POST['password']); 
} 

//Create User
if(isset($_POST['username'],  $_POST['password'],   $_POST['firstname'],  $_POST['lastname']))
{


$username = $_POST['username']; 

$sql= "SELECT * from  users WHERE username = '$username'"; 


$result = execute_Query(get_connection(), $sql); 

if(mysqli_num_rows($result)==1){


header("location:createAccount.php?uError=1");

}else{


	createAccount(get_connection(), $_POST['firstname'], $_POST['lastname'], $_POST['username'], $_POST['password']); 

}

} 

//Create Project -SMJ
if(isset($_POST['projectname']))
{

	$projectname = $_POST['projectname'];
	
	$sql = "SELECT * from projects where projectname = '$projectname'";
	
	$result = execute_Query(get_connection(), $sql);
	
	if(mysqli_num_rows($result)==1){
		header("location:createProject.php?uError=1");
	}
	else{
		$sql="INSERT INTO projects (projectname, member1) VALUES ('$projectname', '$username')";
		$result = execute_Query(get_connection(), $sql);
	}
	header("location:loginsuccessful.php");
}

function createAccount($connection, $firstname, $lastname, $username, $password){



$sql="INSERT INTO users (firstName, lastName, username, password) 
  VALUES ('$firstname', '$lastname', '$username','$password')";


$result = execute_Query($connection, $sql); 


 session_start();
	$_SESSION["firstname"]=$firstname;
	$_SESSION["lastname"]=$lastname;
	$_SESSION["username"]=$username;
	$_SESSION["password"]=$password;
header("location:loginsuccessful.php");


}


function get_connection() {
  $username = "id1089550_waterfall";
  $password = "password";
  $hostname = "localhost";
  $database  = "id1089550_waterfall"; 

  $mysqli  = mysqli_connect($hostname, $username, $password,$database );

  return $mysqli;
		

 
	}

function execute_Query($connection , $query){

  return $connection->query($query);



}

function login($connection, $username, $password){

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($username);
$mypassword = stripslashes($password);

$sql="SELECT * FROM users WHERE username='$username' and password='$password'";


$result = execute_Query($connection, $sql); 

// Mysql_num_row is counting table row

// If result matched $myusername and $mypassword, table row must be 1 row
if(mysqli_num_rows($result)==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
   session_start();

  while ($row = $result->fetch_assoc()) {

    $firstname = $row['firstName'];
    $lastname = $row['lastName'];


}


  $_SESSION["username"]=$username;
  $_SESSION["password"]=$password;
  $_SESSION["firstname"]=$firstname;
  $_SESSION["lastname"]=$lastname;

header("location:loginsuccessful.php");
}
else {


  header("location:index.php?uError=1");


}


}



?>
