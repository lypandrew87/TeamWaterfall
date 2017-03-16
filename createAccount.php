






 <?php
//This means that there was an incorrect password
if(isset($_GET['uError'])){

?>
<p  style = "color: red"> This username has already been used </p>

<?php 
}
?>

  <link rel="stylesheet" href="css/style.css">

  <div class="form-style-2">


<form method="post" action = "phpHandling.php">
  First Name:<br>
  <input  type="text" name="firstname" required ><br>
  Last Name:<br>
  <input  type="text" name="lastname" required ><br><br>
   Username:<br>
  <input   type="text" name="username" required><br>
  Password:<br>
  <input  type="password" name="password" required ><br><br>
  <input type="submit" value="Submit">
  <input type="reset">
</form>


</div>

