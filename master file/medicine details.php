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
      border-radius:5px;
    }


#form5
    {
      margin-top:10px;
      //background:url("images/22.jpg") center no-repeat;
      //background-color:grey;
      //min-height: 880px;
      //height: 100vh;
      max-height: 500px;
      padding-left: 20px;
      padding-top: 10px;
      padding-bottom: 20PX;
      padding-right: 20px;
      border-radius:0px;
      border: 4px solid; 
    }




    .text
    {
      height:3px;
      color: red; 
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
            background-color:#1b3b52;    
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
            background-color:#1e7e345e;    <!--#1e7e34; #151e2761;-->
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

  <nav class=" navbar navbar-expand-sm navbar-dark bg-dark">
    <a href="#" class="navbar-brand">HOME</a>
    <button class="navbar-toggler" data-toggle="collapse" data target="#navbarMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul>
        <li class="nav-item">
          <a href="#" class="nav-link">USER</a>
        </li>       
      </ul>
      <ul>
        <li class="nav-item">
          <a href="#" class="nav-link">PRODUCT</a>
        </li>
      </ul>

    </div>
  </nav>

 

   <div class="row">

    <div class="col-md-3 offset-0" id="form">
              
                    <!--<center><b class="entermanagerdetails">ENTER MANAGER DETAILS</b></center>-->

                    <form method="POST" action="insert medicine details.php">

                           <div class="form-group3"> 
                        <h4>ENTER MEDICINE DETAILS</h4>
                          </div>

                          <div class="form-group">

                        <input type="number" class="form-control text" id="medicine_id" placeholder="MEDICINE ID" name="med_id"  required="required"/>                               
                           </div> 

                           <div class="form-group"> 
                         
                        <input type="text" class="form-control text" id="medicine_name" placeholder="MEDICINE NAME" name="med_name" required="required"/>

                            </div>
                             
                             <div class="form-group">
                        
                         <input type="text" class="form-control text" id="medicine_type" placeholder="MEDICINE TYPE" name="med_type" required="required"/>

                              
                              </div>

                             <div class="form-group">
                        <input type="text" class="form-control text" id="batch_no" placeholder="BATCH NUMBER" name="batch_no" required="required"/>


                              </div>

                                                         
                                <div class="form-group">

                        <input type="number" class="form-control text" id="quantity" placeholder="QUANTITY" name="quantity" required="required"/>
                                </div>

                                <div class="form-group">


                        <input type="number" min="0"  step="0.01" class="form-control text" id="price_per_item" placeholder="PRICE PER ITEM" name="price" required="required" />

                                </div>
                                <div class="form-group">

                        <input type="text" class="form-control text" id="manufacturer_name" placeholder="MANUFACTURER" name="manufacturer" required="required"/>

                                </div>
                                <div class="form-group">

                        <input type="text" class="form-control text" id="distributor_name" placeholder="DISTRIBUTOR" name="distributor" required="required"/>

                                </div>

                                 <div class="form-group">

                        <input type="number"  class="form-control text" id="distributor_phn" placeholder="DISTRIBUTOR Phn NUMBER" name="phone" required="required" />
                                </div>




                                 <div class="form-group4">

                         <label for="manufacturing_date" class="control-label padding-top-10">MANUFACTURING DATE</label> 

                        <input type="date" class="form-control text" id="manufacturing_date" placeholder="MANUFACTURING DATE" name="manufacturing_date" required="required"/>
                                </div>
                              



                                <div class="form-group4">

                        <label for="expiry_date" class="control-label padding-top-10">EXPIRY DATE</label> 

                        <input type="date" class="form-control text" id="expiry_date" placeholder="EXPIRY DATE" name="expiry"/>

                              </div>


                              <div class="form-group2">
                                <div class="row">

                                  
                                    <div class="col-md-4 offset-2" >
                                     
                                      <input type="submit" class="btn btn-primary" value="ADD" name="add">
                                    </div>


                                    <div class="col-md-4 offset-0">
                                      <input type="submit" class="btn btn-primary" value="SAVE" name="save">
                                    </div>
                                    </div>
                                </div>
                              
                              </form>
                            </div>
                   


        <div class="col-md-1 offset-0" id="form1">
           <label for="symbol"></label>
           <br>
           <label for="symbol"></label>
           <br>
           <label for="symbol"></label>
           <br>
           <label for="symbol"></label>
           <br>
           <label for="symbol"></label>
           <br>
           <label for="symbol"></label>
           <br>
           <label for="symbol"></label>
           <br>
           <label for="symbol"></label>
           <br>
           <label for="symbol"></label>
           <br>
           <label for="symbol"></label>
           <br>
           <label for="symbol"></label>
           <br>
           <label for="symbol"></label>
           <br>
           <label for="symbol"></label>
         </div>
      


                        

  <div class="col-sm-8" id="form2" >    <!-- id="form2-->
        
    <h2>MEDICINE DETAILS LIST</h2>

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
        <th scope="col">MANUFACTURING_DATE</th>
        <th scope="col">EXPIARY_DATE</th>
        <th scope="col">QUANTITY</th>
        <th scope="col">PRICE</th>
        <th scope="col">COMPANY_NAME</th>
        <th scope="col">DISTRIBUTOR_NAME</th>
        <th scope="col">DISTRIBUTOR_Ph_No.</th>
        <th scope="col">ACTION</th>
        
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

                <td><?php echo $row['distributor_name']; ?></td> 

                <td><?php echo $row['distributor_ph_no']; ?></td> 

                <td>
                  <a href="#" class="btn">EDIT</a>
                  <a href="#" class="btn">DELETE</a>
                </td>

            </tr>

            <?php
      }
    }

      ?>

    </table>
  </div>
  </div>
</div>
</div>


<?php

require 'footer.php';

?>


  </body>
  </html>







       




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js">   </script>
    <script src="js/bootstrap.min.js">  </script>
    
</body>
</html>