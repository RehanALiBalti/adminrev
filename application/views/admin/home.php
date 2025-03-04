<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
</head>

<body>
    <?php include('includes/navigation.php'); ?>


<!-- Content   offers -->

<div class="main">
 
<div class="col-12 col-md-12 d-flex justify-content-end">
                    <a href="<?php echo base_url().'admin/addnewform' ?>" class="btn btn-info">
                     Add New 
                    </a>
                </div>
    
    <div class="containe mb-5">
        <h2 class="mb-4">Stories List</h2>
        <table class="table table-fluid" id="myTable">
        <thead>
         <tr><th>Date</th><th>Name/EMail</th> <th>Type</th>
         <!--
         <th>modifications</th>
         <th>memorable</th><th>Advice</th>
         -->
         
         <th>Story Name</th>
         <!--
         <th>social_media</th><th>images</th>
         -->
         <th>Featured</th>
        <th>Banner</th>
         <th>Action</th> </tr>
        </thead>
        <tbody>
        <?php 
        $baby=array();
        $baby['carEnthusiast']="Car Enthusiast";
        $baby['motorbikeEnthusiast']="Motor Bike Enthusiast";
        $baby['carGarage']="Car Garage";
        $baby['carModificationShop']="Car Modification Shop";
        $baby['carClub']="Car Club";
        $baby['automotivePhotographerast']="Automotive Photographerast";
        $baby['carModificationShop']="Car Modification Shop";
        foreach($adminlist as $ad){ 

        
        ?>
            <tr>
                <td><?php echo $ad['created_date']; ?></td>
                <td><?php echo $ad['user_name']; ?><br><?php echo $ad['user_email']; ?></td>
                <td><?php echo $baby[$ad['story_type']]; ?></td>
       
                                <td><?php echo $ad['story_name']; ?></td>
           
                <td>
                    <?php if($ad['featured']==1){ ?>
                    <button class="btn btn-secondary">Featured  For <?php echo $baby[$ad['story_type']]; ?></button>

                    <?php }else { ?>
                    <a class="btn btn-info" href="<?php echo base_url().'admin/setfeature/'.$ad['story_type'].'/'.$ad['id'] ?>">Set Feature  For <?php echo $baby[$ad['story_type']]; ?></a>
                    <?php } ?>
                    <br>
                   
                    
                </td>
                <td>
                      <?php if($ad['banner']==1){ ?>
                    <button class="btn btn-success">Banner Story</button>

                    <?php }else { ?>
                    <a class="btn btn-warning" href="<?php echo base_url().'admin/setBanner/'.$ad['id'] ?>">Set Banner</a>
                    <?php } ?>
                    
                </td>

                <td>
                     <a href="<?php echo base_url().'admin/viewstory/'.$ad['id'] ;?>">View</a>
                      /
                    <?php if($ad['status']==0){ ?>
                    <a href="<?php echo base_url().'admin/activestory/'.$ad['id'] ;?>">Active</a>
                    <?php }else{?>
                    <?php if($ad['banner']==1 || $ad['featured']==1){ ?>
                    <a href="#" data-toggle="modal" data-target="#bannermodel">Suspend</a>
                    <?php }else{ ?>
                    <a href="<?php echo base_url().'admin/suspendstory/'.$ad['id'] ;?>">Suspend</a>                 
                    <?php } ?>
                    
                    
                    <?php } ?>
                    
                    /
                    <?php if($ad['banner']==1 || $ad['featured']==1){ ?>
                     <a href="#" data-toggle="modal" data-target="#bannermodel">Delete</a>
                    <?php }else{ ?>
                    <a href="<?php echo base_url().'admin/deletestory/'.$ad['id'] ;?>">Delete</a></td>
                    <?php } ?>
            </tr>
            <?php } ?>
    </tbody>
        </table>
    </div>
    
   


</div>

<!-- The Modal -->
<div class="modal" id="bannermodel">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Alert</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        You Cannot sespend or delete Story because This story is Banner or Featured Story?For Delete and sespend Remove From Banner and Featured. 
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