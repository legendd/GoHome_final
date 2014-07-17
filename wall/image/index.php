<?php

session_start();
$id = $_SESSION['username'];

?>

<html>
  <head>
    <title>Go Home</title>
    <meta charset='utf-8' />
    <link rel="shortcut icon" href="../images/logo.ico">
    <link rel="stylesheet" type="text/css" href="../main.css" />
    <link rel="stylesheet" type="text/css" href="wall.css" />
    
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>-->
    <script src="../js/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <div class="selection">
       <style type="text/css">
    <!-- A{text-decoration:none} --> 
    a:link { color: black }
    a:visited { color: black }
    a:active { color: black }
    a:hover { color: black }
    </style>
  </div>

      <!--[fancybox] Add jQuery library -->
  <script type="text/javascript" src="fancybox/lib/jquery-1.10.1.min.js"></script>

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />

  <!-- Add Button helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="../source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
  <script type="text/javascript" src="../source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

  <!-- Add Media helper (this is optional) -->
  <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();

      /*
       *  Different effects
       */

      // Change title type, overlay closing speed
      $(".fancybox-effects-a").fancybox({
        helpers: {
          title : {
            type : 'outside'
          },
          overlay : {
            speedOut : 0
          }
        }
      });

      // Disable opening and closing animations, change title type
      $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        helpers : {
          title : {
            type : 'over'
          }
        }
      });

      // Set custom style, close if clicked, change title type and overlay color
      $(".fancybox-effects-c").fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
          title : {
            type : 'inside'
          },
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        }
      });

      // Remove padding, set opening and closing animations, close if clicked and disable overlay
      $(".fancybox-effects-d").fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,

        helpers : {
          overlay : null
        }
      });

      /*
       *  Button helper. Disable animations, hide close button, change title type and content
       */

      $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,

        helpers : {
          title : {
            type : 'inside'
          },
          buttons : {}
        },

        afterLoad : function() {
          this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
      });


      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

      $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 50,
            height : 50
          }
        }
      });

      /*
       *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
      */
      $('.fancybox-media')
        .attr('rel', 'media-gallery')
        .fancybox({
          openEffect : 'none',
          closeEffect : 'none',
          prevEffect : 'none',
          nextEffect : 'none',

          arrows : false,
          helpers : {
            media : {},
            buttons : {}
          }
        });
    });
  </script>
 <script language="JavaScript" type="text/JavaScript">

  
    function UploadFile1()
  {

  	if(form1.small_photo.value!="")
{
alert('圖片上傳中...');
form1.submit();
}
  }
  
  </script>
  </head>
  <body>
  
