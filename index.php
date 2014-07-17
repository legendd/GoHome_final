<?php

session_start();
$id = $_SESSION['username'];

?>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Go Home</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/logo.ico">
    <!--
    <link rel="stylesheet" type="text/css" href="main.css" />
  -->
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.localscroll-1.2.7-min.js"></script>
<script type="text/javascript" src="scripts/jquery.scrollTo-1.4.2-min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#nav').localScroll(800);
  
  //.parallax(xPosition, speedFactor, outerHeight) options:
  //xPosition - Horizontal position of the element
  //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
  //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
  $('#intro').parallax("50%", 0.1);
  $('#second').parallax("50%", 0.1);
  $('.bg').parallax("50%", 0.4);
  $('#third').parallax("50%", 0.3);

})
</script>



        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>-->
<!--    <script src="js/jquery.js"></script>
    <script src="js/animations.js"></script>
    <script src="http://jarallax.com/download/jarallax-min-0.2.js" type="text/javascript"></script>
   --> 
   <div class="selection">
   <style type="text/css">

    <!-- A{text-decoration:none} --> 
    a:link { color: black }
    a:visited { color: black }
    a:active { color: black }
    a:hover { color: black }
    </style>
    </div>
  </head>
  <body>
    <div class="content">
<div id="menu">
  <ul>
    <li> <a id="home" href="index.php">首頁</a>
    </li>
    <li> <a id="adoption" href="adoption/">送領養專區</a>
      <ul>
        <li><a id="adopt" href="adoption/">領養</a></li>
        <li><a id="re-home" href="re-home/">送養</a></li>
      </ul>
    </li>
    <li> <a id="share" href="wall/">動態牆</a>
    </li>
    <li> <a id="discussion">討論區</a>
    </li>
    <li> <a id="aboutus" href="aboutus/">關於我們</a></li>
    <li>
          <!--search-->
      <form id='search' action='http://www.google.com/search' target="_blank" method='get'>
      <input type="hidden" id="sitesearch" placeholder="search" value="" />
      <input id="s" id="q" type="text" value="" />
      </form>
    </li>
      <?php
      if($_SESSION['username'] != NULL) {  
        echo "<li><a id='id' href='profile/'>".$id."</a>
              <ul>
              <li><a id='logout' href='login/logout.php'>登出</a></li>
              <li><a id='profile' href='page/'>個人頁面</a></li>
              </ul></li>
        ";}
      else{
      echo 
      "<li><a id='signin'>登入</a>
        <ul>
          <li>
            <form id='qlogin' action='login/logincheck.php' method='post'>帳號:<input type='text' name='account' />
            <br />密碼:<input type='password' name='password' />
            <br /><input type='submit' name='submit' value='login' />
            <a href='login/register.php'>register</a>
            </form>
          </li>
        </ul></li>";}
      ?> 
  </ul>
    
    </div>
    <div class="BG">
   <ul id="nav">
    <li><a href="#intro" title="Next Section"><img src="images/dot.png" alt="Link" /></a></li>
      <li><a href="#second" title="Next Section"><img src="images/dot.png" alt="Link" /></a></li>
      <li><a href="#third" title="Next Section"><img src="images/dot.png" alt="Link" /></a></li>
      <li><a href="#fifth" title="Next Section"><img src="images/dot.png" alt="Link" /></a></li>
  </ul>
  
  <div id="intro">
    <div class="story">
        <div class="float-left">
      <h2>分享 你與毛小孩的故事</h2>
          <p>「透過文字和照片，分享你和毛小孩愛的家庭日記」</p>
          </div>
      </div> <!--.story-->
  </div> <!--#intro-->
  
  <div id="second">
    <div class="story"><div class="bg"></div>
        <div class="float-right">
              <h2 id="head2">原來 你這麼可愛</h2>
              <p id="p2">「提供毛小孩最真實的一舉一動，幫你尋找屬於你的牠」</p>
          </div>
      </div> <!--.story-->
      
  </div> <!--#second-->
  
  <div id="third">
    <div class="story">
        <div class="float-left">
            <h2>等待 一個愛我的家</h2>
              <p>「因為毛小孩，你開始擁有愛、分享愛」</p>
          </div>
      </div> <!--.story-->
  </div> <!--#third-->
  
  <div id="fifth">
    <div class="story">
        <div class="float-left">
            <h2 id="head4">他和牠和她的相遇</h2>
              <p id="p4">「因為毛小孩，讓你們從陌生人成為朋友」</p>
          </div>
      </div> <!--.story-->
      </div> <!--.story-->
  </div> <!--#fifth-->
  </div>
  </body>
</html>