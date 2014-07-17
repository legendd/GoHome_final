<?php

session_start();
$id = $_SESSION['username'];

?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=big5">
  <link rel="shortcut icon" href="../images/logo.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Go Home</title>
  <div class="selection">
  <style type="text/css">
    <!-- A{text-decoration:none} --> 
    a:link { color: black }
    a:visited { color: black }
    a:active { color: black }
    a:hover { color: black }
    </style>
  </div>


  <!-- CSS Reset -->
  <link rel="stylesheet" href="css/reset.css">

  <!-- Global CSS for the page and tiles -->
  <link rel="stylesheet" href="css/main.css">
  
  <!--searchbar-->
  <link href="css/searchbar.css" rel= "stylesheet" />

<!-- FancyBox -->
  <!-- Add jQuery library -->
  <script type="text/javascript" src="libs/jquery-1.10.1.min.js"></script>

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="libs/jquery.mousewheel-3.0.6.pack.js"></script>

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

  <!-- Add Button helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
  <script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
  <script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

  <!-- Add Media helper (this is optional) -->
  <script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>


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

      /*
       *  Open manually
       */

      $("#fancybox-manual-a").click(function() {
        $.fancybox.open('1_b.jpg');
      });

      $("#fancybox-manual-b").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });

      $("#fancybox-manual-c").click(function() {
        $.fancybox.open([
          {
            href : '1_b.jpg',
            title : 'My title'
          }, {
            href : '2_b.jpg',
            title : '2nd title'
          }, {
            href : '3_b.jpg'
          }
        ], {
          helpers : {
            thumbs : {
              width: 75,
              height: 50
            }
          }
        });
      });


    });
  </script>

  <style>
    /**
     * Grid items
     */
    #tiles li {
      -moz-box-sizing: border-box;
           box-sizing: border-box;
    }

    #tiles li img {
      width: 100%;
      height: auto;
    }
  </style>


  <style>
    /**
     * Grid items
     */
    #tiles li {
      -moz-box-sizing: border-box;
           box-sizing: border-box;
    }

    #tiles li img {
      width: 100%;
      height: auto;
    }
  </style>

</head>

