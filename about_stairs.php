<!DOCTYPE HTML>
<html>
    <head>
      <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
  <body>
 <div id="container">
	<div id="result">
       <h4><a href="index.html">Back to main page</a></h4>
   </div>
  <h1>Some information on stairs</h1>
	 <p><?php 
	 $string = file_get_contents("text/stairs.txt");      #Insert plain text file with formating
        $string = nl2br($string, true); 
     echo $string;
?></p>
<hr />
   </div>
  </body>
</html>