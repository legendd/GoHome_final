<?php

session_start();
$id = $_SESSION['username'];

?>

<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="iframe.css" />
</head>
<body>
	<?php

	header("Content-Type:text/html; charset=utf-8");
	mysqli_query("SET NAMES 'utf8'");
	mysqli_query("SET CHARACTER_SET_CLIENT='utf8'");
	mysqli_query("SET CHARACTER_SET_RESULTS='utf8'");
	mysqli_query("SET COLLATION_CONNECTION='utf8_general_ci'");
	include("connect.php");
	$post_id=$_REQUEST['id'];
	// 選出資料庫中的該篇PO文
	$sql = "SELECT * FROM 2_post WHERE post_id='$post_id'";
	$result = mysqli_query($connect,$sql) or die('MySQL query error');
	$row = mysqli_fetch_assoc($result);

	$sql = "SELECT * FROM 2_user WHERE account ='".$row['userid']."'";
	$result2 = mysqli_query($connect,$sql) or die('MySQL query error');	
	$row2 = mysqli_fetch_assoc($result2);

	?>

	<div class="container" style="background-image:url(<?php echo $row['pic']; ?>)"></div>
	<div class="content">
		<?php 
			echo "<div class='profile_pic'><img src='".$row2['profile_pic']."'/></div>";
			echo "<p>".$row['userid']."	|	".$row['time']."</p>"; 
			echo "<p>".$row['content']."</p>";
		?>
		<table>
		<th><img class="like" src="../images/like.png"/></th>
		<th><img class="collect" src="../images/collection.png"/></th>
		<th><img class="share" src="../images/share.png"/></th>
		</table>

	</div>

</body>
</html>