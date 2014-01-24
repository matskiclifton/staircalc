<?php
$dim = intval($_POST['dim']);	#Convert the $_post to integer using "intval"
if($dim > 3300 ) {
	$fldiv = 1;
    $err = "The dimention is to large!";}	
  elseif($dim >= 3000 ) {					#Duplicate Staircase table
    $fldiv = 16;}
   elseif($dim >= 2800 ) {
    $fldiv = 15;}
	 elseif($dim >= 2600) {
    $fldiv = 14;}
	  elseif($dim >= 2400) {
    $fldiv = 13;}
	   elseif($dim >= 2200) {
    $fldiv = 12;}
	    elseif($dim >= 1980) {
    $fldiv = 11;}
		 elseif($dim >= 1760) {
    $fldiv = 10;}
		  elseif($dim >= 1540) {
    $fldiv = 9;}
		   elseif($dim >= 1320) {
    $fldiv = 8;}
		    elseif($dim >= 1100) {
    $fldiv = 7;}
              elseif($dim >= 880) {
    $fldiv = 6;}
			   elseif($dim >= 660) {
    $fldiv = 5;}
		  	    elseif($dim >= 440) {
    $fldiv = 4;}
  				  elseif (($dim < 440) && ($dim > 0)){ 
				  $fldiv = 1;
    $err = "The dimention is to small!";
	}
	               elseif ($dim = " ") {
				   $fldiv = 1;
    $err = "Please input a dimension!";
	}
		             else { echo "An error has occoured!";}
	  
$rise = (round($dim / $fldiv, 3)); #Divide the risers and round the answer to three decimal places using "round"
if ($rise <=180){							   #Change tread length accordingly
$going = ($rise + 20); }
	elseif ($rise >= 181) {
		$going = ($rise + 25);	}
			else { echo "An error has occoured!";}			
	
?>