<body>
<div class="content">
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
    <li> <a id="discussion">討論區</a>
    </li>
    <li> <a id="aboutus" href="../aboutus/">關於我們</a></li>
    <li>
          <!--search-->
      <form id='search' action='http://www.google.com/search' target="_blank" method='get'>
      <input type="hidden" id="sitesearch" placeholder="search" value="" />
      <input id="s" id="q" type="text" value="" />
      </form> 
    </li>
      <?php
      if($_SESSION['username'] != NULL) {  
        echo "<li><a id='id' href='../page/'>".$id."</a>
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

  <div id="container">
    <header>
      <h1>Go Home</h1>
      <p>Here are the dogs waiting for YOU.</p>
    </header>
    
    <!--searchbar-->
     
     
<form class="search" action=""  method="post" >
  <br><br>
  <h5>Search</h5> 
  
品種:
<select name="breed">
      <option value="null" SELECTED>無</option>
      <option value="migo">米格魯</option>
      <option value="bull">鬥牛犬</option> 
      <option value="husky">哈士奇</option> 
</select>
</br></br>
年齡：
<select name="year">
      <option value="null" SELECTED>無</option>
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
    <span>歲</span>
</br></br>       
性別：      
      <select name="gender">
<option value="null" SELECTED>無</option>
<option value="M">男生</option>
<option value="F">女生</option> </select><br />
</br>
地點：      
      <select name="location">
<option value="null" SELECTED>無</option>
<option value="Taipei">臺北</option>
<option value="Kaohsiung">高雄</option> 
<option value="Tainan">台南</option></select><br />
</br></br>
<button name="but" value="yes">Submit</button> 
<button href="">Clear</button> </form>

    
    <div id="main" role="main">


      <ul id="tiles">
        <!-- These are our grid blocks -->
  
     <!--search-->   
<?php

header("Content-Type:text/html; charset=utf-8");
mysqli_query("SET NAMES 'utf8'");
mysqli_query("SET CHARACTER_SET_CLIENT='utf8'");
mysqli_query("SET CHARACTER_SET_RESULTS='utf8'");
mysqli_query("SET COLLATION_CONNECTION='utf8_general_ci'");
include("connect.php");

$sql = "select * from 2_dogs ORDER BY id DESC";
$result = mysqli_query($connect,$sql) or die('MySQL query error');

$num = mysqli_num_rows($result);  

if($_REQUEST['but'])
{
$breed=  $_REQUEST['breed'];
$age=  $_REQUEST['year'];
$gender=  $_REQUEST['gender'];
$location=  $_REQUEST['location'];
$test = 0;
  if($num)
  {
        for ($i=0;$i<$num;$i++) 
        {
            $nb = mysqli_fetch_array($result);
            if(($breed == $nb[breed] || $breed == 'null') && ($age == $nb[year] || $age == 'null') && ($gender == $nb[gender] || $gender == 'null') && ($location == $nb[location] ||$location == 'null'))
            {
                echo "<li><div class='img'>";
                echo "<a id='$nb[id]' class= 'fancybox fancybox.iframe' href= 'iframe.php?id=$nb[id]' title=''> ";
                echo "<img class='black' src= '$nb[photo]' />";
                echo "<font class='dog_name' ><br>名字：$nb[name]</br>";
                echo "<br>品種：";
                if($nb[breed]=='migo')
                  echo "米格魯";
                elseif ($nb[breed]=='bull') {
                  echo "鬥牛犬";
                }
                elseif ($nb[breed]=='husky') {
                  echo "哈士奇";
                }
                echo "<br>性別：";
                if($nb[gender]=='F')
                  echo "女生";
                elseif ($nb[gender]=='M')
                  echo "男生";
                                  
                echo "<br>年齡：$nb[year]歲又$nb[month]個月</font></div></a></li>";
                echo "<br>";
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
            echo "<li><div class='img'>";
            echo "<a id='$nb[id]' class= 'fancybox fancybox.iframe' href= 'iframe.php?id=$nb[id]' title=''> ";
            echo "<img class='black' src= '$nb[photo]' />";
            echo "<font class='dog_name' ><br>名字：$nb[name]</br>";
            echo "<br>品種：";
                if($nb[breed]=='migo')
                  echo "米格魯";
                elseif ($nb[breed]=='bull') {
                  echo "鬥牛犬";
                }
                elseif ($nb[breed]=='husky') {
                  echo "哈士奇";
                }
                echo "<br>性別：";
                if($nb[gender]=='F')
                  echo "女生";
                elseif ($nb[gender]=='M')
                  echo "男生";
                                  
            echo "<br>年齡：$nb[year]歲又$nb[month]個月</font></div></a></li>";
            
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

  <!-- include jQuery -->
  <script src="libs/jquery.imagesloaded.js"></script>
  <!-- Include the plug-in -->
  <script src="jquery.wookmark.js"></script>
  <!-- Once the page is loaded, initalize the plug-in. -->
  <script type="text/javascript">
    (function ($){
      $('#tiles').imagesLoaded(function() {
        // Prepare layout options.
        var options = {
          itemWidth: 200, // Optional min width of a grid item
          autoResize: true, // This will auto-update the layout when the browser window is resized.
          container: $('#tiles'), // Optional, used for some extra CSS styling
          offset: 5, // Optional, the distance between grid items
          outerOffset: 20, // Optional the distance from grid to parent
          flexibleWidth: '30%' // Optional, the maximum width of a grid item
        };

        // Get a reference to your grid items.
        var handler = $('#tiles li');

        var $window = $(window);
        $window.resize(function() {
          var windowWidth = $window.width(),
              newOptions = { flexibleWidth: '50%' };

          // Breakpoint
          if (windowWidth < 1024) {
            newOptions.flexibleWidth = '100%';
          }

          handler.wookmark(newOptions);
        });

        // Call the layout function.
        handler.wookmark(options);
      });
    })(jQuery);
  </script>


</body>
</html>
