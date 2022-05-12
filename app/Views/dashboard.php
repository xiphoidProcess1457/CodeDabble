<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?= base_url('assets/css/register.css');?>">
    
    <link rel="stylesheet" href="<?= base_url('assets/css/profile.css');?>">
    <title><?= $user['username'] ?>    | CodeDabble</title>
</head>
<style>
 html{
    overflow: visible;
}
.container{
    padding-left: 1em;
    padding-top: 10em;
}

.profile-image{
    border-radius: 100%;
}


.user-info{
    padding-top: 2em;
}


.info{
    color: #1E0D8C;
    font-size:1.1em;
    font-weight: 400;
}

.bio-wrapper{
    width: 100%;
    margin-top: 4em;
}

.bio-header{
    color: #2C0AA6;
    font-size:4em;
    font-weight: 400;
}

.bio{
    font-size:1.2em;
    font-weight: 400;
    padding-left: 5%;
    text-align: justify;
    text-justify: inter-word;
}

.user-info-header{
    color: #2C0AA6;
    font-size:1.4em;
    font-weight: 500;
}


.modal {
  text-align: center;
  padding: 2em;
}


.modal-content{
    padding: 2em;
    border: none;
    border-radius: 5%;
}
@media screen and (min-width: 768px) { 
  .modal:before {
    display: inline-block;
    vertical-align: middle;
    content: " ";
    height: 100%;
  }
}

.modal-dialog {
  display: inline-block;
  text-align: left;
  vertical-align: middle;
}


/*upload*/
.form {
	 width: 400px;
}
 .file-upload-wrapper {
	 position: relative;
	 width: 100%;
	 height: 60px;
}
 .file-upload-wrapper:after {
	 content: attr(data-text);
	 font-size: 18px;
	 position: absolute;
	 top: 0;
	 left: 0;
	 background: #fff;
	 padding: 10px 15px;
	 display: block;
	 width: calc(100% - 40px);
	 pointer-events: none;
	 z-index: 20;
	 height: 40px;
	 line-height: 40px;
	 color: #999;
	 border-radius: 5px 10px 10px 5px;
	 font-weight: 300;
}
 .file-upload-wrapper:before {
	 content: 'Upload';
	 position: absolute;
	 top: 0;
	 right: 0;
	 display: inline-block;
	 height: 60px;
	 background: #2C0AA6;
	 color: #fff;
	 font-weight: 700;
	 z-index: 25;
	 font-size: 16px;
	 line-height: 60px;
	 padding: 0 15px;
	 text-transform: uppercase;
	 pointer-events: none;
	 border-radius: 0 5px 5px 0;
}
 .file-upload-wrapper:hover:before {
	 background: #0088cc;
}
 .file-upload-wrapper input {
	 opacity: 0;
	 position: absolute;
	 top: 0;
	 right: 0;
	 bottom: 0;
	 left: 0;
	 z-index: 99;
	 height: 40px;
	 margin: 0;
	 padding: 0;
	 display: block;
	 cursor: pointer;
	 width: 100%;
}

label[for="file-input"] {
	display: block;
	margin-bottom: 1em;
	font-size: 1em;
	color: #fff;
  padding-left: 1em;
	opacity: 0.9;
	font-weight: bold;
}
input[type="file"] {
	cursor: pointer !Important;
}
input[type="file"]::-webkit-file-upload-button {
	background: #2C0AA6;
	border: 0;
	padding: .5em 2em;
	cursor: pointer;
	color: #fff;
	border-radius: 0.2em;
}
input[type="file"]::-ms-browse {
	background: #e62163;
	border: 0;
	padding: 1em 2em;
	cursor: pointer;
	color: #fff;
	border-radius: 0.2em;
}
</style>
<body>
    <div class="container">
        <h1>Hello <?= $user['role'] ?>, <?= $user['username'] ?></h1>
    <div class="row">
  <div class="col-sm-4">


 <div class="user-info">
     <div class="info-wrapper">
         <h5 class="user-info-header">
         USERNAME
         </h5>
         <p class="info"><?= $user['username'] ?></p>
         
     </div>
     <div class="info-wrapper">
     <h5 class="user-info-header">
         EMAIL
         </h5>
         <p class="info"> <?= $user['email'] ?></p>
        
     </div>


 </div>

  </div>

</div>

    <div class="form-group">
<button id="SIGNIN"class="btn btn-light" data-toggle="modal" data-target="#exampleModal" href="<?php echo base_url('Profile/changepassword/'. $user['id']);?>" role="button">CHANGE PASSWORD</button>
    </div>

 



    <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">NUMBER OFLESSONS</h3>
      <h1>  <p class="card-text"><?= $lessons ?></p></h1>
        <a href="<?= base_url('Admin/lessonList');?>" class="btn btn-light"> MANAGE LESSONS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      <h3 class="card-title">NUMBER OF STUDENTS</h3>
     <h1>  <p class="card-text"><?= $student ?></p></h1> 
        <a href="<?= base_url('Admin/users');?>" class="btn btn-light">MANAGE STUDENT</a>
      </div>
    </div>
  </div>
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
      <form action="<?= base_url('Admin/updateadminpassword/'.$user['id']);?>">
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