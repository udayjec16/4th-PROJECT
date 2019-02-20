<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">







 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav">

  <a class="navbar-brand btn btn-info" href="manager_home.php">HOME</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">

       <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->

      </li>
      <li class="nav-item">
       <!-- <a class="nav-link" href="#">Link</a>-->
      </li>
      <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle btn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          GO TO
        </a>

        <div class="dropdown-menu btn btn-success" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="manager details.php">MANAGER DETAILS</a>

          <a class="dropdown-item" href="sales man details.php">SALES MAN DETAILS</a>

          <!--<div class="dropdown-divider"></div>-->

          <a class="dropdown-item" href="medicine details">MEDICINE DETAILS</a>

        </div>
      </li>
      <li class="nav-item">
        <!--<a class="nav-link disabled" href="#">Disabled</a>-->
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">


       <!--<a class="btn btn-success my-2 my-sm-0" href="logout.php">LOG OUT</a>-->


      <!--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->

    </form>
  </div>
</nav>






    <style type="text/css">

    #nav
{

  background-color:  #28a7456b!important;   <!--#217d68cc!important;-->
}



#navbarDropdown
{

  background-color: #610d71a6;

   border-color: #610d71a6;    <!--  #610d71a6; #28a745-->

   box-shadow: #1d2124b8;     
}




#form1
{
  max-height: 350px;
  border-radius:3px; 

  //padding-left: 10px;
  //padding-right: 10px;
}



#form2
{
  margin-top:20px; 

  //max-height: px;
  border-radius:3px; 
}



#form5
{
  margin-top: 80px;
  padding-left: 10px;
  padding-right: 10px;
}

.nav
{
  border-radius: 5px;
  background-color:#1b3b52;
}

</style>





</style>




 
     <style>

        body
        {    
            //background-color:#1b3b52;    
            background:url("images/54.jpg") center no-repeat;
            height:100vh;
            //color:white;
            background-size: cover;
            border: 0px solid;
        }


    form
          {
            //max-height: 800px;
            //height: 100vh;
           //background: url("images/27.jpg");
            //background-size: cover;
            //background-color:#1e7e345e;    <!--#1e7e34; #151e2761;-->
            //padding: 10px;
            //padding-bottom:1px;
            //margin-top:5px;
           // color:white;
            //box-shadow: 7px 5px 3px #121a21f2;
           // border-radius:15px;

          }



        }
    </style>



    
</body>






<?php

include 'dbcon.php';

$today_date=date('Y/m/d');

//echo"$today_date";


$query="SELECT * FROM `medicine` WHERE `expiry_date`<CURRENT_DATE";

//$query="SELECT  FROM `tbl_product`"


if($result=mysqli_query($conn,$query));

{
?>
    

<body>


<div class="row">


   
    

</div>


<!--<div class="container">-->


<div class="row" id="form5">
    
    <div class="col-md-12">

       <center><h2>EXPIRED MEDICINE </h2></center>
   
    <div class="table-responsive" ">
      <div class="scrollable">

        <table class="table table-bordered table-dark  table-striped
                        table-hover table-sm"> 

                                                            <!--table-sm-->
    <thead class="thead-light">
     
      <tr>

        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">TYPE</th>
        <th scope="col">BATCH_No.</th>
        <th scope="col">MAKING_DATE</th>
        <th scope="col">EXPIARY_DATE</th>
        <th scope="col">QUANTITY</th>
        <th scope="col">PRICE</th>
        <th scope="col">COMPANY_NAME</th>
        <th scope="col">DISTRIBUTOR</th>
        <th scope="col">Ph.No.</th>
        
       
        
      </tr>


         </thead>

  <?php 
  
    while($row=mysqli_fetch_array($result))

      {
  ?>

   
             <tr>


                <td><?php echo $row['medicine_id']  ?></td>

                <td><?php echo $row['medicine_name'] ?></td>

                <td><?php echo $row['medicine_type'] ?></td> 

                <td><?php echo $row['batch_no']; ?></td> 

                <td><?php echo $row['manufacturing_date']; ?></td> 

                <td><?php echo $row['expiry_date']; ?></td> 

                <td><?php echo $row['quantity']; ?></td>

                <td><?php echo $row['price_per_medicine']; ?></td> 

                <td><?php echo $row['manufacturer_name']; ?></td>

                <td><?php echo $row['distributor_name']; ?></td> 

                <td><?php echo $row['distributor_ph_no']; ?></td> 


               </tr>


<?php
       }
       }

    ?>





</table>
</div>
</div>



    <?php

    include'footer.php';
    ?>

</div>



  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js">   </script>
    <script src="js/bootstrap.min.js">  </script>
    
</body>
</html>