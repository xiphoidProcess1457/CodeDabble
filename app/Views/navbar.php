<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
  *{
    font-family: "metropolis";
}  
.navbar{
    padding-right: 18%;
    padding-left: 18%; 
}
.nav-link {
padding: 500px;  
font-weight: bold;
font-size: 14px;
text-transform: uppercase;
text-decoration: none;
color: #231773;
padding: 12px 0px;
margin: 0px 20px;
display: inline-block;
position: relative;
opacity: 0.75;
}
.nav-link:hover {
opacity: 1;
transition: 300ms;
animation: ease-in-out;
letter-spacing: .5px;

}
.nav-link::before {
transition: 300ms;
animation: ease-in-out;
height: 3px;
content: "";
position: absolute;
background-color: #231773;
}
.nav-link-ltr::before {
width: 0%;
bottom: 10px;
}
.nav-link-ltr:hover::before {
width: 0%;
}
#SIGNIN {
  color: #231773;
  background-color: #ACAff2;
  font-weight: bold;
  border-radius: 50px;
}
#SIGNIN:hover{
    color: #EBEDF2;
    background-color: #231773;
}
.navbar-scroll {
background: #ffffff;
padding-right: 5%;
padding-left: 5%; 
padding-top: 0;
padding-bottom: 0;
top: -2.3em;
height: 18vh;
box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.4);
transition-duration: 0.6s;
transition: 300ms;
animation: ease-in-out;
}
.nav-dropdown-scroll {
  background: #e7eaea;
  box-shadow: 0px 10px 9px rgba(0, 0, 0, 0.4);
}

.toggle{
  background-color: transparent;
  border: none;
}

.toggle:hover{
  background-color: transparent;
  border: none;
}

a {
  text-decoration:none;
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
transform: translate(0px, -20px);
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


.responsive-bar{
  display: none;
}
.navigation{
  width: 100%;
  z-index: 1;
  position: fixed;
  top: 0;
  left: 0;
  height: 150px;
  padding: 10px 100px;
  padding-left: 15%;
  padding-right: 15%;
  padding-top: 2%;
  box-sizing: border-box;
  transition: .5s;
}
.navigation.black{
  background: #ffff;
  height: 105px;
  padding: 10px 50px;
}
.navigation .logo{
  float: left;
}
.navigation .logo img{
  height: 80px;
  transition: .5s;
}
.navigation.black .logo img{
  height: 60px;
}
.navigation > ul{
  width: 80%;
  margin: 0 auto;
  padding: 0;
  float: right;
  padding-top: 2%;
}
.navigation > ul > li{
  list-style: none;
  display: inline-block;
}
.navigation > ul > li > a:hover{
}
.navigation > ul > li > a{
  color: #231773;
  text-decoration: none;
  text-transform: uppercase; /*for capitalisation of letters */
  padding: 5px 20px;
  transition: .5s;  
}
.navigation.black > ul > li > a{
  color: #231773;
}


.navigation.black > ul{
 padding-top: 1%;

}


.dropdown{
float: right;
}

.navigation.black{
  background: #ffff;
  height: 105px;
  padding: 10px 50px;
}


@media(max-width:1300px){



  .navigation.black{
  height: 140px;
}

}

@media(max-width:768px){

  
.wrapper {
  width: 70%;
  margin:auto;
  margin-bottom:3%;
}
  .responsive-bar{
      display: block;
      width: 100%;
      height: 60px;
      background: #ffff;
      position: fixed;
      top: 0;
      left: 0;
      padding: 5px 20px;
      box-sizing: border-box;
      z-index: 999;
  }

   
  .navigation ul li .nav-link-ltr:hover::before {
  width: 0%;
}

  .dropdown{
margin-top: 5px;
float: none;
margin: auto;
}
  .responsive-bar .logo img{
      float: left;
      height: 50px;  
  }
  .responsive-bar .menu h4{
      float: right;
      color: #231773;
      margin: 0;
      padding: 0;
      line-height: 50px;
      cursor: pointer;
      text-transform: uppercase;
  }
  .navigation{
      padding: 0;
  }
  .navigation,
  .navigation.black{
  background: #ffff;
  height: 60px;
  padding: 0;
  }
  .navigation .logo{
      display: none;
  }
  .navigation ul{
      position: absolute;
      width: 100%;
      top: 60px;
      left: 0;
      background: #ffff;
      float: none;
      display: none;
  }
  .navigation ul.active{
      display: block;
  }
  .navigation ul li{
      width: 100%;
  }
  .navigation ul li a{
      display: block;
      padding: 0;
      width: 100%;
      text-align: center;
      line-height: 40px !important;
      color: #231773;
      
  }



  .navigation > ul{
      width: 100%;
      display: none;
  }
  .navigation > ul > li{
      display: block;
      text-align: center;
  }
  .active{
      display: block;
      
  }





  * {
margin: 0;
padding: 0; 
}

/* Icon 1 */

#nav-icon1{
width: 40px;
height: 25px;
position: relative;
margin: 20px;
-webkit-transform: rotate(0deg);
-moz-transform: rotate(0deg);
-o-transform: rotate(0deg);
transform: rotate(0deg);
-webkit-transition: .5s ease-in-out;
-moz-transition: .5s ease-in-out;
-o-transition: .5s ease-in-out;
transition: .5s ease-in-out;
cursor: pointer;
}

#nav-icon1 span, #nav-icon3 span, #nav-icon4 span {
display: block;
position: absolute;
height: 3px;
width: 100%;
background: #231773;
border-radius: 20px;
opacity: 1;
left: 0;
-webkit-transform: rotate(0deg);
-moz-transform: rotate(0deg);
-o-transform: rotate(0deg);
transform: rotate(0deg);
-webkit-transition: .25s ease-in-out;
-moz-transition: .25s ease-in-out;
-o-transition: .25s ease-in-out;
transition: .25s ease-in-out;
}

