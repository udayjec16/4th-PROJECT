<?php session_start(); 
if(!isset($_SESSION['s_username']))

{

  header('location:login.php');


}

else
{

  echo "WELCOME: {$_SESSION['s_username']}";
}


?>







<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">

    #form
    {
      margin-top:10px;
      background:url("images/22.jpg") center no-repeat;
      //background-color:grey;
      //min-height: 880px;
      //height: 100vh;
      //max-height: 880px;
      padding-left: 20px;
      padding-top: 10px;
      padding-bottom: 20PX;
      padding-right: 20px;
      border-radius:15px; 
    }


    #form2
    { 

      margin-top: 10px;
     // background:url("images/6.jpg") center no-repeat;
      //height: 100vh;
      background-color:pink;
      //min-height: 500px;
      max-height: 800px;
      padding:5px,40px,40px,40px;
      //border-radius:5px;
    }


#form5
    {
      margin-top:1px;
      //background:url("images/22.jpg") center no-repeat;
      //background-color:grey;
      //min-height: 880px;
      //height: 100vh;
      max-height: 400px;
      padding-left: 20px;
      padding-top: 10px;
      padding-bottom: 20PX;
      padding-right: 20px;
      border-radius:0px;
      border: 4px solid; 
    }


    #form6
    {

      margin-top:5px;
      //background:url("images/22.jpg") center no-repeat;
      //background-color:grey;
      //min-height: 880px;
      //height: 100vh;
      max-height: 500px;
      //padding-left: 400px;
      padding-top: 4px;
      padding-bottom: 5PX;
      padding-right: 20px;
      border-radius:4px;
      //border: 4px solid; 
    }


    #id
    {

    background-color:#7adaaea8;
    }

    .text
    {
      height:3px;
      color: red; 
    }


    .form-control1
            {
              background-color:white;   <!--#1d1f3575;-->
              border-radius:7px;
              color:white;
              height: 35px;
              border:2px solid;
              border-color: green;

            }



    .form-control
            {
              background-color:#1d1f3575;
              border-radius:2px;
              color: white;
              height: 40px;

            }

    .form-group
      {
          height:30px;
          padding-left:5px; 
          padding-right: 5px;
      }


    .form-group2
      {
          height:80px;
          padding-top: 20PX;
          padding-bottom: 10PX;
      }

      .form-group3
      {
         padding-left: 5px;
      }
    .form-group4
    {
       padding-left:5px; 
        padding-right: 5px;
    }


    .entermanagerdetails
        {
          padding-top: 10px;
          height:30px;
          text-align: left; 
        }



    
</style>

 <body>
     <style>

        body
        {    
            background-color:grey;    <!--#1b3b52;-->    
            //background:url("images/48.jpg") center no-repeat;
            height:100vh;
            background-size: cover;
            border: 0px solid;
        }



    form
          {
            max-height: 800px;
            //height: 100vh;
           //background: url("images/27.jpg");
            //background-size: cover;
            background-color:grey;    <!-- #1e7e345e #1e7e34; #151e2761;-->
            padding: 10px;
            padding-bottom:1px;
            margin-top:5px;
            color:white;
            box-shadow: 7px 5px 3px #121a21f2;
            border-radius:15px;

          }



        }
    </style>

<body>

<div class="container" >  

    <div class="navbar">
        <nav class="navbar navbar-expand-lg">  <!--navbar-light bg-light-->

              <a class="navbar-brand" href="sales_home.php">HOME</a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                
              <span class="navbar-toggler-icon"></span>
              </button>




               <a class="navbar-brand" href="medicine sale.php">SALE MEDICINE</a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                
              <span class="navbar-toggler-icon"></span>
              </button>


    <div class="form-inline my-8 my-lg-8">
      <input type="submit" class="btn btn-primary form-control mr-sm-4"  value="LOG OUT" name="submit1" >
      
    </div>
  </div>
</nav>
</div>

 

   <div class="row">

  
      


    <div class="col-sm-10 offset-1" id="form2" >    <!-- id="form2-->
        
    <h2>MEDICINE DETAILS LIST</h2>


      <div class="col-xs-5 offset-7" id="form6">

        <div class="form-inline my-2 my-lg-0" >

             <input class="form-control1 mr-sm-2" type="search" placeholder="Search" aria-label="Search">

            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

         </div>
       </div>




 <!--<form class="form-inline my-4 my-lg-3">
      <input class="form-control mr-sm-8" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-8 my-sm-0" type="submit">Search</button>
  </form>-->



    <?php
      include 'dbcon.php';

      $query="SELECT *FROM medicine where quantity>0";


      if($result=mysqli_query($conn,$query))
        {

        ?>

 <!--<!DOCTYPE html>
 <html>
 <title>
  <head>fatcha dta</head>
 </title>-->
  
    
   
    <div class="table-responsive" id="form5">
      <div class="scrollable">

        <table class="table table-bordered  table-striped
                        table-hover table-sm"> 

                                                            <!--table-sm-->
   <thead class="thead-light">
     
      <tr>

        <th scope="col">MEDICINE_ID</th>
        <th scope="col">MEDICINE_NAME</th>
        <th scope="col">MEDICINE_TYPE</th>
        <th scope="col">BATCH_No.</th>
        <th scope="col">MAKING_DATE</th>
        <th scope="col">EXPIARY_DATE</th>
        <th scope="col">QUANTITY</th>
        <th scope="col">PRICE</th>
        <th scope="col">COMPANY</th>
        
        
        
      </tr>
         <!--   <t>
              <th>MEDICINE ID</th>
              <th>MEDICINE NAME</th>
              <th>MEDICINE TYPE</th>
              <th>BATCH No.</th>
              <th>MANUFACTURING DATE</th>
              <th>EXPIARY DATE</th>
              <th>QUANTITY</th>
              <th>PRICE</th>
              <th>COMPANY NAME</th>
              <th>DISTRIBUTOR NAME</th>
              <th>DISTRIBUTOR NAME</th>

            </t>-->

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

               

            </tr>

            <?php
            
      }
    }

      ?>

    </table>

 </body>

  </div>
  </div>
</div>

</div>


<?php

require 'footer.php';

?>
</div>


  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js">   </script>
    <script src="js/bootstrap.min.js">  </script>
    
</body>
</html>