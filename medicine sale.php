<?php 
    require_once 'include/morder.php';
    
    session_start();

    if (isset($_POST['add_to_cart'])) {
        $mid = $_POST['mid'];
        $mname = $_POST['mname'];
        $mprice= $_POST['mprice'];
        $quantity = $_POST['quantity'];
        $av_quantity = $_POST['av_quantity'];

        if ($quantity <= $av_quantity) {
            $o = new MOrder($mid,$mname,$mprice,$quantity, $av_quantity-$quantity);

            if(!isset($_SESSION['orders'])){

            $arr = array();

            $_SESSION['orders'] = $arr;

            }
            array_push($_SESSION['orders'], $o);

            echo "item_added";
        }
        else {
            echo "Not enough quantity";
        }

        
    }

 ?>





<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



<style type="text/css">

    #form1
        {
            padding-top:12px;
            background:url("images/26.jpg"); 

        }

        #form3
        {
            max-height:200px; 
            background-color:red; 
            //padding-top:0px;
            margin-top: 20px;
            border-radius: 5px;   
        }

        #form4
        {
            background-color:red; 
            //padding-top:30px;
            margin-top: 30px;
            //border-radius: 5px;
        }

        #form5
        {
            max-height:400px; 
            background-color:grey; 
            //padding-top:0px;
            margin-top: 20px;
            border-radius: 5px;   
        }



    .form-group
        {
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 8px;
        }

        .form-control
        {
            max-height:30px;
            max-width: 130px;
        }

.sidebar
    {
        background-color:#650404;
       //max-height: 900px;
        height: 100vh;
        padding-top: 10px;
        margin-top: 10px;
        margin-bottom: 10px;


    }
    .head{
        margin-top: 20px;
    }

    .head2{
        padding-top: 10px;
    }

</style>


<style>
    body
        {
        background-color:#75636359;  <!--grey-->
        }


 form
    {

    max-height: 800px;
    //height: 100vh;
    background: url("images/27.jpg");
    //background-size: cover;
    //background-color:#1e7e345e;    <!--#1e7e34; #151e2761;-->
    padding: 15px;
    padding-bottom:10px;
    padding-top:20 
    margin-top:10px;
    color:white;
    //box-shadow: 7px 5px 3px #121a21f2;
    border-radius:5px;
    //background-blend-mode:lighten;

 }

</style>

<body>

    <?php
    {

        require 'navbar.php';
    }

?>

<div class="row">
    <div class="col-md-2">
        <div class="sidebar">

            <!--<div class="card" style="width: 10rem;">
              <img class="card-img-top" src=".../30px30/" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">HEALTH IS WEALTH</p>
                <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
              </div>
            </div>-->



            <div class="card" style="width: 10rem;">
              <img class="card-img-top" src=".../100px180/" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
    </div>
</div>


<!--display medicine-->

<div class="container">

    
    <div class="col-md-10 offset-1">
        <div class="row" >              <!--id="form3"-->

            <div class="head"><h4>SALE MEDICINE</h4></div>


            <?php

             require 'dbcon.php';

             $query="SELECT *FROM medicine where quantity>0";

            if($result=mysqli_query($conn,$query))

                {



            ?>

        <div class="table-responsive" id="form5">  <!--id="form5"-->
        <div class="scrollable">

                <table class="table table-bordered  table-striped
                        table-hover table-sm"> 



            <thead class="thead-light">
     
                <tr>

                    <th scope="col">MEDICINE_ID</th>
                    <th scope="col">MEDICINE_NAME</th>
                    <th scope="col">MEDICINE_TYPE</th>
                    <th scope="col">BATCH_No.</th>
                    <th scope="col">MANUFACTURING_DATE</th>
                    <th scope="col">EXPIARY_DATE</th>
                    <th scope="col">AVAILABALE QUANTITY</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">COMPANY_NAME</th>
                    <th scope="col">DISTRIBUTOR_NAME</th>
                    <th scope="col">DISTRIBUTOR_Ph_No.</th>
                    <th scope="col">Ad_TO_CART</th>
                    
                </tr>
            </thead>


          <?php 
            while($row=mysqli_fetch_array($result)) {
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

                            <?php
                              $placed=false;

                              if(!empty($_SESSION['orders'])){
                                foreach($_SESSION['orders'] as $order){

                                    if($order -> getmid() == $row['medicine_id']){

                                        $placed = true;
                                        break;
                                    }
                                }

                              }
                              ?>
                              <?php
                              if($placed==true):?>
                              <span>already ordered</span>

                          <?php else: ?>



                            <form method="POST" action="medicine sale.php">
                                <input type="hidden" name="mid" value="<?php echo $row['medicine_id'];  ?>">
                                <input type="hidden" name="mname" value="<?php echo $row['medicine_name']; ?>">
                                <input type="hidden" name="mprice" value="<?php echo $row['price_per_medicine']; ?>">
                                <input type="hidden" name="av_quantity" value="<?php echo $row['quantity']; ?>">

                                <input type="text" name="quantity" placeholder="quantity">
                                <input type="submit" name="add_to_cart" value="add_to_cart">
                            </form>

                        <?php endif; ?>
                        </td>


                        <!-- <td><a href="process.php?id="><button name="cart">add_to_cart</button></a>
                          
                        </td>
 -->
                    </tr>
                


                    <?php

                   }
                }

                    ?>   



                </table>



        </div>
    </div>
</div>

        
            <!--THIS CART-->

            <div class="row">
            <div class="col-md-10 offset-1" id="form4">
                
                <div>

                <button> <a href="submitorder.php"> procede to cart</a></button> 
                    
                </div>

            <div class="head2"><h2>CART</h2></div>
                    


            </div>
            </div>
            <!--CART ENDS HERE-->


     </div>

    </div>

</div>


  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js">   </script>
    <script src="js/bootstrap.min.js">  </script>
    
</body>
</html>