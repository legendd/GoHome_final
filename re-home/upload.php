<?php

$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = 'upload/';   //2
 
if (!empty($_FILES)) {
     
    $tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
    
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
    
    $here = $_FILES['file']['name'];
    
    mysql_connect("localhost","ilovedog","pigloveme");	
	mysql_select_db("ilovedog");	
	//mysql_query("set names 'gdk'");	
	$sql = "SELECT image FROM img";	
	$result = mysqli_query($sql);	
	
	$sql_insert = "INSERT INTO img (image) VALUES('http://merry.ee.ncku.edu.tw/~legendd/final/re-home/image/$here')";
	$res_insert = mysql_query($sql_insert);
	//$num_insert = mysql_num_rows($res_insert);
    if($res_insert)
	{
		echo "<script>alert('success!'); history.go(-1);</script>";
	}
	else
	{
		echo "<script>alert('system busy...'); history.go(-1);</script>";
	} 
}
?>  