<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Go HoME</title>
</head>
<body>

    <header>
    <h1>Post</h1>
    <p>================================</p>
    </header>

<?php
header("Location: http://140.116.72.102/~legendd/final/adoption/"); 
include("connect.php");

$nick = $_POST['nick'];
$sender = $_POST['sender'];
$breed =  $_POST['breed'];
$year =  $_POST['year'];
$month =  $_POST['month'];
$gender =  $_POST['gender'];
$location =  $_POST['location'];
$info = $_POST['info'];

$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = 'image/';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
    
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
    
    $here = $_FILES['file']['name'];
}

if($nick == "" || $breed == "" || $year == "" || $gender == "" || $location == "")
{
	echo "<script>alert('請完整填寫哦！！'); history.go(-1);</script>";
}
else
{
    $sql = "select * from 2_dogs";
    $result = mysqli_query($connect,$sql) or die('MySQL query error');
	$insert = "INSERT INTO 2_dogs (name,breed,year,month,gender,location,info,photo) VALUES('$_POST[nick]','$_POST[breed]','$_POST[year]','$_POST[month]','$_POST[gender]','$_POST[location]','$_POST[info]','http://140.116.72.102/~legendd/final/re-home/image/$here')";
	$res = mysqli_query($connect,$insert) or die('oh no!');
}


    echo "<embed src= 'http://140.116.72.102/~legendd/final/re-home/image/$here' /><br>";
   // echo "<img src= 'http://140.116.72.102/~yuting/ex10/re-home/image/$here' /><br>";
    echo "<font class='info' >名字：$nick<br>";
    echo "送養人姓名: $sender<br>";
    echo "品種: $breed<br>";
    echo "年紀: $year<br>";
    echo "性別: $gender<br>";
    echo "地點: $location<br>";
    echo "其他資訊: $info<br></font>";
    echo "<br>";


exit;
?>

</body>
</html>  