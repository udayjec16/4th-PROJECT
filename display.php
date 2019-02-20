<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <style type="text/css">
</style>
</head>





<?php

include 'dbcon.php';

$query="SELECT *FROM medicine";


if($result=mysqli_query($conn,$query))
{

?>

 <!--<!DOCTYPE html>
 <html>
 <title>
 	<head>fatcha dta</head>
 </title>-->
 	<body>


 		<div class="col-sm-4 offset-3" id="form2">
 		<h2>MEDICINE DETAILS LIST</h2>

 		<div class="table-responsive">
        <div class="scrollable">

          <table class="table table-sm table-bordered  table-striped
                        table-hover"> 


          <thead class="thead-light">
     
 			
 			<t>
 				<th>NMAE</th>
 				<th>NMAE</th>
 				<th>NMAE</th>
 				<th>NMAE</th>
 				<th>NMAE</th>
 				<th>NMAE</th>
 				<th>NMAE</th>
 				<th>NMAE</th>
 				<th>NMAE</th>
 				<th>NMAE</th>
 				<th>NMAE</th>
 			</t>
 		</thead>

 	<?php	
	
		while($row=mysqli_fetch_array($result))

			{
	?>

				
			<tr>

 				<td><?php echo $row['medicine_id']  ?></td>

                <td><?php echo $row['medicine_name'] ?></td>;

                <td><?php echo $row['medicine_type'] ?></td>; 

                <td><?php echo $row['batch_no']; ?></td>; 

                <td><?php echo $row['manufacturing_date']; ?></td>; 

                <td><?php echo $row['expiry_date']; ?></td>; 

                <td><?php echo $row['quantity']; ?></td>;

                <td><?php echo $row['price_per_medicine']; ?></td>; 

                <td><?php echo $row['manufacturer_name']; ?></td>; 

                <td><?php echo $row['distributor_name']; ?></td>; 

                <td><?php echo $row['distributor_ph_no']; ?></td>; 

            </tr>

            <?php
			}
		}
			?>
		</table>
	</div>
</div>
</div>
	</body>
	</html>
	


<script src="js/jquery.js">   </script>
    <script src="js/bootstrap.min.js">  </script>
    
</body>
</html>