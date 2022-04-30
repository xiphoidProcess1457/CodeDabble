<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	      <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/es-navbar.css');?>">
</head>
<style>
  a:hover {
  text-decoration: none;
  color:#231773;
  letter-spacing: .0em;
  border: none;
  transition: .2s;
}

.dropdown-wrapper {
width:200px;
position:relative;
margin:50px auto;

}
.dropdown-wrapper::after {
content: '';
position: absolute;
top: 20px;
right: 10px;
border-color: #333 transparent transparent;
border-width: 6px;
border-style: solid;
}
.dropdown-wrapper::before {
content: '';
position: absolute;
top: 20px;
right: 10px;
border-color: #eee transparent transparent;
border-width: 6px;
border-style: solid;
}
.dropdown-wrapper:hover::after {
border-color: #111 transparent transparent;	
}

.dropdown {
  padding:5px;
z-index:999;
  padding-right:13px;
  border-radius: 50px;
background:#B6CAF2;
display: flex;
align-items: center;
justify-content: center

}
.dropdown:hover {
 display:flex;
cursor:pointer;
background:#C4C1D9;
}
.dropdown .name {
font-size:14px;
 font-weight: 600;
color:#3D6AF2;
line-height:26px;
margin-left:10px;
}
.dropdown .name:hover {
color:#0088cc;
}
.dropdown-image {
  float:left;
display:inline;
float:left;
border-radius:25px;
box-shadow:0 0 3px rgba(0, 0, 0, 0.5) inset;
}

/* hide menu */
.dropdown-menu {
background:#c4c1d9;
color:#3D6AF2;
border: none;
}
.dropdown-menu li {
font-size:16px;
text-align: center;
margin:0;
  padding: 10px 4px;

}
.dropdown-menu li a {
font-weight: 600;
}
.dropdown-menu li:hover > a{
color:#0088cc;
letter-spacing: .0em;
border: none;
transition: .2s;
}

.dropdown-menu li:hover{
font-weight: 600;
}

/* hover dropdown show menu */
.dropdown-menu:hover .menu {
display:block;

}




.dropdown .dropdown-menu {
display:block;
z-index:-999;
padding-top: 16px;
border-bottom-left-radius: 25px; 
  border-bottom-right-radius: 25px;
transform: translate(0px, -26px);
width:100%;
-webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  min-width: 100%;
  overflow: hidden;
  opacity: 0;
}



.dropdown:hover .dropdown-menu {
    max-height: 200px;
     opacity: 1;
}


.profile-image{
  border-radius: 100%;
}
.forum-body{
  font-weight: 400;
  font-size: 1em;
}
.post-info{
  padding-left:20px;
  cursor:default;
}

td{
  display: block;
}

.forum-reply{
  padding-top:3em;
  width: 80%;
  color: #231773;
}

.profile{
  padding-right: 10em;
}
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ">
  <a class="navbar-brand" href="<?= base_url('Home/index');?>">
  <img src="<?= base_url('assets/assets/white-logo.svg');?>"  class="d-inline-block align-top logo" alt="">
  </a>
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-item nav-link active" href="<?= base_url('Admin/catalog');?>">CATALOG <span class="sr-only">(current)</span></a>
   
    







    </div>
    
  </div>
  <div class="float-right profile">
    <?php if (session()->get('logged_in')):?>

<div class="dropdown">

  <!--$user_img = !empty(session("uploaded_flleinfo")) ? session("uploaded_flleinfo") : 'empty';-->
<!-- more menu -->

<?php
$user_img = !empty(session("uploaded_flleinfo")) ? session("uploaded_flleinfo") : 'default.jpg';
?>
<img class="dropdown-image" src="<?php echo base_url().'/uploads/user/'.$user_img; ?>" height="30" width="30" class="d-inline-block align-top" alt="">


<!-- more menu -->



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

  </div>
</nav>

</body>

</html>

