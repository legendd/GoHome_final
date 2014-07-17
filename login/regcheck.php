<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	
	include("connect.php");
	if(isset($_POST["Submit"]) && $_POST["Submit"] == "register")
	{
		$user = $_POST["account"];
		$psw = $_POST["password"];
		$psw_confirm = $_POST["confirm"];
		if($user == "" || $psw == "" || $psw_confirm == "")
		{
			echo "<script>alert('please fill out the sheet'); history.go(-1);</script>";
		}
		else
		{
			if($psw == $psw_confirm)
			{
				mysqli_query("set names 'gdk'");	//设定字符集
				$sql = "SELECT account FROM 2_user WHERE account = '$_POST[account]'";	//SQL语句
				$result = mysqli_query($connect,$sql);	//执行SQL语句
				$num = mysqli_num_rows($result);	//统计执行结果影响的行数
				if($num)	//如果已经存在该用户
				{
					echo "<script>alert('此用戶已存在'); history.go(-1);</script>";
				}
				else	//不存在当前注册用户名称
				{
					$sql_insert = "INSERT INTO 2_user (account,password) VALUES('$_POST[account]','$_POST[password]')";
					$res_insert = mysqli_query($connect,$sql_insert);
					//$num_insert = mysql_num_rows($res_insert);
					if($res_insert)
					{
						echo "<script>alert('成功!'); history.go(-2);</script>";
					}
					else
					{
						echo "<script>alert('系統忙線!'); history.go(-1);</script>";
					}
				}
			}
			else
			{
				echo "<script>alert('請重新輸入密碼!'); history.go(-1);</script>";
			}
		}
	}
	else
	{
		echo "<script>alert('fail:('); history.go(-1);</script>";
	}
?>