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
      margin-top: 30px;
      background-color:grey;
      //min-height: 800px;
      height: 100vh;
      //max-height: 700px;
      padding:5px,40px,40px,40px;
      border-radius:5px; 
    }


    #form2
    { 

      margin-top: 30px;
      //height: 100vh;
      background-color:pink;
      min-height: 500px;
      max-height: 800px;
      padding:5px,40px,40px,40px;
      border-radius:5px;
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
      }


    .form-group2
      {
          height:80px;
      }



    
</style>

 <body>
     <style>

        body
        {    
            //background-color:grey;   
            background:url("images/43.jpg") center no-repeat;
            height:100vh;
            background-size: cover;
            border: 0px solid;
        }


    form
          {
            max-height: 600px;
            height: 100vh;
            //background: url("images/27.jpg");
            background-size: cover;
            background-color:#1e7e34;        <!--#151e2761;-->
            padding: 10px;
            padding-bottom:10px;
            margin-top: 10px;
            color:white;
            box-shadow: 7px 5px 3px #121a21f2;
            border-radius:5px;

          }



        }
    </style>

<body>

 <div class="container" >  

   <div class="row">

    <div class="col-md-4 offset-0" id="form">
              
                    <center><b class="entermanagerdetails">ENTER MANAGER DETAILS</b></center>

                    <form>

                          <div class="form-group">
                        <input type="text" class="form-control text" id="employee id" placeholder=" Emoployee ID" name="emp_id" />                               
                           </div>  

                           <div class="form-group"> 
                         
                        <input type="text" class="form-control text" id="name" placeholder="NAME"/>

                            </div>
                             
                             <div class="form-group">
                        
                         <input type="text" class="form-control text" id="address" placeholder="ADDRESS"/>

                              
                              </div>

                             <div class="form-group">
                        <input type="text" class="form-control text" id="username" placeholder="USERNAME"/>


                              </div>

                              <div class="form-group">


                        <input type="text" class="form-control text" id="password" placeholder="PASSWORD"/>
                                </div>

                                <div class="form-group">

                        <input type="text" class="form-control text" id="gender" placeholder="GENDER"/>
                                </div>

                                <div class="form-group">

                        <input type="text" class="form-control text" id="age" placeholder="AGE"/>
                                </div>

                                <div class="form-group">


                        <input type="text" class="form-control text" id="blood group" placeholder="BLOOD GROUP"/>

                                </div>
                                <div class="form-group">

                        <input type="text" class="form-control text" id="email" placeholder="EMAIL"/>

                                </div>
                                <div class="form-group">

                        <input type="text" class="form-control text" id="ph.no" placeholder="PHONE NUMBER"/>

                                </div>

                                <div class="form-group">

                        <input type="text" class="form-control text" id="joining date" placeholder="JOINING DATE"/>

                                </div>
                                <div class="form-group">

                        <input type="text" class="form-control text" id="resignation date" placeholder="RESIGNATION DATE"/>

                                </div>

                              <div class="form-group2">
                                <div class="row">

                                  
                                    <div class="col-md-4 offset-2" >
                                     
                                      <input type="submit" class="btn btn-default" value="ADD" name="add">
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
      


                        

        <div class="col-sm-7" id="form2">    
        <center><b class="managerdetails">MANAGER DETAILS</b></center> 

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
             
            </form>
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