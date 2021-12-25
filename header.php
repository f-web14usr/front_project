<?php
session_start();


?>
<!doctype html>
<html lang="fa">
    <head>
        <title>  نوین</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <link  rel="stylesheet"   href="https://unpkg.com/swiper@7/swiper-bundle.min.css" type="text/css"/>
    </head>
    <body class="grid-layout">
    
    <header> 
      <h1>فروشگاه لوازم خانگی نوین</h1>
         <nav>
         <a href="register-view.php"id="registerlink"class="btn btn-filled primary">ثبت نام</a>
   <a href="loginControler.php"id="loginlink"class="btn btn-outlined-button"> ورود </a>
     <ol id="mainNav">
   
   <li><a href="home-controler.php"class="">خانه </a></li>
   <li><a href="productList-controler.php"class=""> محصولات</a></li>
  
   <li><a href="#"class="">درباره ما </a></li>
  
   <li><a href="contact-view.php"class="">تماس باها</a></li>
  
</ol>
     </nav>

     </header>
    <?php
     
  
      include 'user_panel.php';
    
    ?> 
    
    <section>
  