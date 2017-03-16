
<!DOCTYPE html>
<html >
<head>
  <link rel="stylesheet" href="css/style.css">

  <meta charset="UTF-8">


  <?php
   session_start(); 

   $firstName =  $_SESSION["firstname"]; 
   $lastName = $_SESSION["lastname"]; 
   $username =  $_SESSION["username"]; 
   $password = $_SESSION["password"];

   
 
  
  ?>
  <title>Team Waterfall</title>
</head>

<body>

<p> Welcome: <?php echo $firstName . " " . $lastName; ?></p>



<form action ="board.php">

<input type ="submit" value = "Project Board"> 
</form>

<form action ="index.php">

<input type ="submit" value = "Logout"> 
</form>
</body>
</html>
