<?php
error_reporting(0);
include 'connection.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transaction</title>
	</head>
	<link rel="stylesheet" text='text/css' href="css/design.css">
	
	<body align='center'>
		<form action="" method="GET" align='center'>
			From
			<input type="text" name="f" value="">
			<br><br><br>	To
			<input type="text" name="t" value="">
			<br><br><br>	Amount =
			<input type="text" name="a" value="">
			<br><br>
			<br>	<input type="submit" name="submit" value="Transfer">
		</form>
		<?php
		
				if(isset($_GET['submit']))
				{
				$f=$_GET['f'];
				$t=$_GET['t'];
				$a=$_GET['a'];
				if($f!="" && $t!="" && $a!="")
				{
					
					$q1= "UPDATE user SET AMOUNT = AMOUNT + '$a' WHERE NAME = '$t' ";
					$d1= mysqli_query($con, $q1);
					$q2= "UPDATE user SET AMOUNT= AMOUNT - '$a' WHERE NAME = '$f' ";
					$d2= mysqli_query($con, $q2);
					if ($d1 && $d2)
					{
						echo"Data Submit into Database";
						echo $bl1;
						echo $bl2;
					}
					else
					{
						echo "Error in Submition ";
					}
				}
				else
				{
					echo"All Fields are Required";
				}
			}
			else
			{
				echo "(Enter All Required Fields And Submit.)";
			}
		?>
		
		
		<div id="bottom" >
			<h3 >Click to see database</h3>
			<a href=display.php>
				<button class="button">Click here</button>
			</a>
			
		</div>
		
	</body>
</html>