<div id="menu">
  <ul>
    <li> <a id="home" href="../index.php">首頁</a>
    </li>
    <li> <a id="adoption">送領養專區</a>
      <ul>
        <li><a id="adopt" href="../adoption/">領養</a></li>
        <li><a id="re-home" href="../re-home/">送養</a></li>
      </ul>
    </li>
    <li> <a id="share" href="../wall">動態牆</a>
    </li>
    <li> <a id="discussion" >討論區</a>
      <ul>
        <li><a id="process">送領養程序</a></li>
        <li><a id="health">狗狗健康</a></li>
        <li><a id="train">狗狗訓練</a></li>
        <li><a id="FAQ">常見問題</a></li>
      </ul>
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
        echo "<li><a id='id' href='../profile/'>".$id."</a>
              <ul>
              <li><a id='logout' href='../login/logout.php'>登出</a></li>
              <li><a id='profile' href='../profile'>個人頁面</a></li>
              </ul></li>
        ";}
      else{
      echo 
      "<li><a id='signin'>登入</a>
        <ul>
          <li>
            <form id='qlogin' action='../login/logincheck.php' method='post'>帳號:<input type='text' name='account' />
            <br />密碼:<input type='password' name='password' />
            <br /><input type='submit' name='submit' value='login' />
            <a href='../login/register.php'>register</a>
            </form>
          </li>
        </ul></li>";}
      ?>
  </ul>
</div>
<div id="switch">
  <div id="latest">最新消息</div>
  <div id="hottest">熱門消息</div>  
</div>

<!--最新消息頁面-->
<div class="latestpage">
<div class="container">
  <div class='margin'></div>
    <ul class='timeline'>
      <li class='po'>
      
      <!--最新po文-->
       <form name="form1" action="" method="post" enctype="multipart/form-data">
          <?php
                header("Content-Type:text/html; charset=utf-8");
                mysqli_query("SET NAMES 'utf8'");
                mysqli_query("SET CHARACTER_SET_CLIENT='utf8'");
                mysqli_query("SET CHARACTER_SET_RESULTS='utf8'");
                mysqli_query("SET COLLATION_CONNECTION='utf8_general_ci'");
                include("connect.php");
                $ds          = DIRECTORY_SEPARATOR;  //1
                $storeFolder = 'image';   //2
                $small_photo=  $_POST['small_photo'];
                $po_text= $_POST['po_text'];
                
                if (!empty($_FILES)) {
                                        
                    $tempFile = $_FILES['small_photo']['tmp_name'];          //3             
                    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
                    $targetFile =  $targetPath. $_FILES['small_photo']['name'];  //5
                    move_uploaded_file($tempFile,$targetFile); //6
                    $photo_name = $_FILES['small_photo']['name'];
                    $time=date("Y-m-d H:i:s");
                    $visible = $_POST['invisible'];
                    
                    //如果有按送出鍵
                    if($_REQUEST['po_btn']){
                        echo "<a class='btn_addPic' href='javascript:void(0);'>";
                        //po文寫入資料庫
                        
                        if($po_text == ""){
                            echo "<script>alert('po文要完整哦～'); history.go(-1);</script>";
                        }
                        else{
                            $insert = "INSERT INTO 2_post (time,userid,pic,content) VALUES ('$time','$id','http://140.116.72.102/~yuting/ex11/wall/image/$visible','$_POST[po_text]')";
                            $res = mysqli_query($connect,$insert) or die('oh no!');
                        }
                        echo "<script language='JavaScript' type='text/JavaScript'>";
                        echo"alert('上傳成功');";
                        echo"</script>";
                    }
                    //沒有按送出（上傳圖片）
                    else{
                        echo "<a class='btn_addPic' href='javascript:void(0);' style='background: url(image/$photo_name) no-repeat;";
                        echo "background-size: contain;'>";
                    }
                    
                    echo "<input name='small_photo' id='small_photo' onChange='UploadFile1();' type='file' tabindex='3' value='yes' size='3' /></a>";
                    echo "<textarea id='po_text' name='po_text' placeholder='你在想什麼?'></textarea>";
                    echo " <input name='invisible' style='visibility:hidden' value='$photo_name' />";
                    echo "<input type='submit' name='po_btn' id='po_btn' value='送出' ></input>";
                }
                else{
                    echo "<a class='btn_addPic' href='javascript:void(0);'>";
                    echo "<input name='small_photo' id='small_photo' onChange='UploadFile1();' type='file' tabindex='3' value='yes' size='3' /></a>";
                    //po文附照片提醒
                    if($_REQUEST['po_btn']){
                        echo"<textarea id='po_text' name='po_text' placeholder='記得上傳照片哦～你在想什麼？'></textarea>"; 
                    }
                    else{
                        echo"<textarea id='po_text' name='po_text' placeholder='你在想什麼?'></textarea>";
                    }
                    echo " <input name='invisible' style='visibility:hidden' value='$photo_name' />";
                    echo "<input type='submit' id='po_btn' value='送出' ></input>";
                }
                
                ?>

          
      <!--最新po文結束-->
        </form>
      </li>
<!--以下是post出資料庫中的post + 可能不會用的search功能-->
        <?php

header("Content-Type:text/html; charset=utf-8");
mysqli_query("SET NAMES 'utf8'");
mysqli_query("SET CHARACTER_SET_CLIENT='utf8'");
mysqli_query("SET CHARACTER_SET_RESULTS='utf8'");
mysqli_query("SET COLLATION_CONNECTION='utf8_general_ci'");
include("connect.php");

$sql = "select * from 2_post ORDER BY time DESC";
$result = mysqli_query($connect,$sql) or die('MySQL query error');

$num = mysqli_num_rows($result);  

if($_REQUEST['but'])
{
$date=  $_REQUEST['time'];
$status=  $_REQUEST['content'];
$post_id= $_REQUEST['post_id'];
$test = 0;
  if($num)
  {
        for ($i=$num;$i>0;$i--) 
        {
            $nb = mysqli_fetch_array($result);
            if(($date == $nb[time] || $date == 'null') && ($status == $nb[content] || $status == 'null') && ($post_id == $nb[post_id] || $post_id == 'null'))
            {
                echo "<li><div class='date'>$nb[time]</div>";
                echo "<div class='status'>$nb[content]</div>";
                echo "<a id='$nb[post_id]' class='fancybox fancybox.iframe' href='fancybox/iframe.php?id=$nb[post_id]'><img class='pic' src='$nb[pic]'/></a>";
            }
            else
            {
                $test++;
            }
        }
        if($test == $num)
        {
            echo"PLEASE TRY AGAIN!!";
        }
  }
  else
  {
    echo "not found !!!!";
  }
   //search-end
}
else
{

$id = 1;


if($num)
{
    for ($i=0;$i<$num;$i++) 
    {
        $nb = mysqli_fetch_array($result);
                echo "<li><div class='date'>$nb[time]</div>";
                echo "<div class='status'>$nb[content]</div>";
                echo "<a class='fancybox fancybox.iframe' href='fancybox/iframe.php?id=$nb[post_id]'><img class='pic' src='$nb[pic]'/></a>";
    }
}
else
{
  echo "not found !!!!";
}
}
    ?>

    </ul>
  </div>
</div>

<div class="hottestpage">

<div class="container">
  <div class='margin'></div>
    <ul class='timeline'>
      <li>
        <!--熱門po文-->
       <form name="form1" action="" method="post" enctype="multipart/form-data">
          <?php
                header("Content-Type:text/html; charset=utf-8");
                mysqli_query("SET NAMES 'utf8'");
                mysqli_query("SET CHARACTER_SET_CLIENT='utf8'");
                mysqli_query("SET CHARACTER_SET_RESULTS='utf8'");
                mysqli_query("SET COLLATION_CONNECTION='utf8_general_ci'");
                include("connect.php");
                $ds          = DIRECTORY_SEPARATOR;  //1
                $storeFolder = 'image';   //2
                $small_photo=  $_POST['small_photo'];
                $po_text= $_POST['po_text'];
                
                if (!empty($_FILES)) {
                                        
                    $tempFile = $_FILES['small_photo']['tmp_name'];          //3             
                    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
                    $targetFile =  $targetPath. $_FILES['small_photo']['name'];  //5
                    move_uploaded_file($tempFile,$targetFile); //6
                    $photo_name = $_FILES['small_photo']['name'];
                    $time=date("Y-m-d H:i:s");
                    $visible = $_POST['invisible'];
                    
                    //如果有按送出鍵
                    if($_REQUEST['po_btn']){
                        echo "<a class='btn_addPic' href='javascript:void(0);'>";
                        //po文寫入資料庫
                        
                        if($po_text == ""){
                            echo "<script>alert('po文要完整哦～'); history.go(-1);</script>";
                        }
                        else{
                            $insert = "INSERT INTO 2_post (time,userid,pic,content) VALUES ('$time','$id','http://140.116.72.102/~yuting/ex11/wall/image/$visible','$_POST[po_text]')";
                            $res = mysqli_query($connect,$insert) or die('oh no!');
                        }
                        echo "<script language='JavaScript' type='text/JavaScript'>";
                        echo"alert('上傳成功');";
                        echo"</script>";
                    }
                    //沒有按送出（上傳圖片）
                    else{
                        echo "<a class='btn_addPic' href='javascript:void(0);' style='background: url(image/$photo_name) no-repeat;";
                        echo "background-size: contain;'>";
                    }
                    
                    echo "<input name='small_photo' id='small_photo' onChange='UploadFile1();' type='file' tabindex='3' value='yes' size='3' /></a>";
                    echo "<textarea id='po_text' name='po_text' placeholder='你在想什麼?'></textarea>";
                    echo " <input name='invisible' style='visibility:hidden' value='$photo_name' />";
                    echo "<input type='submit' name='po_btn' id='po_btn' value='送出' ></input>";
                }
                else{
                    echo "<a class='btn_addPic' href='javascript:void(0);'>";
                    echo "<input name='small_photo' id='small_photo' onChange='UploadFile1();' type='file' tabindex='3' value='yes' size='3' /></a>";
                    //po文附照片提醒
                    if($_REQUEST['po_btn']){
                        echo"<textarea id='po_text' name='po_text' placeholder='記得上傳照片哦～你在想什麼？'></textarea>"; 
                    }
                    else{
                        echo"<textarea id='po_text' name='po_text' placeholder='你在想什麼?'></textarea>";
                    }
                    echo " <input name='invisible' style='visibility:hidden' value='$photo_name' />";
                    echo "<input type='submit' id='po_btn' value='送出' ></input>";
                }
                
                ?>

          
      <!--熱門po文結束-->
        </form>
      </li>
<!--以下是post出資料庫中的post + 可能不會用的search功能-->
        <?php

header("Content-Type:text/html; charset=utf-8");
mysqli_query("SET NAMES 'utf8'");
mysqli_query("SET CHARACTER_SET_CLIENT='utf8'");
mysqli_query("SET CHARACTER_SET_RESULTS='utf8'");
mysqli_query("SET COLLATION_CONNECTION='utf8_general_ci'");
include("connect.php");

$sql = "select * from 2_post ORDER BY time ASC";
$result = mysqli_query($connect,$sql) or die('MySQL query error');

$num = mysqli_num_rows($result);  

if($_REQUEST['but'])
{
$date=  $_REQUEST['time'];
$status=  $_REQUEST['content'];
$post_id= $_REQUEST['post_id'];
$test = 0;
  if($num)
  {
        for ($i=$num;$i>0;$i--) 
        {
            $nb = mysqli_fetch_array($result);
            if(($date == $nb[time] || $date == 'null') && ($status == $nb[content] || $status == 'null') && ($post_id == $nb[post_id] || $post_id == 'null'))
            {
                echo "<li><div class='date'>$nb[time]</div>";
                echo "<div class='status'>$nb[content]</div>";
                echo "<a id='$nb[post_id]' class='fancybox fancybox.iframe' href='fancybox/iframe.php?id=$nb[post_id]'><img class='pic' src='$nb[pic]'/></a>";
            }
            else
            {
                $test++;
            }
        }
        if($test == $num)
        {
            echo"PLEASE TRY AGAIN!!";
        }
  }
  else
  {
    echo "not found !!!!";
  }
   //search-end
}
else
{

$id = 1;


if($num)
{
    for ($i=0;$i<$num;$i++) 
    {
        $nb = mysqli_fetch_array($result);
                echo "<li><div class='date'>$nb[time]</div>";
                echo "<div class='status'>$nb[content]</div>";
                echo "<a class='fancybox fancybox.iframe' href='fancybox/iframe.php?id=$nb[post_id]'><img class='pic' src='$nb[pic]'/></a>";
    }
}
else
{
  echo "not found !!!!";
}
}
    ?>

    </ul>
  </div>
</div>
  </body>
<script type="text/javascript">
$().ready(function() {
    var $scrollingDiv = $("#switch");
 
    $(window).scroll(function(){      
      $scrollingDiv
        .stop()
        .animate({"marginTop": ($(window).scrollTop() + 30) + "px"}, "slow" );      
    });
  });
  </script>
    <script type="text/javascript">
      try{ 
      var pageTracker = _gat._getTracker("UA-26904605-1");
      pageTracker._trackPageview();
      } catch(err) {} 
    </script>
    <script src="jswall.js"></script>
</html>
