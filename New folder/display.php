<?php

include 'dbcon.php';

$query="SELECT *FROM student";


if ($result=mysqli_query($conn,$query))
	
{
while($row=mysqli_fetch_array($result))

{

echo $row['name'] .'<br>';
echo $row['email'] .'<br>';
echo $row['class'] .'<br>';
echo $row['bday'] .'<br>';
echo $row['address'].'<br>' ;
echo $row['sometext'] .'<br>';
echo $row['gender'] .'<br>';
	}
}

else
	{
	echo"error executing query".mysqli_error($conn);
}
?>