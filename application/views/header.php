<!DOCTYPE html>
<html>
<head>
    <title>Stackoverflow Lite</title>
    <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
    <link rel="icon"  href="<?php echo base_url('assets/images/icon.png') ?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/home.css");?>">
</head>

<body>
<header id="header" class="horizontal-header">
<!-- start header nav-->                   
    <ul>
          <li>
               <p><a href="index.html" ><img src="<?php echo base_url('assets/images/logo.webp') ?>" alt="Stackoverflow" class="image-logo" ></a> </p>
          </li>
          <li>
               <input type="text" name="Search" placeholder="Explore Questions" class="search"/>
          </li>
          <li>
               <button class="login-btn">Login</button>
          </li>
          <li>
               <button class="login-btn">SignUp</button>
          </li>
    </ul>
 </header>