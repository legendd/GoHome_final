<?php

session_start();
$id = $_SESSION['username'];

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Go home</title>
	<meta charset="utf-8">
    <link rel="shortcut icon" href="../images/logo.ico">
    <link rel="stylesheet" type="text/css" href="../main.css" />
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

 <script language="JavaScript" type="text/JavaScript">
  function UploadFile()
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
    <li> <a id="share" href="">動態牆</a>
      <ul>
        <li> <a id="star">寵物明星</a>
            <ul>
            <li><a id="la">拉不拉多</a></li>
            <li><a id="co">柯基犬</a></li>
            <li><a id="mi">米格魯</a></li>
          </ul>
        </li>
        <li> <a id="stupid">狗狗笨版</a>
        </li>
      </ul>
    </li>
    <li> <a id="discussion">討論區</a>
      <ul>
        <li><a id="process">送領養程序</a></li>
        <li><a id="health">狗狗健康</a></li>
        <li><a id="train">狗狗訓練</a></li>
        <li><a id="FAQ">常見問題</a></li>
      </ul>
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
    
    <div class="top_head">
        <div class="sunny">
            <img id="bighead" src="image/DSCN2466.JPG">
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
                
                if (!empty($_FILES)) {
                                        
                    $tempFile = $_FILES['small_photo']['tmp_name'];          //3             
                    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
                    $targetFile =  $targetPath. $_FILES['small_photo']['name'];  //5
                    move_uploaded_file($tempFile,$targetFile); //6
                    $small_photo = $_FILES['small_photo']['name'];
                    
                    if($_REQUEST['po_btn']){
                        echo "<a class='btn_addPic' href='javascript:void(0);'>";
                    }
                    else{
                        echo "<a class='btn_addPic' href='javascript:void(0);' style='background: url(image/$small_photo) no-repeat;";
                        echo "background-size: contain;'>";
                    }
                    
                    echo "<input name='small_photo' id='small_photo' onChange='UploadFile();' type='file' tabindex='3' value='yes' size='3' /></a>";
                    echo"<textarea id='po_text' placeholder='你在想什麼?'></textarea>";
                    echo "<input type='submit' name='po_btn' id='po_btn' ></input>";
                }
                else{
                    echo "<a class='btn_addPic' href='javascript:void(0);'>";
                    echo "<input name='small_photo' id='small_photo' onChange='UploadFile();' type='file' tabindex='3' value='yes' size='3' /></a>";
                    echo"<textarea id='po_text' placeholder='你在想什麼?'></textarea>";
                    echo "<input type='submit' id='po_btn' ></input>";
                }
                
                ?>

                
            </form>
        </div>
        
        
    </div>
    
    <div class="neck">
        <div class="group" id="group1">
            <br>&nbsp;&nbsp;<b>群組1</b><br><img style="width:300px" src='image/line.png'><br><br>
            &nbsp;&nbsp;<a><img class="con" id="a1" src="image/dog_01.png"></a><tr>
            <a><img class="con" id="a2" src="image/dog_01.png"></a><br>
            &nbsp;&nbsp;<a><img class="con" id="a3" src="image/dog_02.png"></a><tr>
            <a><img class="con" id="a4" src="image/dog_02.png"></a>
        </div>
        
        <div class="group" id="group2">
            <br>&nbsp;&nbsp;<b>群組2</b><br><img style="width:300px" src='image/line.png'><br><br>
            &nbsp;&nbsp;<a><img class="con" id="b1" src="image/dog_01.png"></a><tr>
            <a><img class="con" id="b2" src="image/dog_01.png"></a><br>
            &nbsp;&nbsp;<a><img class="con" id="b3" src="image/dog_02.png"></a><tr>
            <a><img class="con" id="b4" src="image/dog_02.png"></a>
        </div>
        
        <div class="group" id="group3">
            <br>&nbsp;&nbsp;<b>群組3</b><br><img style="width:300px" src='image/line.png'><br><br>
            &nbsp;&nbsp;<a><img class="con" id="c1" src="image/dog_01.png"></a><tr>
            <a><img class="con" id="c2" src="image/dog_01.png"></a><br>
            &nbsp;&nbsp;<a><img class="con" id="c3" src="image/dog_02.png"></a><tr>
            <a><img class="con" id="c4" src="image/dog_02.png"></a>
        </div>
        
        <div class="group" id="group4">
            <br>&nbsp;&nbsp;<b>群組4</b><br><img style="width:300px" src='image/line.png'><br><br>
            &nbsp;&nbsp;<a><img class="con" id="d1" src="image/dog_01.png"></a><tr>
            <a><img class="con" id="d2" src="image/dog_01.png"></a><br>
            &nbsp;&nbsp;<a><img class="con" id="d3" src="image/dog_02.png"></a><tr>
            <a><img class="con" id="d4" src="image/dog_02.png"></a>
        </div>
        
        
    </div>
    
    <div class="chest">
        
        
        
        
        
    </div>

</body>
</html>
