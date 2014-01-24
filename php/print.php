<?php	
if (($dim <= 3300) && ($dim >= 440)) { #Show results if input dimension is correct
		
$tgoing = ($going * ( $fldiv - 1 ));		          #Calculate total going
			
	$strcalc = (($dim * $dim) + ($tgoing * $tgoing)); #Calculate string length
		$strlen = sqrt($strcalc);                     #Using "sqrt"
			
$basecalc = ($going) * ($fldiv);					  #Calculate hypotenuse
	$hypcalc = (($dim * $dim) + ($basecalc * $basecalc)); 
		$hyp = sqrt($hypcalc);								#Using sqrt
			
$angcalc = $dim / $hyp;         			 #Calculate angle
	$angresult = asin($angcalc);			 #Using "asin" for sin-1
		$angresultdeg = rad2deg($angresult); #Converting radians to degrees using "rad2deg"
			
echo "<a href=index.html>Back to main page</a>" . "<br />";
  echo "<a href=about_stairs.php>More about stairs</a>" . "<br />";
	echo "<br />";
	  echo "You said the finish floor dimension was: $dim mm" . "<br />";
		echo "You need to have $fldiv risers " . "<br />";
		  echo "The individual rise will be: $rise mm" . "<br />";
			echo "The individual going will be: $going mm" . "<br />";
			  echo "The total going will be: $tgoing mm" . "<br />";
			    echo "The string length will be: " . round($strlen, 3) . "mm" . "<br />";
			      echo "The angle will be: " . round($angresultdeg, 3) . " degrees" . "<br />";
			}
		    else {
			echo $err . "<br />";						#Display errors if dimension is incorrect
			echo "<a href=index.html>Back to main page</a>";
		}
?>