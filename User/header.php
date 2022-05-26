<?php
  $con = mysqli_connect("localhost","root","","Orphanage") or die("connection unsuccessful");  
  session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>save child</title>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.green.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <!-- <script src="Carousel.js"></script> -->

    <!-- font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap"
      rel="stylesheet"
    />
     <link rel="stylesheet" href="odometer.css">
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/style.css" />
   
      
    <style>
        header{
            position: fixed;
            width: 100%;
            background-color: #000000;
            z-index: 1000;
        }
        /*header{
            position: sticky;
            width: 100%;
            background-color: #000000;
            z-index: 1000;
        }*/
        .link{
          color: unset;
          text-decoration: none;
        }
        .link:hover{
          color: unset;
          text-decoration: none !important;
        }
        #owl-demo .item{
          margin: 3px;
        }
        #owl-demo .item img{
          display: block;
          width: 100%;
          height: auto;
        }
      </style>
  </head>
  <body>
      
    <!-- top-section start -->
      
     <div class="top-section">
      
      <header class="section">
        <div class="container">
          <div class="top-header">
            <div class="logo">
              <h1>
                <span class="gradient-icon"
                  ><i class="fa-solid fa-house-chimney"></i>
                </span>
                Happy Orphan Life
              </h1>
            </div>
            <button class="menu-button">
              <i class="fa fa-bars"></i>
            </button>
            <nav>
              <ul>
                  <a class="link" href="index.php"> <li class="list">Home</li> </a>
                  <a class="link" href="About.php"> <li class="list">About Page</li> </a>
                  <a class="link" href="Orphanlist.php"> <li class="list">Orphanage</li> </a>
                  <a class="link" href="gallery.php"> <li class="list">Gallery</li> </a>
                  <a class="link" href="Login.php"> <li><i class="fa-solid fa-user"></i></li> </a>
                  <a class="link" href="logout.php"> <li><i class="fa-solid fa-right-from-bracket"></i></li> </a>
              </ul>
            </nav>
          </div>
        </div>
      </header>