<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">



<style type="text/css">
.sidebar
    {
        background-color:red;
       //max-height: 900px;
        height: 100vh;
    </style>



    <body>

<?php
{
	require 'navbar.php';
}
?>
<div class="row">
    	<div class="col-md-2 offset-0">
			<div class="sidebar">
    	

    		<a href="#">button</a>
        	<a href="#">button</a>
        	<a href="#">button</a>
        	<a href="#">button</a>

    	
			</div>

    	</div>


	<div class="row">

    <div class="col-md-5">


    
    
      	<div class="head"><h4>SALE MEDICINE</h4>
        </div>

        <form class="form-inline">

            <div class="form-group"> 

        <label for="cash_memo_no." class="control-label padding-top-10">CASH MEMO No.</label> 
                         
        <input type="number" class="form-control text" id="cash_memo_no." placeholder="memo number" name="med_name" required="required"/>

            </div>


            <div class="form-group"> 


        <label for="medicine_id" class="control-label padding-top-10">MEDICINE ID
        </label> 
                         
        <input type="number" class="form-control" id="medicine_id" placeholder="medicine id" name="med_id" required="required"/>

            </div>



            <div class="form-group"> 


        <label for="cash_memo_no." class="control-label padding-top-10">CASH MEMO No.</label> 
                         
        <input type="number" class="form-control text" id="cash_memo_no." placeholder="memo number" name="med_name" required="required"/>

            </div>



            <div class="form-group"> 


        <label for="cash_memo_no." class="control-label padding-top-10">CASH MEMO No.</label> 
                         
        <input type="number" class="form-control text" id="cash_memo_no." placeholder="memo number" name="med_name" required="required"/>

            </div>
     </div>
 </div>
 </div>






<script src="js/jquery.js">   </script>
    <script src="js/bootstrap.min.js">  </script>
    
</body>
</html>