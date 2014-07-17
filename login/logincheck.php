<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	
	include("connect.php");
	if(isset($_POST["submit"]) && $_POST["submit"] == "login")
	{
		$user = $_POST["account"];
		$psw = $_POST["password"];
		if($user == "" || $psw == "")
		{
			echo "<script>alert('Please inter username！'); history.go(-1);</script>";
		}
		else
		{

			mysqli_query("set names 'gbk'");
			$sql = "SELECT account,password FROM 2_user WHERE account = '$_POST[account]' AND password = '$_POST[password]'";
			$result = mysqli_query($connect,$sql);
			$num = mysqli_num_rows($result);
			if($num)
			{
				$row = mysqli_fetch_array($result);	//将数据以索引方式储存在数组中
				echo "歡迎回家，".$row[0];
				$_SESSION['username']=$row[0];
				echo "<script>alert('已登入!');history.go(-1);</script>";

			}
			else
			{
				echo "<script>alert('輸入錯誤！');history.go(-1);</script>";
			}
		}
	}
	else
	{
		echo "<script>alert('successfully login！'); history.go(-1);</script>";
	}

?>