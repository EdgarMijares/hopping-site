<?php
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
		header('Location: login.php');
	}

  if (isset($_SESSION['id_place']) && isset($_SESSION['placename'])) {
    $idPlace = $_SESSION['id_place'];
		$thePlaceName = $_SESSION['placename'];
    echo "<script>var idPlace = $idPlace;</script>";
		echo "<script>var placeName = '$thePlaceName';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Feed</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="icon" href="webicons/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/admin_style.css">
	<link rel="stylesheet" type="text/css" href="css/footer_style.css">
  <script src="https://www.gstatic.com/firebasejs/5.5.1/firebase.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/functions.js"></script>
	<script type="text/javascript" src="js/feed.js"></script>
</head>
<body>
	<div id="big-container">
		<?php include('_includes/side_menu.php'); ?>
		<div id="content">
			<img id="mini-logo-hopping" src="webicons/imagotipo_hopping_white_background.png">
			<div id="promos-panel">
				<h1 class="section-title">Feed</h1>


          <div class="cell-feed" id="filesubmit">
            <img class="cell-feed-image" src="" id="img-prev_1">
            <button type="button"></button>
            <input type="file" id="file-select_1" accept="image/*"/>
            <button id="file-submit_1">Subir</button>
            <button type="button" class="delete-pic" id="delete_btn_1"><img src="webicons/delete-icon.png" class="delete-icon-class" id="delete_pic_1"></button>
          </div>

          <div class="cell-feed" id="filesubmit">
            <img class="cell-feed-image" src="" id="img-prev_2">
            <button type="button"></button>
            <input type="file" id="file-select_2" accept="image/*"/>
            <button id="file-submit_2">Subir</button>
            <button type="button" class="delete-pic" id="delete_btn_2"><img src="webicons/delete-icon.png" class="delete-icon-class" id="delete_pic_2"></button>
          </div>

          <div class="cell-feed" id="filesubmit">
            <img class="cell-feed-image" src="" id="img-prev_3">
            <button type="button"></button>
            <input type="file" id="file-select_3" accept="image/*"/>
            <button id="file-submit_3">Subir</button>
            <button type="button" class="delete-pic" id="delete_btn_3"><img src="webicons/delete-icon.png" class="delete-icon-class" id="delete_pic_3"></button>
          </div>

          <div class="cell-feed" id="filesubmit">
            <img class="cell-feed-image" src="" id="img-prev_4">
            <button type="button"></button>
            <input type="file" id="file-select_4" accept="image/*"/>
            <button id="file-submit_4">Subir</button>
            <button type="button" class="delete-pic" id="delete_btn_4"><img src="webicons/delete-icon.png" class="delete-icon-class" id="delete_pic_4"></button>
          </div>

			</div>
		</div>
		<!--end content-->

		<?php include('_includes/footer.php'); ?>
	</div>
	<!--end big container-->
</body>
</html>
