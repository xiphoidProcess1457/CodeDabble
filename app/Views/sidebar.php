<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">
    <script type="text/javascript" src="<?= base_url('assets/js/sidebars.js');?>"> </script>
	  <link  rel="stylesheet" type="text/css" href="<?= base_url('assets/css/sidebars.css');?>">    
  </head>
  <body>
 
  
 
  <div class="row">
    
    
        <div class="col-2 p-3 bg-dark position-fixed" id="sticky-sidebar">
            <div class="nav flex-column flex-nowrap vh-100 overflow-auto text-white p-4 ">
            <a href="<?= base_url('Home/index');?>" class="d-flex align-items-center mb-2 mb-md-0 me-md-auto text-white text-decoration-none">
            <img src="<?= base_url('assets/assets/white-logo.svg');?>" width="200" height="200" class="d-inline-block align-top" alt="">
            </a>
            
            <hr>
            
            <ul class="nav nav-pills flex-column mb-auto">


            <li>
              <a href="<?= base_url('Admin/dashboard');?>" class="nav-link text-white sidebar-links">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  DASHBOARD
                </a>
              </li>

            <?php if (session()->get('role') =='moderator' ):?>
       
          
              <li>
              <a href="<?= base_url('Admin/addlesson');?>" class="nav-link text-white sidebar-links">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  ADD LESSON
                </a>
              </li>
              
            
              <li>
                <a href="<?= base_url('Admin/lessonList');?>" class="nav-link text-white sidebar-links">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  MANAGE LESSONS
                </a>
              </li>
              <li>
                <a href="<?= base_url('Admin/users');?>" class="nav-link text-white sidebar-links">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  MANAGE USERS
                </a>
              </li>
              <li>
                <a href="<?= base_url('Admin/logout');?>" class="nav-link text-white sidebar-links">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  SIGNOUT
                </a>
              </li>


            
        <?php else:?>
         
          <li>
                <a href="<?= base_url('Admin/adduser');?>" class="nav-link text-white sidebar-links">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  ADD USER
                </a>
              </li>
              <li>
              <a href="<?= base_url('Admin/addlesson');?>" class="nav-link text-white sidebar-links">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  ADD LESSON
                </a>
              </li>
            
            
              
             
              <li>
                <a href="<?= base_url('Admin/logout');?>" class="nav-link text-white sidebar-links">
                  <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                  SIGNOUT
                </a>
              </li>
		  	<?php endif; ?>







            
              
            </ul>
            
            <hr>
           
         

    
         
        </div>
            </div>
        </div>




<script type="text/javascript" src="<?= base_url('assets/js/sidebars.js');?>"> </script>
  </body>
</html>


