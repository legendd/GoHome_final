<?php

session_start();
$id = $_SESSION['username'];

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Go home</title>
	<meta charset="utf-8">
    <link rel="shortcut icon" href="../images/logo.ico">
    <link rel="stylesheet" type="text/css" href="../main2.css" />
    <link rel="stylesheet" type="text/css" href="mypage.css" />
    
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>-->
    <script src="../js/jquery.js"></script>
    <script src="../js/animations.js"></script>
    <script src="http://jarallax.com/download/jarallax-min-0.2.js" type="text/javascript"></script>
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
  	if(form.big_photo.value!="")
{
alert('圖片上傳中...');
form.submit();
}

  	if(form1.small_photo.value!="")
{
alert('圖片上傳中...');
form1.submit();
}
  }
  
  </script>

</head>
<body>
    <div class="content">
<div id="menu">
  <ul>
    <li> <a id="home" href="../">首頁</a>
    </li>
    <li> <a id="adoption">送領養專區</a>
      <ul>
        <li><a id="adopt" href="../adoption/">領養</a></li>
        <li><a id="re-home" href="../re-home/">送養</a></li>
      </ul>
    </li>
    <li> <a id="share" href="../wall/">動態牆</a>
      
    </li>
    <li> <a id="discussion">討論區</a>
      <li> <a id="aboutus" href="../aboutus/">關於我們</a>
      </li>
    </li>
    <li>
          <!--search-->
      <form id='search' action='http://www.google.com/search' target="_blank" method='get'>
      <input type="hidden" id="sitesearch" placeholder="search" value="" />
      <input id="s" id="q" type="text" value="" />
      </form>
    </li>
	<?php
      if($_SESSION['username'] != NULL) {  
        echo "<li><a id='id'>".$id."</a>
              <ul>
              <li><a id='logout' href='../login/logout.php'>登出</a></li>
              <li><a id='profile' href='../page/'>個人頁面</a></li>
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
    
    <div class="top_head">
        <div class="sunny">
        
        <!--個人照片上傳-->
        
        <form name="form" action="" method="post" enctype="multipart/form-data">
        <?php
            header("Content-Type:text/html; charset=utf-8");
            mysqli_query("SET NAMES 'utf8'");
            mysqli_query("SET CHARACTER_SET_CLIENT='utf8'");
            mysqli_query("SET CHARACTER_SET_RESULTS='utf8'");
            mysqli_query("SET COLLATION_CONNECTION='utf8_general_ci'");
            include("connect.php");
            $ds          = DIRECTORY_SEPARATOR;  //1
            $storeFolder = 'image';   //2
            $id = $_SESSION['username'];
            
            if ($_FILES['big_photo']['tmp_name'] != "") {
                                        
                $tempFile = $_FILES['big_photo']['tmp_name'];          //3             
                $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
                $targetFile =  $targetPath. $_FILES['big_photo']['name'];  //5
                move_uploaded_file($tempFile,$targetFile); //6
                $photo_name = $_FILES['big_photo']['name'];
                
                $insert = "UPDATE 2_user set profile_pic = 'http://140.116.72.102/~legendd/final/page/image/$photo_name' where account = '$id';";
                $res = mysqli_query($connect,$insert) or die('oh no!');
            }
                $sql = "select * from 2_user where account = '$id';";
                $result = mysqli_query($connect,$sql) or die('MySQL query error');
                $nb = mysqli_fetch_array($result);
                $bighead = $nb[profile_pic];
    
                echo "<a name='bighead' id='bighead' href='javascript:void(0);' style='background: url($bighead) no-repeat;";
                echo "background-size: contain;'>";
                echo "<input name='big_photo' id='big_photo' onChange='UploadFile1();' type='file' tabindex='3' value='yes' size='3' /></a>";
                echo "<input type='submit' style='visibility:hidden' ></input>";
                echo "</form>";
        ?>
        
        <!--個人照片上傳結束-->    
            <div class="words">
                <font size="5" color="#0c457d"><b>晴天娃娃</b><br></font>
                <font size="3" color="#829db6"><br>好想出去玩噢~</font>
            </div>
        </div>
        <div class="po">
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
                
                if (($_FILES['small_photo']['tmp_name'] != "") or ($_REQUEST['po_btn'])) {
                                        
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
                            $insert = "INSERT INTO 2_post (time,userid,pic,content) VALUES ('$time','$id','http://140.116.72.102/~legendd/final/page/image/$visible','$_POST[po_text]')";
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

                
            </form>
        </div>
        
        
    </div>
    
    <div class="neck">
    <div class="cent">
        <div class="group" id="group1">
            <br>&nbsp;&nbsp;<b>群組1</b><br><img style="width:270px" src='image/line.png'><br><br>
            &nbsp;&nbsp;<a><img class="con" id="a1" src="image/dog_01.png"></a><tr>
            <a><img class="con" id="a2" src="image/dog_01.png"></a><br>
            &nbsp;&nbsp;<a><img class="con" id="a3" src="image/dog_02.png"></a><tr>
            <a><img class="con" id="a4" src="image/dog_02.png"></a>
        </div>
        
        <div class="group" id="group2">
            <br>&nbsp;&nbsp;<b>群組2</b><br><img style="width:270px" src='image/line.png'><br><br>
            &nbsp;&nbsp;<a><img class="con" id="b1" src="image/dog_01.png"></a><tr>
            <a><img class="con" id="b2" src="image/dog_01.png"></a><br>
            &nbsp;&nbsp;<a><img class="con" id="b3" src="image/dog_02.png"></a><tr>
            <a><img class="con" id="b4" src="image/dog_02.png"></a>
        </div>
        
        <div class="group" id="group3">
            <br>&nbsp;&nbsp;<b>群組3</b><br><img style="width:270px" src='image/line.png'><br><br>
            &nbsp;&nbsp;<a><img class="con" id="c1" src="image/dog_01.png"></a><tr>
            <a><img class="con" id="c2" src="image/dog_01.png"></a><br>
            &nbsp;&nbsp;<a><img class="con" id="c3" src="image/dog_02.png"></a><tr>
            <a><img class="con" id="c4" src="image/dog_02.png"></a>
        </div>
        
        <div class="group" id="group4">
            <br>&nbsp;&nbsp;<b>群組4</b><br><img style="width:270px" src='image/line.png'><br><br>
            &nbsp;&nbsp;<a><img class="con" id="d1" src="image/dog_01.png"></a><tr>
            <a><img class="con" id="d2" src="image/dog_01.png"></a><br>
            &nbsp;&nbsp;<a><img class="con" id="d3" src="image/dog_02.png"></a><tr>
            <a><img class="con" id="d4" src="image/dog_02.png"></a>
        </div>
        
       </div> 
    </div>
    
<div class="chest">

<?php
    
    header("Content-Type:text/html; charset=utf-8");
    mysqli_query("SET NAMES 'utf8'");
    mysqli_query("SET CHARACTER_SET_CLIENT='utf8'");
    mysqli_query("SET CHARACTER_SET_RESULTS='utf8'");
    mysqli_query("SET COLLATION_CONNECTION='utf8_general_ci'");
    include("connect.php");
                
    $sql = "select * from 2_post where userid = '$id' ORDER BY post_id DESC";
    $result = mysqli_query($connect,$sql) or die('MySQL query error');
                
    $num = mysqli_num_rows($result);  
    
    echo "<div class='cent_2'>";
    
    for ($i=0;$i<$num;$i++) {
        $nb = mysqli_fetch_array($result);
        if($num){
            echo "<span class='control'>";
            echo "<a class='fancybox fancybox.iframe' href='fancybox/iframe.php?id=$nb[post_id]'><img class='pic' src='$nb[pic]'/></a>";
            echo "<font align='center'>$nb[content]</font>";
            echo "</span>";
        }
    }
    
    echo "</div>";
                ?>
         
        
    </div>

</body>
</html>
