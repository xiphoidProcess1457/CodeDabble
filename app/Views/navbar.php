<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?= base_url('assets/js/test1.js');?>"> </script>
	  <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/navbardesign.css');?>">   
</head>
<body>
    <nav class="navbar sticky-top navbar-light">
        <a class="navbar-brand" href="<?= base_url('Home/index');?>">
          <img src="<?= base_url('assets/assets/logo.svg');?>" width="200" height="200" class="d-inline-block align-top" alt="">
        </a>
        <a class="nav-link nav-link-ltr" href="<?= base_url('Home/catalog');?>">CATALOG</a>
        <a class="nav-link nav-link-ltr" href="<?= base_url('/AskQuestion/forum');?>">FORUM</a>
        <a class="nav-link nav-link-ltr" href="<?= base_url('Home/about');?>">ABOUT</a>
        <a class="nav-link nav-link-ltr" href="<?= base_url('/Search');?>">SEARCH</a>
      
      
        <?php if (session()->get('logged_in')):?>

       <div class="dropdown">
       <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="<?= base_url('assets/assets/profile.svg');?>" width="40" height="40" class="d-inline-block align-top" alt="">
        </a>

  <div class="dropdown-menu menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item item" href="<?= base_url('/login/logout');?>">Log Out</a>
  </div>
</div>
			  
			<?php else:?>
        <a id="SIGNIN"class="btn btn-signin" href="<?= base_url('/login');?>" role="button">SIGNIN</a>
			<?php endif; ?>
      
</nav>




</body>

</html>

