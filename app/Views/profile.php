<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?= base_url('assets/css/register.css');?>">
    
    <link rel="stylesheet" href="<?= base_url('assets/css/profile.css');?>">
    <title><?= $user['user_name'] ?>    | CodeDabble</title>
</head>
<style>
 
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

 <div class="user-info">
     <div class="info-wrapper">
         <h5 class="user-info-header">
         USERNAME
         </h5>
         <p class="info"><?= $user['user_name'] ?></p>
         
     </div>
     <div class="info-wrapper">
     <h5 class="user-info-header">
         EMAIL
         </h5>
         <p class="info"> <?= $user['user_email'] ?></p>
        
     </div>
     <div class="info-wrapper">
     <h5 class="user-info-header">
         ADDRESS
         </h5>
         <p class="info"><?= $user['address'] ?></p>
         
     </div>

 </div>

  </div>
  <div class="bio-wrapper col-sm-8">
   <h1 class="bio-header">
       USER BIO
   </h1>   
   <p class="bio">
  <?= $user['bio'] ?>
</p>
  </div>
</div>
<div class="form-group">
<a id="SIGNIN"class="btn btn-signin create-question" href="<?php echo base_url('Profile/editprofile/'. $user['id']);?>" role="button">EDIT PROFILE</a>
    </div>
    <div class="form-group">
<button id="SIGNIN"class="btn btn-signin create-question" data-toggle="modal" data-target="#exampleModal" href="<?php echo base_url('Profile/changepassword/'. $user['id']);?>" role="button">CHANGE PASSWORD</button>
    </div>

    <div class="form-group">
<button id="SIGNIN"class="btn btn-signin create-question" data-toggle="modal" data-target="#profile-photo" href="<?php echo base_url('Profile/changepassword/'. $user['id']);?>" role="button">CHANGE PROFILE PHOTO</button>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-0 d-block">
        <h2 class="modal-title text-center" id="exampleModalLabel">CHANGE PASSWORD</h2>
        <p class="text-center">If you change password you will be logged out</p>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('Profile/updatepassword/'.$user['id']);?>">
      <div class="input-group mb-3">
                    <input type="password" name="password" placeholder="password" class="form-control password" id="InputForPassword">
                    <div class="input-group-append">
                    <span class="input-group-text password-span">
                    <i class="fa fa-eye-slash" aria-hidden="true" onclick="myFunction()"></i>
                      </span>
                    </div>
      </div>
      <div class="modal-footer border-0">
      <input id="SIGNIN" type="submit" class="btn btn-signin create-question mx-auto" value="SAVE NEW PASSWORD">
</form>
      </div>
    </div>
  </div>
</div>
    </div>



    <!-- Modal for photo-->
<div class="modal fade" id="profile-photo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header border-0 d-block">
        <h2 class="modal-title text-center" id="exampleModalLabel">CHANGE PROFILE PHOTO</h2>
      </div>
      <div class="modal-body">
      <?= form_open_multipart('Profile/photo/'.$user['id'] ) ?>
      <form class="form">
    <!--<div class="file-upload-wrapper" data-text="Select your file!">-->
    <div class="form-group">
    <label for="file-input">File upload</label>
    <input type="file" name="userfile" id="file-input">
    </div> 
    <div class="modal-footer border-0">
      <input id="SIGNIN" type="submit" class="btn btn-signin create-question mx-auto" value="SAVE PHOTO">
</form>
      </div>
    </div>
  </div>
</div>
    </div>




    </div>



    
</body>
<script>
function myFunction() {
  var x = document.getElementById("InputForPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html>