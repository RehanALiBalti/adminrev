<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
</head>

<body>
    <?php include('includes/navigation.php'); ?>

<?php


?>
<!-- Content   offers -->
<div class="main">
  

    <div class="containe mb-5">
        <h2 class="mb-4">Story Summary</h2>
        <div class="container">
            <div class="col-12">
                <br>
            <table class="table table-bordered">
                <tbody>
                    
                    <tr>
                        <td><b>Story Id</b></td>
                        <td><?php echo $adminlist['id']; ?></td>
                    </tr>  
                    <tr>
                        <td><b>Date</b></td>
                        <td><?php echo $adminlist['created_date']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Name</b></td>
                        <td><?php echo $adminlist['user_name']; ?></td>
                    </tr>  
                    <tr>
                        <td><b>Email</b></td>
                        <td><?php echo $adminlist['user_email']; ?></td>
                    </tr>  
                    <tr>
                    <td><b>Story Name</b></td>
                    <td><?php echo $adminlist['story_name']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Story</b></td>
                        <td><?php echo $adminlist['story']; ?></td>
                    </tr>  
                    <tr>
                    <td><b>Modifications</b></td>
                    <td><?php echo $adminlist['modifications']; ?></td>
                    </tr>
                    <tr>
                    <td><b>Memorable</b></td>
                    <td><?php echo $adminlist['memorable']; ?></td>
                    </tr>
                    <tr>
                    <td><b>Advice</b></td>
                    <td><?php echo $adminlist['advice']; ?></td>
                    </tr>

                    <tr>
                    <td><b>social_media</b></td>
                    <td><?php echo $adminlist['social_media']; ?></td>
                    </tr>
                    <tr>
                    <td><b>make</b></td>
                    <td><?php echo $adminlist['make']; ?></td>
                    </tr>
                                        <tr>
                    <td><b>model</b></td>
                    <td><?php echo $adminlist['model']; ?></td>
                    </tr>
                    <tr>
                        <td><b>year</b></td>
                        <td><?php echo $adminlist['year']; ?></td>
                    </tr>
                                        <tr>
                        <td><b>images</b></td>
                        
                        <td><?php if($adminlist['images'] !=""){
                            $x=json_decode($adminlist['images']);
                            
                            for($i=0;$i<count($x);$i++){
                                if($x[$i]!=""){ ?>
                                <img style="width:200px;height:200px;" src="<?php echo $x[$i] ?>" class="img-thumbnail" alt="Cinque Terre">

                                <?php     
                                }
                            }
                        }
                         ?></td>
                    </tr>
                    
                </tbody> 
            </table>
            <br> 


                         
            </div>
        </div> 

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