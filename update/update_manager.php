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


		$manager_name= mysqli_real_escape_string($conn, $_POST['name']);

		$manager_address = mysqli_real_escape_string($conn, $_POST['address']);

		$username = mysqli_real_escape_string($conn, $_POST['username']);


		$password = mysqli_real_escape_string($conn, $_POST['password']);


		$join_date = mysqli_real_escape_string($conn, $_POST['join_date']);


		$gender = mysqli_real_escape_string($conn, $_POST['gender']);


		$age = mysqli_real_escape_string($conn, $_POST['age']);


		$bloodgroup = mysqli_real_escape_string($conn, $_POST['bloodgroup']);


		$email = mysqli_real_escape_string($conn, $_POST['mail']);


		$phn_no = mysqli_real_escape_string($conn, $_POST['phone']);


					




		$query = "UPDATE manager SET 
					name='$manager_name',

					address='$manager_address',

					username='$username ',

					password='$password',

					joining_date='$join_date',

					gender='$gender',

					age='$age',

					bloodgroup='$bloodgroup',

					email='$email',

					ph_no='$phn_no'

					WHERE emp_id = {$update_id}";


		if(mysqli_query($conn, $query))
		{
			
		
			


			header('location:http://localhost/PROJECT/manager details.php');


			
		}

		else
		{

			echo 'ERROR' .mysqli_error($conn);
		}

	}

	$id = mysqli_real_escape_string($conn, $_GET['idd']);

	

	$query = "SELECT * FROM  manager WHERE 	emp_id=$id";


	$result = mysqli_query($conn, $query);

	$row = mysqli_fetch_array($result);


	mysqli_free_result($result);


	mysqli_close($conn);


?>

<div class="container">
<div class="row">

<h4>EDIT MADICINE DETAILS</h4>
</div>






	<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
	



 <div class="row">

    <div class="col-md-3 offset-0" id="form">
              
                    <!--<center><b class="entermanagerdetails">ENTER MANAGER DETAILS</b></center>-->

                   

                        <div class="form-group">

                          <label>ID</label>
							<input type="text" name="id" class="form-control text" value="<?php echo $row['emp_id']; ?>"  required="required">

						</div>



						<div class="form-group">
								
								<label>MANAGER NAME</label>
								<input type="text" name="name" class="form-control" value="<?php echo $row['name']; ?>">

						</div>




						<div class="form-group">

								<label>ADDRESS</label>
								<input type="text hidden" name="address" class="form-control " value="<?php echo $row['address']; ?>">
						</div>





						<div class="form-group">

								<label>USERNAME</label>
								<input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>">
						</div>



						 <div class="form-group">

						 		<label>PASSWORD</label>
                        		<input type="password" class="form-control text"  name="password" value="<?php echo $row['password']; ?>" required="required"/>
                          </div>



                           <div class="form-group">

								<label>JOINING DATE</label>
								<input type="DATE" name="join_date" class="form-control" value="<?php echo $row['joining_date']; ?>">
						</div>


                      </div>



                      <div class="col-md-3 offset-0" id="form">



                         



						<div class="form-group">

								<label>GENDER</label>
								<input type="text" name="gender" class="form-control" value="<?php echo $row['gender']; ?>">
						</div>



						<div class="form-group">

								<label>AGE</label>
								<input type="text" name="age" class="form-control" value="<?php echo $row['age']; ?>">
						</div>




						<div class="form-group">

								<label>BLOODGROUP</label>
								<input type="text" name="bloodgroup" class="form-control" value="<?php echo $row['bloodgroup']; ?>">
						</div>



						<div class="form-group">

								<label>Email.ID</label>
								<input type="text" name="mail" class="form-control" value="<?php echo $row['email']; ?>">
						</div>



						<div class="form-group">

								<label>PHONE NUMBER</label>
								<input type="text" name="phone" class="form-control" value="<?php echo $row['ph_no']; ?>">
						</div>





								<input type="hidden" name="update_id" value="<?php echo $row['emp_id'];?>">


								<input type="submit" name="submit" value="SAVE CHANGES" class="btn btn-outline-warning">


								<a href="<?php echo ROOT_URL; ?>manager details.php" class="btn btn-outline-success">CANCEL</a>




		</form>

	</div>


</div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js">   </script>
    <script src="js/bootstrap.min.js">  </script>
    
</body>
</html>
