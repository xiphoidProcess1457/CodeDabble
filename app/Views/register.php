

<!DOCTYPE html>
<html lang="en" ng-app="register">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>REGISTER</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/register.css');?>">
    
 


</head>
<style>
  .validate{
    padding-bottom: 5px;
  }

  *:focus {
    outline: 0 !important;
}
</style>
<body>
    <div class="container-fluid">
    <?php $validation = \Config\Services::validation(); ?>
        <div class="row mx-auto">
            <div class="col-xl">
                <img class="big-svg" src="<?= base_url('assets/assets/character.svg');?>" alt="">
              </div>

            <div class="col-xl column-overflow d-flex justify-content-center hehe" ng-controller='userCtrl'>
              
            <form action="/register/save" method="post">
                    <div id="emailHelp" class="form-text">
                        <h1 class="display-3 registration-header">REGISTER</h1>
                    </div>
                    <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" id="InputForEmail" value="<?= set_value('email') ?>">
                  
                    </div>

                    <?php if($validation->getError('email')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('email'); ?>
                    </div>
                <?php }?>


                    <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Username" id="InputForName" value="<?= set_value('name') ?>">
                   
                  </div>
                  <?php if($validation->getError('name')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('name'); ?>
                    </div>
                <?php }?>  
                    <div class="input-group mb-3">
                    <input type="password" name="password" placeholder="password" class="form-control password" id="InputForPassword">
                    <div class="input-group-append">
                    <span class="input-group-text password-span">
                    <i class="fa fa-eye-slash" aria-hidden="true" onclick="myFunction()"></i>
                      </span>
                    </div>
                    
                  </div>

                  <?php if($validation->getError('password')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('password'); ?>
                    </div>
                <?php }?>   
                

                    <div class="input-group mb-3">
                        
                        <input type="password" name="confpassword" placeholder="Confirm Password" class="form-control password" id="InputForConfPassword">
                        <div class="input-group-append">
                    <span class="input-group-text password-span">
                    <i class="fa fa-eye-slash" aria-hidden="true" onclick="myFunction2()"></i>
                      </span>
                    </div>
                      </div>

                      <?php if($validation->getError('password')) {?>
                    <div class='d-flex justify-content-center align-items-center validate'>
                      <?= $error = $validation->getError('password'); ?>
                    </div>
                <?php }?>   


                      <div class="mb-3 need-account">
                        ALREADY HAVE AN ACCOUNT?   <a href="/login" class="link-primary signin-link">SIGNIN</a>
                      </div>
                      
                    
                    <button type="submit" class="btn btn-primary registration-button">Register</button>
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

<script>
function myFunction2() {
  var x = document.getElementById("InputForConfPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</html>