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
    <?php   
    header("Content-Type:text/html; charset=utf-8");
    mysqli_query("SET NAMES 'utf8'");
    mysqli_query("SET CHARACTER_SET_CLIENT='utf8'");
    mysqli_query("SET CHARACTER_SET_RESULTS='utf8'");
    mysqli_query("SET COLLATION_CONNECTION='utf8_general_ci'");
    include("connect.php");
    $dog_id=$_REQUEST['id'];
    // 選出資料表2_user中貼這篇狗文的userid
    $sql = "SELECT * FROM 2_dogs WHERE id='$dog_id'";
    $result = mysqli_query($connect,$sql) or die('MySQL query error');
    $row = mysqli_fetch_assoc($result);

    $sql2 = "SELECT * FROM 2_user WHERE account='".$row['userid']."'";
    $result2 = mysqli_query($connect,$sql2) or die('MySQL query error');
    $row2 = mysqli_fetch_assoc($result2);
     ?>

    <h3 id="needtoknow">
    聯絡資訊
  </h3>
  <br>
  <p id="attention">
    <?php
    echo 
    "<div class='profile_pic' style='overflow:hidden;width:80px;height:80px;'>
      <img style='height:80px;'src='".$row2['profile_pic']."'/></div>1. 姓名:".$row2['name']."</br>
    2. 手機:0".$row2['phone']."</br>
    3. 地址:".$row2['address']."</br>";  ?>
 </p> 
 <br>
 <p>
    <a class="myButton" id="<?php echo "$dog_id";?>" href="agreement.php<?php echo "?id=$dog_id"; ?>">
      上一步:領養同意書
    </a>
  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p></br></br></br></br>
  </body> 
</html>
