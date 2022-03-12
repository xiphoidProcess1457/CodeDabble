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
   
</style>
<body>
  
    <div class="container-fluid">
        <div class="row mx-auto">
            <div class="col-xl">
                <img class="big-svg" src="<?= base_url('assets/assets/character.svg');?>" alt="">
              </div>

            <div class="col-xl column-overflow d-flex justify-content-center hehe">
              
            <?php if (session()->get('success')): ?>
                      <div class="alert alert-successful" role="alert">
                      <div class="alert alert-danger" role="alert">
                      </div>
                    <?php endif; ?>
                    <form action="/login/auth" method="post">
                    <div id="emailHelp" class="form-text">
                        <h1 class="display-3 registration-header">LOGIN</h1>
                    </div>

                    <div class="login-container">
                    <div class="mb-3">
                      <input type="email" name="email" class="form-control" id="InputEmail1" placeholder="Email" value="<?= set_value('email') ?>">
                      </div>

                    <div class="mb-3">
                  
                      <input type="password" name="password" class="form-control"  placeholder="Password" id="InputPassword1">
                    </div>

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
</html>