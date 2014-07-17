<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../images/logo.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" href="../main.css">
  <title>Go HoME</title>
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
<div id="content">
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
    </li>
    <li> <a id="aboutus" href="../aboutus/">關於我們</a>
    </li>
    <li>
          <!--search-->
      <form id='search' action='http://www.google.com/search' target="_blank" method='get'>
      <input type="hidden" id="sitesearch" placeholder="search" value="" />
      <input id="s" id="q" type="text" value="" />
      </form>
    </li>
  </ul>
    
    </div>
  </div>
<div id="main">
    <header>
    <h4>註冊帳戶</h4>

    </header>
    
<bg class="bg">
<form action="regcheck.php" method="post">
	帳號:<input type="text" name="account"/>
    <br/><br/>
    密碼:<input type="password" name="password"/>
    <br/><br/>
    確認密碼:<input type="password" name="confirm"/>
    <br/><br/>
    <input type="Submit" name="Submit" value="register"/>
</form>
</bg>
</div>
</body>
<style type="text/css">
html{
  background-image: url(reg_dog2.jpg);
  background-repeat: no-repeat;
  background-size: 100% 100%;
}
#main{
  text-align: left;
  font-family: "Microsoft JhengHei";
  margin-left: 350px;
  
}
h4{
  font-family: "Microsoft JhengHei";
  font-size: 26px;
  font-weight: bold;
}
.bg{
  position: absolute;
  left: 13%;
  width: 300px;
  font-family: "Microsoft JhengHei";
}
form{
  text-align: right;
}
.sub{
  font-family: "Microsoft JhengHei";
}
</style>
</html>