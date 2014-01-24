<!DOCTYPE HTML>
<html>
    <head>
    	<title>Stair Calc</title>
      <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
  <body>
<?php
$timetake = microtime(true);  #Time the calculation
register_shutdown_function('my_shutdown');  
include 'php/table.php'; 
?>
<div id="container">
	<div id="result">
<h4>
<?php 
include 'php/print.php';
?>
</h4>
<h4 style="color: red;" >Please use these calculations as a GUIDE ONLY<br />
	Double check before making any stairs.</h4>
   </div>
   <h1>This is Mat's Staircase Calculation</h1>
 <h4>These are your results <br />
  They are rounded to three decimal places</h4>
   <img src="img/stairs.jpg" alt="Stairs" class="center">
    <p>&copy; Mat Cornelius</p>
     <?php 	
	       function my_shutdown() {  
        global $timetake;  
    echo "Execution took: " . (microtime(true) - $timetake) . " seconds.";}
	?>
    </div>
  </body>
</html>