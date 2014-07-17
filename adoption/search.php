<?php

header("Content-Type:text/html; charset=utf-8");
include("connect.php");

$breed=  $_REQUEST['breed'];
$age=  $_REQUEST['age'];
$gender=  $_REQUEST['gender'];
$location=  $_REQUEST['location'];

$sql = "select * from dogs";
$result = mysqli_query($connect,$sql) or die('MySQL query error');

$num = mysqli_num_rows($result);	
$test = 0;
	if($num)
	{
        for ($i=0;$i<$num;$i++) 
        {
            $nb = mysqli_fetch_array($result);
            if(($breed == $nb[breed] || $breed == 'null') && ($gender == $nb[gender] || $gender == 'null') && ($location == $nb[location] ||$location == 'null'))
            {
                echo "品種: $nb[breed]<br>";
                echo "年紀: $nb[age]<br>";
                echo "性別: $nb[gender]<br>";
                echo "地點: $nb[location]<br>";
                echo "其他資訊: $nb[info]<br>";
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


?>  