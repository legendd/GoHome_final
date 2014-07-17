<?php

session_start();
$id = $_SESSION['username'];

?>

<html>
  <head>
    <title>Adoption</title>
      <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=big5">
    <link rel="shortcut icon" href="../images/logo.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--             CSS                 -->
    <link rel="stylesheet" href="css/iframe.css">
</head>
<body>
    <h3 id="needtoknow">
    認養須知
  </h3>
  <p id="attention">
    <span><img src='pawprint.jpg' width='25px' height='25px'/></span>   了解養寵物的動機，寵物要陪伴您10到15年的時間。</br>
    <span><img src='pawprint.jpg' width='25px' height='25px'/></span>   飼養寵物要有足夠的時間、金錢、持之以恆的耐心、愛心。</br>
    <span><img src='pawprint.jpg' width='25px' height='25px'/></span>   飼養寵物的費用遠比寵物登記費高出許多，寵物的食物、窩、</br>&nbsp; &nbsp; &nbsp; &nbsp; 玩具、相關配備，以及醫療保健等負擔都是很昂貴的。</br>
    <span><img src='pawprint.jpg' width='25px' height='25px'/></span>   有多少時間照顧寵物？只給寵物食物是不夠的，他們需要運動、玩耍、洗澡、</br>&nbsp; &nbsp; &nbsp; &nbsp; 梳毛及陪伴。</br>
    <span><img src='pawprint.jpg' width='25px' height='25px'/></span>   寵物需要有固定、安全並適當的空間。</br>
    <span><img src='pawprint.jpg' width='25px' height='25px'/></span>   可看書事先學習寵物飼養相關知識。寵物的毛可能到處都是，即使有</br>&nbsp; &nbsp; &nbsp; &nbsp; 玩具或者抓抓板，寵物還是可能會出現到處亂抓或者咬家具的行為。</br>
    <span><img src='pawprint.jpg' width='25px' height='25px'/></span>   家中無人對寵物過敏。</br>
    <span><img src='pawprint.jpg' width='25px' height='25px'/></span>   取得全家人一致的認同並且了解生活上會有所改變。</br>
    <span><img src='pawprint.jpg' width='25px' height='25px'/></span>   請留意家中是否有幼童，他們常常會不經意的對寵物做出不適當的行</br>&nbsp; &nbsp; &nbsp; &nbsp;  為，如拉扯、丟下、提起等。</br>
    <span><img src='pawprint.jpg' width='25px' height='25px'/></span>   公寓鄰居不反對。</br>
</p>
  <br>
  <p id="next">
    
    <?php
    $dog_id=$_REQUEST['id']; 
    echo 
    "<a class='myButton' id='$dog_id' href='iframe.php?id=$dog_id'>上一步:狗狗詳細介紹</a>
    <a class='myButton' id='$dog_id' href='contactme.html?id=$dog_id'>下一步:取得聯絡資訊</a>"; ?>
    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </br></br></br></br>
  </p>
  </body> 
</html>
