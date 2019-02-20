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




<body>

        
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

      <!--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->

      <a class="btn btn-primary my-2 my-sm-0" href="s_logout.php">LOG OUT</a>

      <!--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
    </form>

  </div>
</nav>



<style>

        body
        {    
            /background-color:#1b3b52;    
            background:url("images/29.jpg") center no-repeat;
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


    <style type="text/css">

    #form1
    {
      margin-top:48px; 

    }
    #form2
    {
      padding-top:2px
      padding-bottom:2px;
      padding-left:0px;
    }
</style>





<div class="row " id="form1">

    <div class="card col-md-4 offset-2" style="width: 18rem;">
        <img class="card-img-top" id="form2" src="images/1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">VIEW MEDICINE DETAILS</h5>
          <p class="card-text"></p>
          <a href="s_medicine details.php" class="btn btn-primary">View medicine details</a>
        </div>
      </div>

<div class="col-md-1">
  
</div>


      
    <div class="card col-sm-4" >
        <img class="card-img-top" src="images/35.jpg" style="width:100%" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">MEDICINE SALE</h5>
          <p class="card-text"></p>
          <a href="medicine sale.php" class="btn btn-primary">SALE MEDICINE</a>
        </div>
      </div>

</div> 





<?php

  require 'include/footer.php';

?>

  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js">   </script>
    <script src="js/bootstrap.min.js">  </script>
    
</body>
</html>