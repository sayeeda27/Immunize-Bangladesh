
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EPI Reminder</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>
<body>
<header >
      <div id="home">
       
        <nav class="navbar navbar-expand-md navbar-dark bg-dark  fixed-top ">
           
             <a class="logo" href="<?php echo site_url('Pages/home') ?>"><h3>Immunize <span class="logspan">Bangladesh</span></h3></a>     
           <button class="navbar-toggler" type="button" data-toggle="collapse"          data-target="#navbarNav" >
                 <span class="navbar-toggler-icon"></span>
            </button>
      
      <div class="collapse navbar-collapse text-center" id="navbarNav">
        
        <ul class="navbar-nav ml-auto">
          
            <li class="nav-item"><a href="<?php echo site_url('Pages/home') ?>" class="nav-link" >Home </a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Pages/feature') ?>">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Pages/news') ?>">News</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Pages/service') ?>">Services</a></li>
            <li class="nav-item">
              <div class="dropdown dropdown-item-text ">
                <a class="nav-link" class=" drop-btn drop_icon" href="#"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" 
                aria-expanded="false">
                <i class="fas fa-user-circle"></i>
                </a>
                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                  <!-- <a class="nav-link" class="dropdown-item" href="<?php echo site_url('Admin_login/index') ?>">Admin Login</a> -->
                  <a class="nav-link" class="dropdown-item" href="<?php echo site_url('Login/index') ?>">User Login</a>
                </div>
              </div>
            </li>
        </ul>
      </div>
    
    </nav>
     </div>
    </header>