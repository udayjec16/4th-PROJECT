<?php session_start(); 
if(!isset($_SESSION['username']))

{

  header('location:login.php');


}

else
{

 // echo "WELCOME: {$_SESSION['username']}";
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

  background-color: #7212928f!important;   <!-- #86154e8a;  #756d10a6!important;-->
}



     <!-- #28a7456b!important #217d68cc!important;-->
}



#navhome
{

    background-color:#bb0fa6;

    border-color:#bd46b4;

}


#navbarDropdown
{

  background-color: #48a20f;  <!-- #5d131a; #610d71a6;-->

   border-color: #48a20f;    <!-- #5d131a;  #610d71a6; #28a745-->

   box-shadow: #5d131a;    
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

#fo
{

  margin-top: 200px;
}

.nav
{
  border-radius: 5px;
  background-color:#1b3b52;
}



    #form
    {
      margin-top:30px;
      background:url("images/22.jpg") center no-repeat;
      //background-color:grey;
      //min-height: 880px;
      //height: 100vh;
      //max-height: 880px;
      color: white;
      padding-left: 20px;
      padding-top: 10px;
      padding-bottom: 20PX;
      padding-right: 20px;
      border-radius:15px; 
    }


    #form2
    { 

      margin-top: 30px;
      //background:url("images/21.jpg") center no-repeat;
      //height: 100vh;
      background-color:#18736bc7;;
      min-height: 500px;
      max-height: 800px;
      padding:5px,40px,40px,40px;
      border-radius:5px;
      color: white;
      padding-top: 30px;
    }


#form5
    {
      margin-top:80px;
      //background:url("images/27.jpg") center no-repeat;
      //background-color:grey;
      //min-height: 880px;
      //height: 100vh;
      max-height: 500px;
      padding-left: 20px;
      padding-top: 10px;
      padding-bottom: 20PX;
      padding-right: 20px;
      border-radius:0px;
      border:0px solid; 
      //color: white;
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
            //background-color:#1b3b52;    
            background:url("images/57.jpg") center no-repeat;
            height:100vh;
            background-size: cover;
            border: 0px solid;
        }


   



        }
    </style>

<body>



<?php
    
include 'dbcon.php';

if(isset($_POST['delete']))
{
  $delete_id=mysqli_real_escape_string($conn, $_POST['delete_id']);

  $query="DELETE FROM manager WHERE emp_id={$delete_id}";

  if(mysqli_query($conn, $query))
  {
    header("manager details.php");
  }
else
{

echo "ERROR" .mysqli_error($conn);

}

}
?>




  
 <div class="container" >  

   <div class="row">

    <div class="col-md-3 offset-0" id="form">
              
                    <!--<center><b class="entermanagerdetails">ENTER MANAGER DETAILS</b></center>-->

                    <form method="POST" action="insert manager details.php">

                           <div class="form-group3"> 
                        <h4>ENTER MANAGER DETAILS</h4>
                          </div>

                         <div class="form-group">

                        <input type="text" class="form-control text" id="employee id" placeholder=" Emoployee ID" name="emp_id"  required="required"/>                               
                           </div> 

                           <div class="form-group"> 
                         
                        <input type="text" class="form-control text" id="name" placeholder="NAME" name="name" required="required"/>

                            </div>
                             
                             <div class="form-group">
                        
                         <input type="text" class="form-control text" id="address" placeholder="ADDRESS" name="address" required="required"/>

                              
                              </div>

                             <div class="form-group">
                        <input type="text" class="form-control text" id="username" placeholder="USERNAME" name="username" required="required"/>


                              </div>

                              <div class="form-group">


                        <input type="password" class="form-control text" id="password" placeholder="PASSWORD" name="password" required="required"/>
                                </div>

                                <div class="form-group">

                        <input type="text" class="form-control text" id="gender" placeholder="GENDER" name="gender" required="required" />
                                </div>

                                <div class="form-group">

                        <input type="text" class="form-control text" id="age" placeholder="AGE" name="age" required="required"/>
                                </div>

                                <div class="form-group">


                        <input type="text" class="form-control text" id="blood group" placeholder="BLOOD GROUP" name="blood_group" required="required" />

                                </div>
                                <div class="form-group">

                        <input type="email" class="form-control text" id="email" placeholder="EMAIL" name="email" required="required"/>

                                </div>
                                <div class="form-group">

                        <input type="text" class="form-control text" id="ph.no" placeholder="PHONE NUMBER" name="phone" required="required"/>

                                </div>

                               <div class="form-group4">

                         <label for="joining date" class="control-label padding-top-10">JOINING DATE</label>         
                        <input type="date" class="form-control text" id="joining date" placeholder="JOINING DATE" name="join_date" required="required"/>
                              </div>

                               <!-- <div class="form-group4">

                        <label for="resignation date" class="control-label padding-top-10">RESIGNATION DATE</label> 

                        <input type="date" class="form-control text" id="resignation date" placeholder="RESIGNATION DATE" name="resign_date"/>

                              </div>-->

                              <div class="form-group2">
                                <div class="row">

                                  
                                    <div class="col-md-4 offset-4" >
                                     
                                      <input type="submit" class="btn btn-primary" value="ADD" name="add">
                                    </div>


                                    <!--<div class="col-md-4 offset-0">
                                      <input type="submit" class="btn btn-primary" value="SAVE" name="save">
                                    </div>-->


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
        
     <div class="form-group3"> 


        <h2>MANAGER DETAILS LIST</h2>

        </div>

    <?php
      include 'dbcon.php';

      $query="SELECT *FROM manager";


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

        <table class="table  table-dark table-striped
                        table-hover table-sm"> 

                                                            <!--table-sm-->
    <thead class="thead-light">
     
      <tr>

        <th scope="col">ID</th>
        <th scope="col">NAME</th>
        <th scope="col">ADDRESS</th>
        <th scope="col">USERNAME</th>
        <th scope="col">PASSWORD</th>
        <th scope="col">AGE</th>
        <th scope="col">GENDER</th>
        <th scope="col">BLOOD_GROUP</th>
        <th scope="col">E_Mail</th>
        <th scope="col">CONTACT_No.</th>
        <th scope="col">JOINING_DATE</th>
       <!--<th scope="col">RESIGNATION_DATE</th>-->
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

                <td><?php echo $row['emp_id']  ?></td>

                <td><?php echo $row['name'] ?></td>

                <td><?php echo $row['address'] ?></td> 

                <td><?php echo $row['username']; ?></td> 

                <td><?php echo $row['password']; ?></td> 

                <td><?php echo $row['age']; ?></td> 

                <td><?php echo $row['gender']; ?></td>

                <td><?php echo $row['bloodgroup']; ?></td> 

                <td><?php echo $row['email']; ?></td>

                <td><?php echo $row['ph_no']; ?></td> 

                <td><?php echo $row['joining_date']; ?></td> 

                <!--<td><?php echo $row['resignation_date']; ?></td> -->

                <td>
                  <form  method="POST" action="manager details.php ">

                      <input type="hidden" name="delete_id" value="<?php echo $row['emp_id'];?>">

                      <input type="submit" name="delete" onclick="return (window.confirm('Do you really want to delete this record?') ? 1 : 0);" value="DELETE" class="btn btn-danger" >

                     <!-- <input type="submit" name="edit"  value="EDIT" class="btn btn-primary" >-->


                     <a href="update/update_manager.php ? idd=<?php echo $row['emp_id']; ?>" class="btn btn-primary"> UPDATE</a>
                    
                  </form>

                 
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
</div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js">   </script>
    <script src="js/bootstrap.min.js">  </script>
    
</body>
</html>