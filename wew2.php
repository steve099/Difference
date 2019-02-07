<!DOCTYPE html>
<html>
<tittle>DIFFIRENCE</tittle>
<body>
<?php 
	 $FirstNumber= $_POST ["FirstNumber"];
	 $SecondNumber= $_POST ["SecondNumber"];
	 $z= $FirstNumber-$SecondNumber;
	 echo "The difference of the" ." " .$FirstNumber ." " ."and" ." " .$SecondNumber;
		echo "is" ." " ,$z;
		?>
</body>
</html>