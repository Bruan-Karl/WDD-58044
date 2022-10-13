<html>
	<body>
		<?php
		$Name = "Karl";
		$Grade = 70;
		
		if ($Grade >=70)
		{
			echo "Name:" .$Name . "<br> Grade:" .$Grade . ", Passed! <br>";
		}
		elseif (($Grade	>= 60) && ($Grade <=69))
		{
			echo "Name:" .$Name . "<br> Grade:" .$Grade . ", For Remedials <br>";
		}
		else 
		{
			echo "Name:" .$Name . "<br> Grade:" .$Grade . ", Failed <br>";
		}
		?>
	
	</body>
</html>