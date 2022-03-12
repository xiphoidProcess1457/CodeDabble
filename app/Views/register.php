

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
  
</style>
<body ng-app='myapp'>
    <div class="container-fluid">
        
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

                    <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Username" id="InputForName" value="<?= set_value('name') ?>">
                      </div>

                    <div class="mb-3">
                    <input type="password" name="password" placeholder="password" class="form-control" id="InputForPassword">
                    </div>

                    <div class="mb-3 ">
                        
                        <input type="password" name="confpassword" placeholder="Confirm Password" class="form-control" id="InputForConfPassword">
                      </div>
                      <div class="mb-3 need-account">
                        ALREADY HAVE AN ACCOUNT?   <a href="/login" class="link-primary signin-link">SIGNIN</a>
                      </div>
                      
                    
                    <button type="submit" class="btn btn-primary registration-button">Register</button>
                  </form>
              
                  
                  <?php if (isset($validation)): ?>
                      <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                      </div>
                    <?php endif; ?>

                  


            </div>
            
          </div>
       
      </div>

</body>
</html>