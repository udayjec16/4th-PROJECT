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




<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="#">Navbar</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
		<span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>

      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>

    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>






<?php

	

	include 'dbcon.php';
	
	include 'config/config.php';


	if(isset($_POST['submit']))
	{


		$update_id=mysqli_real_escape_string($conn, $_POST['update_id']);


		$medicine_name = mysqli_real_escape_string($conn, $_POST['name']);

		$medicine_type = mysqli_real_escape_string($conn, $_POST['med_type']);

		$batch_no = mysqli_real_escape_string($conn, $_POST['batch_no']);


		$manu_date = mysqli_real_escape_string($conn, $_POST['manufacturing_date']);


		$expiry_date = mysqli_real_escape_string($conn, $_POST['expiry']);


		$quantity = mysqli_real_escape_string($conn, $_POST['quantity']);


		$price = mysqli_real_escape_string($conn, $_POST['price']);


		$manufacturer = mysqli_real_escape_string($conn, $_POST['manufacturer']);


		$distributor = mysqli_real_escape_string($conn, $_POST['distributor']);


		$phn_no = mysqli_real_escape_string($conn, $_POST['phone']);


					




		$query = "UPDATE medicine SET 
					medicine_name='$medicine_name',

					medicine_type='$medicine_type ',

					batch_no='$batch_no',

					manufacturing_date='$manu_date',

					expiry_date='$expiry_date',

					quantity='$quantity',

					price_per_medicine	='$price',

					manufacturer_name='$manufacturer ',

					distributor_name='$distributor',

					distributor_ph_no='$phn_no '

					WHERE medicine_id = {$update_id}";


		if(mysqli_query($conn, $query))
		{

			
		
			


			header('location:http://localhost/PROJECT/medicine details full.php');


			
		}

		else
		{

			echo 'ERROR' .mysqli_error($conn);
		}

	}

	$id = mysqli_real_escape_string($conn, $_GET['idd']);

	

	$query = "SELECT * FROM  medicine WHERE medicine_id=$id";


	$result = mysqli_query($conn, $query);

	$row = mysqli_fetch_array($result);


	mysqli_free_result($result);


	mysqli_close($conn);


?>

<div class="container">
	
<h1> POSTSSSS</h1>

<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">


 <div class="row">

    <div class="col-md-3 offset-0" id="form">
              
                    <!--<center><b class="entermanagerdetails">ENTER MANAGER DETAILS</b></center>-->

                   

                           <div class="form-group3"> 
                        <h4>ENTER MEDICINE DETAILS</h4>
                          </div>

                        <div class="form-group">

                          <label>ID</label>
							<input type="hidden text" name="id" class="form-control text" value="<?php echo $row['medicine_id']; ?>"  required="required">

						</div>



						<div class="form-group">
								
								<label>MEDICINE NAME</label>
								<input type="text" name="name" class="form-control" value="<?php echo $row['medicine_name']; ?>">

						</div>




						<div class="form-group">

								<label>MEDICINE TYPE</label>
								<input type="text hidden" name="med_type" class="form-control " value="<?php echo $row['medicine_type']; ?>">
						</div>





						<div class="form-group">

								<label>BATCH No.</label>
								<input type="text" name="batch_no" class="form-control" value="<?php echo $row['batch_no']; ?>">
						</div>



						 <div class="form-group">

						 		<label>MANUFACTURING DATE</label>
                        		<input type="DATE" class="form-control text"  name="manufacturing_date" value="<?php echo $row['manufacturing_date']; ?>" required="required"/>
                          </div>

                      </div>



                      <div class="col-md-3 offset-0" id="form">



                          <div class="form-group">

								<label>EXPIRY DATE</label>
								<input type="DATE" name="expiry" class="form-control" value="<?php echo $row['expiry_date']; ?>">
						</div>



						<div class="form-group">

								<label>QUANTITY</label>
								<input type="text" name="quantity" class="form-control" value="<?php echo $row['quantity']; ?>">
						</div>



						<div class="form-group">

								<label>PRICE PER MEDICINE</label>
								<input type="text" name="price" class="form-control" value="<?php echo $row['price_per_medicine']; ?>">
						</div>




						<div class="form-group">

								<label>MANUFACTURER NAME</label>
								<input type="text" name="manufacturer" class="form-control" value="<?php echo $row['manufacturer_name']; ?>">
						</div>



						<div class="form-group">

								<label>DISTRIBUTOR NAME</label>
								<input type="text" name="distributor" class="form-control" value="<?php echo $row['distributor_name']; ?>">
						</div>



						<div class="form-group">

								<label>DISTRIBUTOR Ph.No.</label>
								<input type="text" name="phone" class="form-control" value="<?php echo $row['distributor_ph_no']; ?>">
						</div>





								<input type="hidden" name="update_id" value="<?php echo $row['medicine_id'];?>">


								<input type="submit" name="submit" value="SAVE CHANGES" class="btn btn-outline-warning">


								<a href="<?php echo ROOT_URL; ?>medicine details full.php" class="btn btn-outline-success">CANCEL</a>




		</form>

	</div>


</div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js">   </script>
    <script src="js/bootstrap.min.js">  </script>
    
</body>
</html>
