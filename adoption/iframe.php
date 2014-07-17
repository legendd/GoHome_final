<?php

session_start();
$id = $_SESSION['username'];

?>

<html>
<head>
	<title>DOG #1</title>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=big5">
	<link rel="stylesheet" href="css/iframe.css">
	<!-- First, add jQuery (and jQuery UI if using custom easing or animation -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>

	<!-- Second, add the Timer and Easing plugins -->
	<script type="text/javascript" src="GalleryView/js/jquery.timers-1.2.js"></script>
	<script type="text/javascript" src="GalleryView/js/jquery.easing.1.3.js"></script>

	<!-- Third, add the GalleryView Javascript and CSS files -->
	<script type="text/javascript" src="GalleryView/js/jquery.galleryview-3.0-dev.js"></script>
	<link type="text/css" rel="stylesheet" href="GalleryView/css/jquery.galleryview-3.0-dev.css" />
	</head>
	<!-- Lastly, call the galleryView() function on your unordered list(s) -->
	<script type="text/javascript">
		$(function(){
			$('#myGallery').galleryView({
			transition_speed: 2000, 		//INT - duration of panel/frame transition (in milliseconds)
			transition_interval: 4000, 		//INT - delay between panel/frame transitions (in milliseconds)
			easing: 'swing', 				//STRING - easing method to use for animations (jQuery provides 'swing' or 'linear', more available with jQuery UI or Easing plugin)
			show_panels: true, 				//BOOLEAN - flag to show or hide panel portion of gallery
			show_panel_nav: false, 			//BOOLEAN - flag to show or hide panel navigation buttons
			enable_overlays: true, 			//BOOLEAN - flag to show or hide panel overlays
			
			panel_width: 580, 				//INT - width of gallery panel (in pixels)
			panel_height: 500, 				//INT - height of gallery panel (in pixels)
			panel_animation: 'slide', 		//STRING - animation method for panel transitions (crossfade,fade,slide,none)
			panel_scale: 'crop', 			//STRING - cropping option for panel images (crop = scale image and fit to aspect ratio determined by panel_width and panel_height, fit = scale image and preserve original aspect ratio)
			overlay_position: 'bottom', 	//STRING - position of panel overlay (bottom, top)
			pan_images: true,				//BOOLEAN - flag to allow user to grab/drag oversized images within gallery
			pan_style: 'drag',				//STRING - panning method (drag = user clicks and drags image to pan, track = image automatically pans based on mouse position
			pan_smoothness: 15,				//INT - determines smoothness of tracking pan animation (higher number = smoother)
			start_frame: 1, 				//INT - index of panel/frame to show first when gallery loads
			show_filmstrip: true, 			//BOOLEAN - flag to show or hide filmstrip portion of gallery
			show_filmstrip_nav: true, 		//BOOLEAN - flag indicating whether to display navigation buttons
			enable_slideshow: false,			//BOOLEAN - flag indicating whether to display slideshow play/pause button
			autoplay: false,				//BOOLEAN - flag to start slideshow on gallery load
			show_captions: true, 			//BOOLEAN - flag to show or hide frame captions	
			filmstrip_size: 3, 				//INT - number of frames to show in filmstrip-only gallery
			filmstrip_style: 'scroll', 		//STRING - type of filmstrip to use (scroll = display one line of frames, scroll filmstrip if necessary, showall = display multiple rows of frames if necessary)
			filmstrip_position: 'bottom', 	//STRING - position of filmstrip within gallery (bottom, top, left, right)
			frame_width: 100, 				//INT - width of filmstrip frames (in pixels)
			frame_height: 100, 				//INT - width of filmstrip frames (in pixels)
			frame_opacity: 0.5, 			//FLOAT - transparency of non-active frames (1.0 = opaque, 0.0 = transparent)
			frame_scale: 'crop', 			//STRING - cropping option for filmstrip images (same as above)
			frame_gap: 5, 					//INT - spacing between frames within filmstrip (in pixels)
			show_infobar: true,				//BOOLEAN - flag to show or hide infobar
			infobar_opacity: 1				//FLOAT - transparency for info bar
			});
		});
	</script>
	<style type="text/css">
		body { 
			margin: 2em; 
			font-family: Arial, Helvetica, sans-serif;
		}
	</style>
<body>
		<?php

	header("Content-Type:text/html; charset=utf-8");
	mysqli_query("SET NAMES 'utf8'");
	mysqli_query("SET CHARACTER_SET_CLIENT='utf8'");
	mysqli_query("SET CHARACTER_SET_RESULTS='utf8'");
	mysqli_query("SET COLLATION_CONNECTION='utf8_general_ci'");
	include("connect.php");
	$dog_id=$_REQUEST['id'];
	// 選出資料表2_dog中的該篇狗文
	$sql = "SELECT * FROM 2_dogs WHERE id='$dog_id'";
	$result = mysqli_query($connect,$sql) or die('MySQL query error');
	$row = mysqli_fetch_assoc($result);

	?>

	<h3><?php echo $row['name'];?></h3>
	<HR size="2" color="#1b6874">

	<ul id="myGallery">
	<li><img data-frame="<?php echo $row[photo]; ?>" src="<?php echo $row[photo]; ?>" title="<?php echo $row[name]; ?>" data-description="<?php echo $row[info]; ?> " />
            <li><img data-frame="images/dog_02.jpg" src="images/dog_02.jpg" title="豬豬" data-description="我是可愛的米格魯~豬豬^_^ " />
            <li><img data-frame="images/dog_03.jpg" src="images/dog_03.jpg" title="奇奇" data-description="我是咩咩的好朋友~奇奇:D " />
            <li><img data-frame="images/dog_04.jpg" src="images/dog_04.jpg" title="婷婷" data-description="法式鬥牛犬ˊˋ 婷婷" />
            <li><img data-frame="images/dog_05.jpg" src="images/dog_05.jpg" title="美美" data-description="可愛的哈士奇~~美美 " />
       
    </ul>

	<h3>介紹</h3>
	<HR size="2" color="#1b6874">
	<?php 
	echo "<p><span><img src='pawprint.jpg' width='25px' height='25px'/></span> 名字：".$row['name']."</br>
			<span><img src='pawprint.jpg' width='25px' height='25px'/></span> 品種：";
			if($row['breed']=='migo')
                  echo "米格魯";
                elseif ($row['breed']=='bull') {
                  echo "鬥牛犬";
                }
                elseif ($row['breed']=='husky') {
                  echo "哈士奇";
                }
                echo"<br>
		<span><img src='pawprint.jpg' width='25px' height='25px'/></span>  性別：";
                if($row['gender']=='F')
                  echo "女生";
                elseif ($row['gender']=='M')
                  echo "男生";
		echo " <br>
		<span><img src='pawprint.jpg' width='25px' height='25px'/></span>  年齡：".$row['year']."歲又".$row['month']."月</br>
		<span><img src='pawprint.jpg' width='25px' height='25px'/></span>  所在地：".$row['location']."</br>
		
	</p>
	<h3>簡介</h3>
	<HR size='2' color='#1b6874'>
	<p>".$row['info']."</p>";
	?>
	<p>
		<br>
		<a <?php echo "id='$dog_id' class='myButton' href='agreement.php?id=$dog_id'>"; ?>我要領養>>領養同意書</a>
		</br>
	</p>
</body>
</html>
