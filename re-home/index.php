<?php

session_start();
$id = $_SESSION['username'];

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Go home</title>
	<meta charset="utf-8">
    <link rel="shortcut icon" href="../images/logo.ico">
    <!--<link rel="stylesheet" type="text/css" href="../main.css" />-->
    <link rel="stylesheet" type="text/css" href="re-home.css" />
    
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

<script type="text/javascript">


function loadImage(e) {
    var image = new Image();
    image.src = e.target.result;
}
function previewImage() {
    var reader = new FileReader();
    var file = document.getElementById("id_image_large").files[0];
    reader.readAsDataURL(file);
    reader.onload = loadImage;
}
$('#id_image_large').change(previewImage);



function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      oldonload();
      func();
    }
  }
}

function prepareInputsForHints() {
	var inputs = document.getElementsByTagName("input");
	for (var i=0; i<inputs.length; i++){
		// test to see if the hint span exists first
		if (inputs[i].parentNode.getElementsByTagName("span")[0]) {
			// the span exists!  on focus, show the hint
			inputs[i].onfocus = function () {
				this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
			}
			// when the cursor moves away from the field, hide the hint
			inputs[i].onblur = function () {
				this.parentNode.getElementsByTagName("span")[0].style.display = "none";
			}
		}	
	}
	// repeat the same tests as above for selects
	var selects = document.getElementsByTagName("select");
	for (var k=0; k<selects.length; k++){
		if (selects[k].parentNode.getElementsByTagName("span")[0]) {
			selects[k].onfocus = function () {
				this.parentNode.getElementsByTagName("span")[0].style.display = "inline";
			}
			selects[k].onblur = function () {
				this.parentNode.getElementsByTagName("span")[0].style.display = "none";
			}
		}
	}
}
addLoadEvent(prepareInputsForHints);
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
              <li><a id='profile' href='../page'>個人頁面</a></li>
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
    
    <form action="post.php" method="post" enctype="multipart/form-data">
    <span id="left">
    	<div><img src="image/1.png" max-height="100px"></div>
    	<div><img src="image/2.png" max-height="100px"></div>
    	<div><img src="image/3.png" max-height="100px"></div>
    </span>
    <dl>
    <dt>
    	<dd id="adopt1">Adoption</dd>
    	<dd id="adopt2">On the way to their home</dd>
    </br></br>
    </dt>
	<dt>
		<label for="nick">名字</label>
	</dt>
	<dd>
		<input
			name="nick"
			type="text" />
		<span class="hint">為毛孩子下個響亮的標題吧<span class="hint-pointer">&nbsp;</span></span>
	</dd>
	<dt>
		<label for="breed">品種</label>
	</dt>
	<dd>
		<select name="breed">
			<option value="husky">哈士奇</option>
			<option value="bull">鬥牛犬</option>
			<option value="migo">米格魯</option>
		</select>
	</dd>
	<dt>
		<label for="gender">性別</label>
	</dt>
	<dd>
		<select  name="gender">
			<option value="M">男生</option>
			<option value="F">女生</option>
		</select>
		<span class="hint">boy or girl?<span class="hint-pointer">&nbsp;</span></span>
	</dd>
	<dt><label for="year">年齡</label></dt>
	<dd>
		<select name="year">
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
		</select>
		<span >歲</span>
		<span class="hint">year?<span class="hint-pointer">&nbsp;</span></span>
			<select name="month">
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
		</select>
		<span>月</span>
		<span class="hint">month?<span class="hint-pointer">&nbsp;</span></span>
	</dd>
	<dt>
		<label for="location">所在地</label>
	</dt>
	<dd>
		<input
			name="location"
			type="text" />
		<span class="hint">狗狗在哪裡呢?<span class="hint-pointer">&nbsp;</span></span>
	</dd>
	<dt>
		<label for="neuter">結紮</label>
	</dt>
	<dd>
		<select  name="neuter">
			<option value="t">有結紮</option>
			<option value="f">沒有結紮</option>
		</select>
		<span class="hint">是否結紮?<span class="hint-pointer">&nbsp;</span></span>
	</dd>
		<dt>
		<label for="info">簡介</label>
	</dt>	
	<dd>
	    <textarea 
	        cols="30" 
	        rows="5" 
	        name="info" 
	        id="info"
	        style="resize: none;" ></textarea>
		<span class="hint">介紹狗狗<span class="hint-pointer">&nbsp;</span></span>
	</dd>
	
	<dt>
		<label for="info">照片或影片</label>
	</dt>	
	<dd>
		<input
			name="file"
			type="file" />
		<span class="hint">狗狗的照片或影片<span class="hint-pointer">&nbsp;</span></span>
	</dd>



	<dt class="button">&nbsp;</dt>
	<dd class="button"><button>我要送養</button>
	</dd>
</dl>
<span id="right">
    	<div><img src="image/4.png" max-height="100px"></div>
    	<div><img src="image/5.png" max-height="100px"></div>
    	<div><img src="image/6.png" max-height="100px"></div>
    </span>

</form>

</body>
</html>
