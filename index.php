<!DOCTYPE html>
<html >
<head>
  <link rel="stylesheet" href="css/style.css">
  <div class="form-style-2">
	<meta charset="UTF-8">


    <title>Team Waterfall</title>
</head>

<body>
<center>

 <h1  style = "font-size: 50px; font-family: Brush Script Std ;">Team Waterfall</h1>









<table padding: 10px>
<td>
<form method="post" action = "phpHandling.php">
  Username:<br>
  <input type="text" name="username"><br>
  Password:<br>
  <input type="password" name="password"><br><br>

  <?php if(isset($_GET['uError'])){ ?>
<p  style = "color: red"> Incorrect username or password. </p> <?php } ?>

  <input type="submit" value="Submit">
  <input type="reset">
</form>

<br>
<form  action="createAccount.php">
    <button type="submit">Create Account</button>
</form>	
</td>
<td>
<a><img src="img/water.gif"></a>
</td>
</table>

</div>
</body>
</center>

</html>
