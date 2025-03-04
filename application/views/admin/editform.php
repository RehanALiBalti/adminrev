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
        <br>
    <h2 class="mb-4">Manage Account</h2>


<?php include('includes/alert-msgs.php'); ?>        
    <form action="<?php echo base_url().'admin/updateacount/'.$no ;?>" method="post">

<div class="row my-5">

<?php 
// echo "<pre>";
// print_r($formdata);
// echo "</pre>";
?>

    <div class="col-12 col-md-8">
  
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">First name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" required="required"  placeholder="First name" name="firstName" value="<?php echo  $q['firstName']?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Last name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" required=""  placeholder="Last name" name="lastName" value="<?php echo  $q['lastName']?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-10">
            <input type="email"readonly class="form-control" required="" placeholder="Enter email" name="email" value="<?php echo  $q['email']?>">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="password">Password:(Fill If You Want)</label>
          <div class="col-sm-10">
            <input type="password" class="form-control"  placeholder="Enter New Password" name="password" value="">
          </div>
        </div>
              
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Company name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" value="<?php echo  $q['companyName']?>" required=""  placeholder="Enter Companey" required="" name="companyName">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Address:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" required=""  value="<?php echo  $q['address']?>"  placeholder="Enter address" name="address">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">State name:</label>
          <div class="col-sm-10">
            <select class="form-control" name="state">
              <option value="AL" <?php if($q['state']=="AL"){echo 'selected';} ?>>Alabama</option>
              <option value="AK" <?php if($q['state']=="AK"){echo 'selected';} ?>>Alaska</option>
              <option value="AZ" <?php if($q['state']=="AZ"){echo 'selected';} ?>>Arizona</option>
              <option value="AR" <?php if($q['state']=="AR"){echo 'selected';} ?>>Arkansas</option><option value="CA" <?php if($q['state']=="CA"){echo 'selected';} ?>>California</option>
              <option value="CO"<?php if($q['state']=="CO"){echo 'selected';} ?>>Colorado</option>
              <option value="CT" <?php if($q['state']=="CT"){echo 'selected';} ?>>Connecticut</option>
              <option value="DE" <?php if($q['state']=="DE"){echo 'selected';} ?>>Delaware</option><option value="DC" <?php if($q['state']=="DC"){echo 'selected';} ?>>District of Columbia</option>
              <option value="FL" <?php if($q['state']=="FL"){echo 'selected';} ?>>Florida</option>
              <option value="GA" <?php if($q['state']=="GA"){echo 'selected';} ?>>Georgia</option>
              <option value="HI" <?php if($q['state']=="HI"){echo 'selected';} ?>>Hawaii</option>
              <option value="ID" <?php if($q['state']=="AL"){echo 'selected';} ?>>Idaho</option>
              <option value="IL" <?php if($q['state']=="IL"){echo 'selected';} ?>>Illinois</option><option value="IN" <?php if($q['state']=="IN"){echo 'selected';} ?>>Indiana</option>
              <option value="IA" <?php if($q['state']=="IA"){echo 'selected';} ?>>Iowa</option>
              <option value="KS" <?php if($q['state']=="KS"){echo 'selected';} ?>>Kansas</option>
              <option value="KY" <?php if($q['state']=="KY"){echo 'selected';} ?>>Kentucky</option><option value="LA" <?php if($q['state']=="LA"){echo 'selected';} ?>>Louisiana</option>
              <option value="ME" <?php if($q['state']=="ME"){echo 'selected';} ?>>Maine</option>
              <option value="MD" <?php if($q['state']=="MD"){echo 'selected';} ?>>Maryland</option><option value="MA" <?php if($q['state']=="MA"){echo 'selected';} ?>>Massachusetts</option>
              <option value="MI" <?php if($q['state']=="MI"){echo 'selected';} ?>>Michigan</option><option value="MN" <?php if($q['state']=="MN"){echo 'selected';} ?>>Minnesota</option>
              <option value="MS" <?php if($q['state']=="MS"){echo 'selected';} ?>>Mississippi</option>
              <option value="MO" <?php if($q['state']=="MO"){echo 'selected';} ?>>Missouri</option><option value="MT" <?php if($q['state']=="MT"){echo 'selected';} ?>>Montana</option><option value="NE" <?php if($q['state']=="NE"){echo 'selected';} ?>>Nebraska</option><option value="NV" <?php if($q['state']=="AL"){echo 'selected';} ?>>Nevada</option><option value="NH" <?php if($q['state']=="NH"){echo 'selected';} ?>>New Hampshire</option>
              <option value="NJ" <?php if($q['state']=="NJ"){echo 'selected';} ?>>New Jersey</option>
              <option value="NM" <?php if($q['state']=="NM"){echo 'selected';} ?>>New Mexico</option>
              <option value="NY" <?php if($q['state']=="NY"){echo 'selected';} ?>>New York</option>
              <option value="NC" <?php if($q['state']=="NC"){echo 'selected';} ?>>North Carolina</option>
              <option value="ND" <?php if($q['state']=="ND"){echo 'selected';} ?>>North Dakota</option>
              <option value="OH" <?php if($q['state']=="OH"){echo 'selected';} ?>>Ohio</option>
              <option value="OK" <?php if($q['state']=="OK"){echo 'selected';} ?>>Oklahoma</option>
              <option value="OR" <?php if($q['state']=="OR"){echo 'selected';} ?>>Oregon</option>
              <option value="PA" <?php if($q['state']=="PA"){echo 'selected';} ?>>Pennsylvania</option>
              <option value="RI" <?php if($q['state']=="RI"){echo 'selected';} ?>>Rhode Island</option>
              <option value="SC" <?php if($q['state']=="SC"){echo 'selected';} ?>>South Carolina</option>
              <option value="SD" <?php if($q['state']=="SD"){echo 'selected';} ?>>South Dakota</option>
              <option value="TN" <?php if($q['state']=="TN"){echo 'selected';} ?>>Tennessee</option>
              <option value="TX" <?php if($q['state']=="TX"){echo 'selected';} ?>>Texas</option>
              <option value="UT" <?php if($q['state']=="UT"){echo 'selected';} ?>>Utah</option>
              <option value="VT" <?php if($q['state']=="VT"){echo 'selected';} ?>>Vermont</option>
              <option value="VA" <?php if($q['state']=="VA"){echo 'selected';} ?>>Virginia</option>
              <option value="WA" <?php if($q['state']=="WA"){echo 'selected';} ?>>Washington</option>
              <option value="WV <?php if($q['state']=="WV"){echo 'selected';} ?>">West Virginia</option>
              <option value="WI" <?php if($q['state']=="WI"){echo 'selected';} ?>>Wisconsin</option>
              <option value="WY" <?php if($q['state']=="WY"){echo 'selected';} ?>>Wyoming</option></select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">City name:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" required="" value="<?php echo  $q['city']?>" placeholder="Enter City" name="city">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Zip Code:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" required="" value="<?php echo  $q['zipcode']?>"  placeholder="Enter zipcode" name="zipcode">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Phone :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" required="" value="<?php echo  $q['phone']?>"  placeholder="Enter phone" name="phone">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Website :</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" required="" value="<?php echo  $q['website']?>"   placeholder="Enter website" name="website">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">How did you hear about us?</label>
          <div class="col-sm-10">
            <select class="form-control" name="source">
              <option value="FriendReferral" 
              <?php if($q['source']=="FriendReferral"){echo 'selected';} ?>>Friend/Referral</option>
              <option value="SearchEngine" <?php if($q['source']=="SearchEngine"){echo 'selected';} ?>>Search Engine</option>
              <option value="Magazine" <?php if($q['source']=="Magazine"){echo 'selected';} ?>>Magazine</option>
              <option value="HdBannerSalesKit" <?php if($q['source']=="HdBannerSalesKit"){echo 'selected';} ?>>HD Banner Sales Kit</option>
              <option value="Postcard" <?php if($q['source']=="Postcard"){echo 'selected';} ?>>Postcard</option>
              <option value="Phone" <?php if($q['source']=="Phone"){echo 'selected';} ?>>Phone</option>
              <option value="Fax" <?php if($q['source']=="Fax"){echo 'selected';} ?>>Fax</option>
              <option value="Other" <?php if($q['source']=="Other"){echo 'selected';} ?>>Other</option>
            </select>
          </div>
        </div>
    
        

    </div>
    <div class="col-12 col-md-12 d-flex justify-content-end">
        <button class="btn btn-success" type="submit">Update User Info</button>
                  
    </div>

</div>
</form>

    </div>
    
   


</div>





    <?php include('includes/footer.php'); ?>
    <?php include('includes/bottom_links.php'); ?>
    
</body>

</html>