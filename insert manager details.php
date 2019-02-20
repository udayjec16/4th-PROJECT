<html>
<head>
<title>FORM</TITLE>
</head>
<body>



<?php
require "dbcon.php";


if(isset($_POST['add']))
	{

			$eemployee_id=$_POST['emp_id'];

			$name=$_POST['name'];

			$address=$_POST['address'];

			$username=$_POST['username'];

			$password=$_POST['password'];

			$gender=$_POST['gender'];

			$age=$_POST['age'];

			$bloodgroup=$_POST['blood_group'];

			$email=$_POST['email'];

			$phnnumber=$_POST['phone'];

			$joiningdate=$_POST['join_date'];

			//$resignationdate=$_POST['resign_date'] ;	



				$sql="insert into manager values( '$eemployee_id','$name','$address','$username','$password','$gender','$age','$bloodgroup','$email','$phnnumber','$joiningdate')";

			if (mysqli_query($conn,$sql))
					{
	
						echo"SIGNIN RECORD INSERTED SUCCESSFULLY....";

						//header("location:medicine details.php");
	
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

<a href="manager details.php"<button> login</button></a>



</body>

</html>