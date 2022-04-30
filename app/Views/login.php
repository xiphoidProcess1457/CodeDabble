<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>LOGIN</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/login.css');?>">
</head>
<style>
  .alert{
    list-style: none;
    background-color: transparent;
    border:
  }
</style>
<body>
<?php $validation = \Config\Services::validation(); ?>
    <div class="container-fluid">
      
        <div class="row mx-auto">
            <div class="col-xl">
                <img class="big-svg" src="<?= base_url('assets/assets/character.svg');?>" alt="">
              </div>

            <div class="col-xl column-overflow d-flex justify-content-center hehe">
              
            
                  

                    <form action="/login/auth" method="post">
                    <div id="emailHelp" class="form-text">
                        <h1 class="display-3 registration-header">LOGIN</h1>
                    </div>

                    <div class="login-container">
                    <div class="mb-3">
                      <input type="email" name="email" class="form-control" id="InputEmail1" placeholder="Email" value="email@abc.com">
                              
                 
                    </div>
                    <figure>
                    <?php if($validation->getError('email')) {?>
                    <div class='d-flex justify-content-center align-items-center'>
                      <?= $error = $validation->getError('email'); ?>
                    </div>
                <?php }?>
                    </figure>
                      <div class="input-group mb-3">
                    <input type="password" name="password" placeholder="password" class="form-control password" id="InputForPassword">
                    <div class="input-group-append">
                    <span class="input-group-text password-span">
                    <i class="fa fa-eye-slash" aria-hidden="true" onclick="myFunction()"></i>
                      </span>
                      
                    </div>
                   
                  
                  </div>
                  <figure>
                  <?php if($validation->getError('password')) {?>
            <div class='d-flex justify-content-center align-items-center'>
              <?= $error = $validation->getError('password'); ?>
            </div>
        <?php }?>
        </figure>

           


                      <div class="mb-3 need-account">
                      DONT HAVE AN ACCOUNT?   <a href="/register" class="link-primary signin-link">REGISTER</a>
                      </div>
                      
                      <button type="submit" class="btn btn-primary registration-button">Login</button>

                    </div>

                    
                  </form>
              
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