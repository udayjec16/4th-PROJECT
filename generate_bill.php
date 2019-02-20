<?php

  require_once 'include/morder.php';
  require_once 'dbcon.php';

  session_start();

  if (isset($_POST['yes'])) {

    // Create a unique order id for this session
    $sql = "INSERT INTO morder (o_id) VALUES (null)";

    if(mysqli_query($conn, $sql)){
        $order_id = mysqli_insert_id($conn);

        date_default_timezone_set("Asia/Kolkata");
        $dat = date("Y-m-d");

        // Now, insert data into order_master
        // Prepare an insert statement
        $sql = "INSERT INTO order_master(o_id, m_id, quantity, date) VALUES (?, ?, ?, ?)";

        if($stmt = mysqli_prepare($conn, $sql)){

            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "iiis", $order_id, $m_id, $quantity, $dat);

            foreach ($_SESSION['orders'] as $key => $order) {
                $m_id = $order->getmid();
                $quantity = $order->getquantity();

                mysqli_stmt_execute($stmt);
            }
            
            // Close statement
            mysqli_stmt_close($stmt);


            // Update Stock
            $sql="UPDATE medicine SET quantity=? WHERE medicine_id=?";

            if($stmt = mysqli_prepare($conn, $sql)){

                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "ii", $av_quantity, $m_id);

                foreach ($_SESSION['orders'] as $key => $order) {
                    $m_id = $order->getmid();
                    $av_quantity = $order->getav_quantity();

                    mysqli_stmt_execute($stmt);
                }
                
                // Close statement
                mysqli_stmt_close($stmt);
            } 
            else{
                //DB Error
            }


            // Next, insert data into bill
            $sql = "INSERT INTO bill (o_id, total_amount, date) VALUES ($order_id, $_SESSION[total_amount], '$dat')";

            if(mysqli_query($conn, $sql)) {
                $placed_order = true;

                // Remove the orders from the session
                unset($_SESSION['orders']);
                unset($_SESSION['total_amount']);
            } 
            else {
                // DB Error
            }

        } 
        else{
            // DB Error
        }
    }
    else{
        // DB Error
    }
  }

  elseif (isset($_POST['no'])) {

    // Removing the orders from the session
    if(isset($_SESSION['orders'])){
        unset($_SESSION['orders']);
        unset($_SESSION['total_amount']);

        header("Location: medicine sale.php?order=cancel");
    }
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <title>  C.G DRUG STORE | Bill Generation </title>
  </head>
  <body>
    
    <div class="container">
      
   
    <?php if ( !empty($placed_order)): ?>
        <div class="alert alert-success alert-dismissible fade show col-md-4 offset-4 " role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>PURCHASE SUBMITTED!..</strong> Please print the invoice...
        </div>
    <?php endif; ?>

    
    <?php 

        if (isset($_GET['order_id'])) {
            $order_id = $_GET['order_id'];
        }
        
        
        // Get the items the customer ordered
        $sql = "SELECT bill.bill_id, medicine.medicine_name, medicine.price_per_medicine, order_master.quantity, DATE_FORMAT(order_master.date, '%d-%m-%Y') AS date, medicine.price_per_medicine * order_master.quantity AS total FROM bill, medicine, order_master WHERE medicine.medicine_id = order_master.m_id and bill.o_id = order_master.o_id and order_master.o_id=$order_id";

        if ($result = mysqli_query($conn, $sql)) {
            $item_rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        else {
            // DB Error
        }

     ?>

     <div class="container">
             <div class="row mt-1">
                 <div class="col"></div>
                 <div class="col"></div>
                 <div class="col"></div>
                 <div class="col"></div>
                 <div class="col"></div>
                 <div class="col"></div>
                 <div class="col">
                     <button type="button" class="btn btn-primary btn-lg">Print Bill</button>
                 </div>
               </div>
          </div>




          <div class="border border-primary rounded m-3 p-3" id="bill">
            <div class="text-center text-muted font-weight-bold mb-4">
                    <h3 >
                      <u>Sale Invoice</u>
                    </h3>
                    <h5>
                      C.G DRUG STORE GAR ALI JORHAT,ASSAM. GENUINE DGUR RETAILER
                    </h5>
                    <h9>
                      Ph.No:9706443418
                      Email:udayjec16@gmail.com
                    </h9>
                  </div>



                  
                  <p>
                    Invoice ID: <?php echo $item_rows[0]['bill_id']; ?>            
                  </p>
                  <p>
                    Date: <?php echo $item_rows[0]['date']; ?>
                  </p>

                  <!-- Customer Information -->


                   <div class="table-responsive mt-4">
                      <table class="table table-striped table-sm">
                          <thead class="thead-dark">
                            <tr>
                              <th>Medicine Name</th>
                              <th>Price per medicine</th>
                              <th>Quantity</th>
                              <th>Total</th>
                            </tr>
                          </thead>
                          <tbody>

                              <?php $total_amount = 0; ?>

                              <?php foreach ($item_rows as $item): ?>

                              <tr>
                                  <td> <?php echo $item['medicine_name']; ?></td>
                                  <td> Rs. <?php echo number_format($item['price_per_medicine']); ?> </td>
                                  <td> <?php echo $item['quantity']; ?> </td>
                                  <td> 
                                      <?php 
                                          echo $item['total'];
                                         $total_amount += $item['total'];
                                      ?> 
                                  </td>
                              </tr>    

                              <?php endforeach; ?>

                          </tbody>
                        </table>
                  </div> 


                  <h5 class="text-right p-2 mt-1">Total bill amount = Rs.<?php echo number_format($total_amount); ?> </h5>
               </div>




      
    <?php require 'include/footer.php'; ?> 

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function(){
            
            $("button").click(function(){

                var data = $("#bill").html();

                var mywindow = window.open("", "", 'height=500,width=800');
                
                mywindow.document.write("<!doctype html>");
                mywindow.document.write('<html lang="en"><head><title>FoodPark | Print Invoice</title>');
                mywindow.document.write("<meta charset='utf-8'>");

                mywindow.document.write("<meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>");

                //mywindow.document.write("<link rel='stylesheet' href='css/bootstrap.min.css'>");
                mywindow.document.write('</head><body >');
                

                mywindow.document.write("<div class='container'>");
                mywindow.document.write(data);
                mywindow.document.write("</div>");

                mywindow.document.write('</body></html>');

                mywindow.print();
                mywindow.close();

            });
        });    
    </script>


  </body>
</html>