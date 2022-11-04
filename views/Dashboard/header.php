<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <!-- <script src='main.js'></script> -->
<!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
<link href="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- <link rel="stylesheet" href="views/Dashboard/sid.css"> -->
<style>
body {
    font-family: "Lato", sans-serif;
  }
  
  .sidenav {
    height: 100%;
    width: 160px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #212529;
    overflow-x: hidden;
    padding-top: 20px;
  }
  
  .sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: white;
    display: block;
  }
  
  .sidenav a:hover {
    color: #f1f1f1;
  }
  
  .main {
    margin-left: 160px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
  }
 
  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }
  .subli{
    color:darkgrey;
    font-size:16px !important;
  }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">3MG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php route('admin')?>">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php route('admin/users')?>">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php route('admin/products') ?>">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php route('admin/orders') ?>">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php route('admin/categories')?>">Categories</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php route('admin/checks')?>">Checks</a>
        </li>
  
      </ul>
      <form action="./search" method="post" class="d-flex">
        <input class="form-control me-2" name="search" value="" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- JavaScript Bundle with Popper -->
<!-- The sidebar -->

<div class="sidenav">
<a href="<?php route('home')?>"><h1>3MG</h1></a>
  <a href="<?php route('admin/users')?>">Users
    <!-- <ul>
      <li> <a class="subli" href="#services">All</a></li>
      <li> <a class="subli" href="#services">Add</a></li>
    </ul> -->
  </a>
  <a href="<?php route('admin/categories')?>">Category
    <!-- <ul>
      <li> <a class="subli" href="#services">All</a></li>
      <li> <a class="subli" href="#services">Add</a></li>
    </ul> -->
  </a>
  <a href="<?php route('admin/products') ?>">Products
    <!-- <ul>
      <li> <a class="subli" href="#services">All</a></li>
      <li> <a class="subli" href="#services">Add</a></li>
    </ul> -->
  </a>
  <a href="<?php route('admin/orders') ?>">Orders
    <!-- <ul>
      <li> <a class="subli" href="#services">All</a></li>
      <li> <a class="subli" href="#services">Add</a></li>
    </ul> -->
  </a>
  <a href="<?php route('admin/checks')?>">Checks
    <!-- <ul>
      <li> <a class="subli" href="#services">All</a></li>
      <li> <a class="subli" href="#services">Add</a></li>
    </ul> -->
  </a>
</div>
 </div>
<div class="main" >
  <div class='container my-5'>