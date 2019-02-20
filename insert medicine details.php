<html>
<head>
<title>FORM</TITLE>
</head>
<body>



<?php
require "dbcon.php";


if(isset($_POST['add']))
	{

			$medicine_id=$_POST['med_id'];

			$medicine_name=$_POST['med_name'];

			$medicine_type=$_POST['med_type'];

			$batch_no=$_POST['batch_no'];

			$manu_date=$_POST['manufacturing_date'];

			$expiry_date=$_POST['expiry'];

			$quantity=$_POST['quantity'];

			$price=$_POST['price'];

			$manufacturer=$_POST['manufacturer'];

			$distributor=$_POST['distributor'];

			$phn_no=$_POST['phone'];

			



		$sql="insert into medicine values('$medicine_id', '$medicine_name',
		'$medicine_type','$batch_no','$manu_date','$expiry_date','$quantity','$price','$manufacturer','$distributor','$phn_no')";

			if (mysqli_query($conn,$sql))
					{
	
						echo"SIGNIN RECORD INSERTED SUCCESSFULLY....";

						header("location:medicine details.php");
	
					}
			else
				{
					echo "error: " . $sql ."<br>" .mysqli_error($conn);
				}
			}
			mysqli_close($conn);

	?>

<br>
<br>
YOU WERE SIGNEDIN SUCCESSFULLY...<BR><BR><br>

YOU CAN NOW LOG IN...

<a href="medicine details.php"></a>



</body>

</html>