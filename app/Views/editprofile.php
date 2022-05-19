<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/register.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/editprofile.css');?>">
    <title>Edit <?= $user['user_name'] ?> | CodeDabble</title>
</head>
<style>
     .container{
   padding-top: 10%;
 }
</style>
<body>
    <div class="container">
    <div class="row">
  <div class="col-sm-4">
 <div class="imageWrapper">
 <?php
    $user_img = !empty(session("uploaded_flleinfo")) ? session("uploaded_flleinfo") : 'default.jpg';
    ?>
   
 <img src="<?php echo base_url().'/uploads/user/'.$user_img; ?>" height="200" width="200" class="profile-image"  alt="">
 </div>

<?= form_open_multipart('Profile/update/'.$user['id'] ) ?>
 <div class="user-info">


     <div class="info-wrapper">
         <div class="form-group">
         <input type="text" name="name" class="form-control" placeholder="Edit Username" id="InputForName" value="<?= $user['user_name'] ?>">
    </div>
   
     </div>
     <div class="info-wrapper">
     
         <div class="form-group">
         <input type="email" name="email" class="form-control" placeholder="Edit Email" id="InputForEmail" value="<?= $user['user_email'] ?>">
        </div>
        
     </div>
     <div class="info-wrapper">
     <div class="form-group">
         <input type="text" name="address" class="form-control" placeholder="Edit Address" id="InputForAddress" value="<?= $user['address'] ?>">
        </div>
         
     </div>

 </div>

  </div>
  <div class="bio-wrapper col-sm-8">
   <h1 class="bio-header">
       CHANGE BIO
   </h1>   
   <p class="bio">
  <div class="form-group">
         <textarea name="bio" id="" cols="30" class="form-control" placeholder="Edit bio" rows="10" ><?= $user['bio'] ?></textarea>
        </div>
</p>
  </div>
</div>
<div class="form-group">
<input id="SIGNIN" type="submit" class="btn btn-signin create-question" value="SAVE NEW PROFILE">
    </div>
    </form>
    </div>
</body>
</html>