#nav-icon1 span:nth-child(1) {
top: 0px;
}

#nav-icon1 span:nth-child(2) {
top: 10px;
}

#nav-icon1 span:nth-child(3) {
top: 20px;
}

#nav-icon1.open span:nth-child(1) {
top: 18px;
-webkit-transform: rotate(135deg);
-moz-transform: rotate(135deg);
-o-transform: rotate(135deg);
transform: rotate(135deg);
}

#nav-icon1.open span:nth-child(2) {
opacity: 0;
left: -60px;
}

#nav-icon1.open span:nth-child(3) {
top: 18px;
-webkit-transform: rotate(-135deg);
-moz-transform: rotate(-135deg);
-o-transform: rotate(-135deg);
transform: rotate(-135deg);
}







}

.searchBar {
  width: 100%;
  display: flex;
  flex-direction: row;
  align-items: center;
}

#searchQueryInput {
  width: 100%;
  height: 2.8rem;
  background: #f5f5f5;
  outline: none;
  border: none;
  border-radius: 1.625rem;
  padding: 0 3.5rem 0 1.5rem;
  font-size: 1rem;
}

#searchQuerySubmit {
  width: 3.5rem;
  height: 2.8rem;
  margin-left: -3.5rem;
  background: none;
  border: none;
  outline: none;
}

#searchQuerySubmit:hover {
  cursor: pointer;
}



</style>
<body>





<div class="responsive-bar">
        <div class="logo">
        <a  href="<?= base_url('Home/index');?>">
          <img src="<?= base_url('assets/assets/logo.svg');?>" width="200" height="200" class="d-inline-block align-top" alt="">
        </a>
            </div>
            <div class="menu">
            <h4><div id="nav-icon1">
  <span></span>
  <span></span>
  <span></span>
</div></h4>
            </div>
        </div>
		<nav class="navigation">
            <div class="logo">
            <a  href="<?= base_url('Home/index');?>">
          <img http-equiv="Content-Type" content="image/svg+xml"; src="<?= base_url('assets/assets/logo.svg');?>" width="200" height="200" class="d-inline-block align-top" alt="">
        </a>
            </div>
         <ul>
            <li>
            <?php if (session()->get('logged_in')):?>
        <a class="nav-link nav-link-ltr" href="<?= base_url('Admin/catalog');?>">LESSONS</a>
        <?php else:?>
          <a class="nav-link nav-link-ltr" href="<?= base_url('/login');?>">LESSONS</a>
		  	<?php endif; ?>
            </li>
             <li>
             <a class="nav-link nav-link-ltr" href="<?= base_url('/AskQuestion/forum');?>">FORUM</a>
             </li>
             <li>
             <a class="nav-link nav-link-ltr" href="<?= base_url('Home/about');?>">ABOUT</a>
             </li>

             <li>
             <a class="nav-link nav-link-ltr" href="<?= base_url('search');?>">SEARCH</a>
             </li>


             <!-- <li>
             <div class="wrapper">
  <div class="searchBar">
    <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="" />
    <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
      <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
      </svg>
    </button>
  </div>
 </li> -->


             

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
  <a id="SIGNIN"class="btn btn-signin dropdown" href="<?= base_url('/login');?>" role="button">SIGNIN</a>
<?php endif; ?>




            </ul>
 </nav>




</body>
</script>
        <script type="text/javascript">
    $(window).on('scroll',function(){
            if($(window).scrollTop()){
                $('nav').addClass('black');
            }
            else{
                $('nav').removeClass('black');
            }
        })
  /*menu button onclick function*/         $(document).ready(function(){
                $('.menu h4').click(function(){
                    $("nav ul").toggleClass("active")
            })
            })
        </script>
<script>
  $(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
	});
});
</script>
</html>
