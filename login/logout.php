<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//將session清空
unset($_SESSION['username']);
echo '登出中......';
echo "<script>alert('已登出。');history.go(-1);</script>";
?>