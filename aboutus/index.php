<html>
  <head>
    <title>Go Home</title>
    <link rel="shortcut icon" href="../images/logo.ico">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="introduce.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
    <script type="text/javascript">
    var $a = jQuery.noConflict(true);
    </script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="move.js" type="text/javascript"> </script>
  
  </head>
  <body>
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

    <div id="wrap">
    <div id="main">
    <div class="photo" id="shen"><span onmouseover="this.style.opacity='.5'" onmouseout="this.style.opacity='1'">
<img class="image" src="1.png"  /></span></div>
    <div id="shen_name" class="name"><font>沈美合</font></div>
    <div id="intro1" class="intros">
      <dl><img src="poodle.png" width="40px" height="40px"/><font size="5">沈美合</font></dl>
      <dd><font size="2" color="red">經濟103</font></dd>
      <dd>喜歡結交各式各樣的朋友、喜歡到處遊玩吃美食
非常喜愛小動物，對於牠們總有一種特殊的情感，因此希望能透過這個網站平台可以有效推廣「以領養代替購買」的概念!
</dd>
    </div> 
    <div class="photo" id="chiang"><span onmouseover="this.style.opacity='.5'" onmouseout="this.style.opacity='1'">
<img class="image" src="2.png" /></span></div>
    <div id="chiang_name" class="name"><font>江念恩</font></div>
    <div id="intro2" class="intros">
      <dl><img src="husky.png" width="40px" height="40px"/><font size="5" >江念恩</font></dl>
      <dd><font size="2" color="red">企管103</font></dd>
      <dd>樂觀開朗又有些古靈精怪，喜歡散播歡樂散播愛，在成大擔任照顧校園流浪狗的志工，期許世界上的狗兒都能擁有一個家♥
</dd>
    </div>
    <div class="photo" id="tseng"><span onmouseover="this.style.opacity='.5'" onmouseout="this.style.opacity='1'">
<img class="image" src="3.png" /></span></div>
    <div id="tseng_name" class="name"><font>曾郁婷</font></div>
    <div id="intro3" class="intros">
      <dl><img src="sheepdog.png" width="40px" height="40px"/><font size="5">曾郁婷</font></dl>
      <dd><font size="2" color="red">電機103</font></dd>
      <dd>大家好我是曾郁婷～因為小時候家裡住公寓的關係，除了魚跟蠶寶寶以外一直沒養過小動物們，能夠在這次作品做一個幫狗狗找家人的網站真的很棒！
</dd>
    </div>
    <div class="photo" id="hsiao"><span onmouseover="this.style.opacity='.5'" onmouseout="this.style.opacity='1'">
<img class="image" src="4.png" /></span></div>
    <div id="hsiao_name" class="name"><font>蕭傳錡</font></div>
    <div id="intro4" class="intros">
      <dl><img src="labrador.png" width="40px" height="40px"/><font size="5">蕭傳錡</font></dl>
      <dd><font size="2" color="red">電機103</font></dd>
      <dd>熱愛音樂，閒暇之餘練電吉他，還有跟著系棒打球，會打LOL，算有點宅又不是太宅，常常不按牌理出牌，然後狗其實很可愛!希望完成這個很棒的網站!
</dd>
    </div>
    <div class="photo" id="chen"><span onmouseover="this.style.opacity='.5'" onmouseout="this.style.opacity='1'">
<img class="image" src="5.png" /></span></div>
    <div id="chen_name" class="name"><font>陳庭嫣</font></div>
    <div id="intro5" class="intros">
      <dl><img src="corgi.png" width="40px" height="40px"/><font size="5">陳庭嫣</font></dl>
      <dd><font size="2" color="red">經濟103</font></dd>
      <dd>我喜歡看書看電影還有可愛的幼童和可愛的動物^__^大家都要畢業了，希望可以一起呈現一份有趣好玩又有用的網站，為大學劃下完美的句點。

</dd>
    </div>
    <div class="photo" id="lee"><span onmouseover="this.style.opacity='.5'" onmouseout="this.style.opacity='1'">
<img class="image" src="6.png" /></span></div>
    <div id="lee_name" class="name"><font>李昀欣</font></div>
    <div id="intro6" class="intros">
      <dl><img src="shiba_inu.png" width="40px" height="40px"/><font size="5">李昀欣</font></dl>
      <dd><font size="2" color="red">企管103</font></dd>
      <dd>AI、PS最拿手了:P去年有上過同一堂課但是修工設那邊的
      所以一些問題可以問我喔～我大致有經歷過XD喜歡毛絨絨的動物，可是家裡只養過會咬人的黃金鼠目前老家現役小寵物是養了7年多的三隻胖烏龜照片裡的狗溝是朋友家房東養的他超乖!!可是房東把他養在室外還上狗鏈感覺他常常很無聊所以我最喜歡去找他們玩了~~
</dd>
    </div>
    <div class="photo" id="chu"><span onmouseover="this.style.opacity='.5'" onmouseout="this.style.opacity='1'">
<img class="image" src="7.png" /></span></div>
    <div id="chu_name" class="name"><font>朱明璟</font></div>
    <div id="intro7" class="intros">
      <dl><img src="dachs.png" width="40px" height="40px"/><font size="5">朱明璟</font></dl>
      <dd><font size="2" color="red">電機103</font></dd>
      <dd>我的個性有些搞怪，比起照著規則走，我更喜歡創新有趣的事物！希望我們的網站就是一個全新的平台，讓流程簡單化，提高更多人領養的意願 
</dd>
    </div>
    <div class="photo" id="wu"><span onmouseover="this.style.opacity='.5'" onmouseout="this.style.opacity='1'">
<img class="image" src="8.png" /></span></div>
    <div id="wu_name" class="name"><font>吳青原</font></div>
    <div id="intro8" class="intros">
      <dl><img src="gold.png" width="40px" height="40px"/><font size="5">吳青原</font></dl>
      <dd><font size="2" color="red">工設102</font></dd>
      <dd>哈囉大家好我是青原=)很開心可以在這裡認識大家!請多多指教拉!
</dd>
  </div>
  </div>
    <div id="footer">
      <div id="who_we_are"><img src="http://i.imgur.com/1OMEdfd.png"
   width=1050 height=75 /></div>
    <div id="line"><img src="http://i.imgur.com/UjG7IHe.png"
      width="85%" height="35" /></div>
    </div>

  </body>

</html>