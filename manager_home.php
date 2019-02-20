<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>


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


       <a class="btn btn-success my-2 my-sm-0" href="logout.php">LOG OUT</a>


      <!--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->

    </form>
  </div>
</nav>


<?php session_start(); 
if(!isset($_SESSION['username']))

{

  header('location:login.php');
}

else
{

  echo"WELCOME: {$_SESSION['username']}";
}
?>




    


<body>

       




<style type="text/css">

#nav
{

  background-color:#217d68cc!important;
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



.nav
{
  border-radius: 5px;
  background-color:#1b3b52;
}

</style>




 
     <style>

        body
        {    
            /background-color:#1b3b52;    
            background:url("images/47.jpg") center no-repeat;
            height:100vh;
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
            //color:white;
            //box-shadow: 7px 5px 3px #121a21f2;
            //border-radius:15px;

          }



        }
    </style>



    
</body>



<div class="container">

  <div class="row">

    <div class="col-md-12 offset-0" >





          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" id=form1>

                 <div class="carousel-item active">

                    <img class="d-block w-100" src="images/001.jpg" alt="First slide">


                 </div>

                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/007.jpg" alt="Second slide">
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100" src="images/005.jpg" alt="Third slide">
                  </div>
            </div>

              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>

              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>


        </div>
      </div>







  

  <div class="row" id=form2>



       <div class="col-md-4  offset-2"> 



          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/c02.jpg" alt="Card image cap">
            <div class="card-body">
              <a href="expiary.php" class="btn btn-primary">EXPIRED MEDICINE</a>
            </div>
          </div>
        </div>

         <div class="col-md-4 offset-1">

          <div class="card" style="width: 18rem;" >
            <img class="card-img-top" src="images/c03.jpg" alt="Card image cap">
            <div class="card-body">
              
              <a href="outof_stock.php" class="btn btn-primary">OUT of STOCK MEDICINE</a>
            </div>
        </div>

</div>
</div>
</div>




  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js">   </script>
    <script src="js/bootstrap.min.js">  </script>
    
</body>
</html>