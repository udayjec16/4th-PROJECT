


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <style type="text/css">

    .jumbotron
        {
          max-height: 180px;

          margin-top: 10px;
          
          background-image:url("images/45.jpg");

          //background-color:#295e9882;
          color:red;
          
          background-size: cover;
         border:10px;
         border-radius:5px;



        }
</style>

<body>
    <style>
      body
        {
          background:url("images/42.jpg") center no-repeat;
          height:100vh;
          background-size: cover;
          border: 2px solid;
        }

          form
          {
           // background-image: url("images/27.jpg");
            background-size: cover;
            background-color:#151e2761;;
            padding: 10px;
            padding-bottom: 30px;
            margin-top: 30px;
            color:white;
            box-shadow: 7px 5px 3px #121a21f2;
            border-radius:5px;

          }

            h1{
              text-align: center;
              text-align: top;
            }

            .btn
            {
              background-color: #3a7abb63;
              border-color: #00ffdc00;
              width: 100%;
              margin-top: 25px;
            }

            .form-control
            {
              background-color:#1d1f3575;
              border-radius:5px;
              color: white;
            }

    </style>
        <div class="container">
    
               <div class="jumbotron jumbotron-fluid  text-center"> 

                    <h1 class="display-6 text-light">C.G. DRUG STORE </h1>
                    <h4 class="text-light">GAR ALI N.H.-37, JORHAT,ASSAM. GENUINE DGUR RETAILER</h4>
                    <p></p>
              </div>
        </div>


<div class="container">

      <div class="row">
        <div class="col-md-6">          
            <form method="POST" action="">

              <div class="form-group">

                <h2>MANAGER LOGIN</h2>
              

                  <label for="Username">USERNAME</label>

                <input type="text" class="form-control" id="Username" name="username1" placeholder="Enetr USERNAME" required="required">

              </div>

              <div class="form-group">

                  <label for="Password">PASSWORD </label>

                  <input type="password" class="form-control" id="Password" placeholder="password" name="password1" required="required">

              </div>

              <input type="submit" class="btn btn-primary" value="SUBMIT" name="submit1">                  
       


   <?php
          

        if(isset($_POST['submit1']))

            {

                  require "dbcon.php";
                  
                  $username=$_POST['username1'];
                  $password=$_POST['password1'];

                  $query="select * from manager where username='$username' && password='$password'";

                  $result=mysqli_query($conn,$query);

                  $n=mysqli_num_rows($result);

             if($n==1)

                 {
  
                     header("location:home.php");

                  }

              else
                   {
                     echo "LOGIN UNSECCESSFULL";
                    }

             }
    ?>

  </div>
</form>




      
        <div class="col-md-6">
          
          <form method="POST" action="">

            <div class="form-group">

              <h3>SALES MAN LOGIN</h3>

                 <label for="Username">USERNAME</label>

                 <input type="text" class="form-control" id="Username" name="username2" placeholder="Enter USERNAME" required="required">

            </div>

               <div class="form-group">

                  <label for="Password">PASSWORD </label>

                   <input type="password" class="form-control" id="Password" 
                  placeholder="PASSWORD" name="password2" required="required">

                </div>
                  <input type="submit" class="btn btn-primary" value="SUBMIT" name="submit2">

                 <!--<button type="submit" class="btn btn-primary">Submit</button>-->

                
        

     

    <?php
        

        if(isset($_POST['submit2']))

            {
                require "dbcon.php";

                $username=$_POST['username2'];
                $password=$_POST['password2'];

                $squery="select *from salesman where s_username='$username' && s_password='$password'";

                
                $sresult=mysqli_query($conn,$squery);
                

                $sn=mysqli_num_rows($sresult);

              if($sn==1)
                  {

                     header("location:home.php");

                  }
              else
                  {
                      echo "log in unseccessfull";

                  }
            }
      ?>

    </form>
  </div>
</div>

</div>


<?php

  require 'footer.php';

?>

  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js">   </script>
    <script src="js/bootstrap.min.js">  </script>
    
</body>
</html>