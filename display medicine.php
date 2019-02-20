<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <style type="text/css">
</style>




<div class="col-sm-8 offset-3"   id="form2">    
        <!--<center><b class="managerdetails">MANAGER DETAILS</b></center> -->
        <h2>MEDICINE DETAILS LIST</h2>

<?php

    include 'dbcon.php';

    $query="SELECT *FROM medicine";


    if($result=mysqli_query($conn,$query));

    {
        echo "jdwchd";
    

?>  
    
    

        <!-- <div class="table-responsive">
            <div class="scrollable">

            <table class="table table-bordered  table-striped
                        table-hover"> 

                        
                <tr>
                           
                     <th colspan="11"><h2>student details</h2></th>
                
                </tr>
                        
                    <t>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>EMAIL</th>
                        <th>CLASS</th>
                        <th>CLASS</th>
                        <th>CLASS</th>
                        <th>CLASS</th>
                        <th>CLASS</th>
                        <th>CLASS</th>
                        <th>CLASS</th>
                    </t>-->
        <?php
        
          while($row=mysqli_fetch_array($result))

            {

        ?>

            <tr>
                <td><? php echo $row['medicine_id']. ?></td>
                <td><? php echo $row['medicine_name']; ?></td>
                <td><? php echo $row['medicine_type']; ?></td>
                <td><? php echo $row['batch_no']; ?></td>
                <td><? php echo $row['manufacturing_date']; ?></td>
                <td><? php echo $row['expiry_date']; ?></td>
                <td><? php echo $row['quantity']; ?></td>
                <td><? php echo $row['price_per_medicine']; ?></td>
                <td><? php echo $row['manufacturer_name']; ?></td>
                <td><? php echo $row['distributor_name']; ?></td>
                <td><? php echo $row['distributor_ph_no']; ?></td>
                
            </tr>


        <?php

            }
        }


        ?>



    </table>




<script src="js/jquery.js">   </script>
    <script src="js/bootstrap.min.js">  </script>
    
</body>
</html>