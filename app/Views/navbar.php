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
        <a class="nav-link nav-link-ltr" href="<?= base_url('search');?>">SEARCH</a>
      

      <?php if (session()->get('logged_in')):?>

      <div class="dropdown">
      <img class="dropdown-image" src="/uploads/user/<?= (session()->get('uploaded_flleinfo'));?>" height="30" width="30" class="d-inline-block align-top" alt="">
					<a href="<?= base_url('/Profile');?>" class="name"><?= (session()->get('user_name'));?></a>
					
					<!-- more menu -->
					<ul class="dropdown-menu">
						<li><a href="<?= base_url('/Profile');?>">Profile</a></li>
						<li><a href="<?= base_url('/login/logout');?>">Log out</a></li>
					</ul>
				</div>
        <?php else:?>
        <a id="SIGNIN"class="btn btn-signin" href="<?= base_url('/login');?>" role="button">SIGNIN</a>
			<?php endif; ?>

      
</nav>




</body>
<script>
	$(document).ready(function () {
$('.navbar .dropdown').hover(function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
    }, function () {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105)
    });
});
</script>
</html>

