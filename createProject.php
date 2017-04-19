//SMJ 3-20 - Pretty much an exact copy of create account with the fields changed
 <?php

//This means that there was an incorrect password

if(isset($_GET['uError'])){



?>

<p  style = "color: red"> This project name is not unique! please try a different name </p>



<?php 

}

?>





<link rel="stylesheet" href="css/style.css">



  <div class="form-style-2">





<form method="post" action = "phpHandling.php">

  Project Name:<br>

  <input  type="text" name="projectname" required ><br><br>
  <input type="text" name="description" ><br><br>

  <input type="submit" value="Submit">

  <input type="reset">

</form>





</div>




