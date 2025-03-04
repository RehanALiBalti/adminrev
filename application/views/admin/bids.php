<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
</head>

<body>
    <?php include('includes/navigation.php'); ?>


<!-- Content   offers -->
<div class="main">
  
    <div class="containe mb-5">
        <h2 class="mb-4">Orders List</h2>
        <table class="table table-fluid " style="width:100%" id="myTable">
        <thead>
        <tr><th>Username</th><th>Email</th><th>Date/time</th><th>Pickup Date</th><th>Price</th><th>Status</th><th>Action</th></tr>
        </thead>
        <tbody>
        <?php  
        $i=0;
        foreach($adminlist as $k) {
            // echo "<pre>";
            // print_r($k);
            // echo "</pre>";
            ?>
        <tr>
            <td><?php echo $k['user_name']; ?></td>
            <td><?php  echo $k['email']; ?></td>
            <td><?php  echo $k['date'] ?></td>
              <td><?php  echo $k['pickupdate'] ?></td>
            <td><?php  echo "$ ".$k['price'] ?></td>
            <td><?php 
            
            if($k['address_type'] !="pickup"){
            
            if($k['checkout_status']==1){?>
                Paid But Not Shipped
                <br>
                <a class="btn btn-info" href="<?php echo base_url().'admin/order_complete/2/'.$k['check_out_id']; ?>">Mark As Shipped</a>
           <?php }
           else if($k['checkout_status']==2){?>


   Shipped
                <br>
                <a class="btn btn-info" href="<?php echo base_url().'admin/order_complete/3/'.$k['check_out_id']; ?>">Mark As Complete</a>
<?php
           }else if($k['checkout_status']==3){
               echo "Completed";
           }
           
           else{?>
Not Paid
                <br>
                <a class="btn btn-info" href="<?php echo base_url().'admin/order_removed/'.$k['check_out_id']; ?>">Removed</a>
          <?php }  ?>
          
          <?php } else{
          if($k['checkout_status']==1)
          {?>
                Paid But Not Delivered
                <br>
                <a class="btn btn-info" href="<?php echo base_url().'admin/order_complete/2/'.$k['check_out_id']; ?>">Ready for Delivered</a>
           <?php }
           else if($k['checkout_status']==2){?>


   Shipped
                <br>
                <a class="btn btn-info" href="<?php echo base_url().'admin/order_complete/3/'.$k['check_out_id']; ?>">Mark As Complete</a>
<?php
           }else if($k['checkout_status']==3){
               echo "Completed";
           }
           
           else{?>
Not Paid
                <br>
                <a class="btn btn-info" href="<?php echo base_url().'admin/order_removed/'.$k['check_out_id']; ?>">Removed</a>
          <?php } } ?>
          
          
          
          
          </td>
        
        <td>
            <a class="btn btn-info" href="<?php echo base_url().'admin/order_detail/'.$k['check_out_id']; ?>">View Order Info</a>
        
        </td>    
        </tr>
        <?php  } ?>        
        </tbody>
        </table>
    </div>
    
   


</div>




<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



    <?php include('includes/footer.php'); ?>
    <?php include('includes/bottom_links.php'); ?>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    } );
        </script>

</body>

</html>