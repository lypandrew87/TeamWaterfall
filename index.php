<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">

  <?php
  error_reporting(E_ALL ^ E_DEPRECATED);

  $username = "root";
  $password = "";
  $hostname = "localhost";
  $database  = "amlyp"; 

  $mysqli  = mysqli_connect($hostname, $username, $password,$database );
  


if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}




 $query  = "SELECT * FROM scrumboard "; 





  ?>
  <title>Draggable Cards</title>
  
  
  

  
</head>

<body>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

  <link href="http://materializecss.com/dist/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="http://rawgit.com/sam-g-steel/MaterializeJS/master/libs/materialize/js/materialize.js"></script>
  <script src="http://rawgit.com/sam-g-steel/MaterializeJS/master/js/MaterializeJS.js"></script>
  <script src="http://julian.com/research/velocity/build/velocity.ui.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    
    <div class="row">
	      <div class="col">

	
		   <?php

       if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
    

		   


    ?>
      

      <div id="Element01" class="card-panel blue darken-4 white-text" style="width: 20em; height: 20em;">
          <b>Product Backlog</b>
          <hr>  <?php   echo $row['productbacklog']; ?></hr>
          <i><span id="i1"></span></i>

       </div> 



    <?php
  }
}
  ?>

</div> 


<div class="col">

  <?php
    if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
    

       




    ?>

  <div id="Element01" class="card-panel red darken-4 white-text" style="width: 20em; height: 20em;">
    <b>Sprint Backlog</b>
    <hr><?php   echo $row['sprintbacklog']; ?></hr>
    <i><span id="i1"></span></i>
  </div> 


 <?php
  }}

  ?>
</div> 

<div class = "col">

   <?php

       if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
    
    ?>
<div id="Element01" class="card-panel purple darken-4 white-text" style="width: 20em; height: 20em;">
  <b>Tasks</b>
  <hr><?php   echo $row['tasks']; ?></hr>
  <i><span id="i1"></span></i>
</div> 

 <?php
  }}

  ?>

</div>

<div class = "col">

   <?php

       if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
    

		   


    ?>

<div id="Element01" class="card-panel orange white-text" style="width: 20em; height: 20em;">
  <b>Done</b>
  <hr><?php   echo $row['done']; ?> </hr>
  <i><span id="i1"></span></i>
</div> 

 <?php
  }}

  ?>
</div> 

</div>











<script>
  $(".card-panel").velocity({ translateX: 0, translateY: 0 }, 500).velocity("transition.slideRightBigIn", { stagger: 250 });

  $("#myElement").velocity("callout.tada").velocity("callout.tada");
</script>

<script src="js/index.js"></script>

</body>
</html>
