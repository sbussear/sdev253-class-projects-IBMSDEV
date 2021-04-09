<?php
    /* Samantha Bussear
	4/3/2021 Update
	M02 Lab Assignment - Using Arrays
	*/
	
	$pictures = array (
	'plant.png', 
	'plant2.png', 
	'heartplant.png'
	);
	shuffle($pictures);	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sami's Random Pictures</title>
	</head>
	<body>
		<h1>Sami's Random Pictures</h1>
		<h3>Welcome!</h3>
			<div align="center">
				<table style="width: 100%; border: 0">
					<tr>
						<?php
                        for ($s = 0; $s <3; $s++) {
                            echo '<td style="width: 33%; text-align: center"><img src="';
                            echo $pictures[$s];
                            echo '"/></td>';
                        }
                        ?>
					</tr>
				</table>
			</div>
	</body>
</html>