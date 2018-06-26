<div id="side-menu">
	<div id="profile-image-container">
		<?php
		if (!isset($_SESSION['profileimage']) || !isset($_SESSION['placename']) || $_SESSION['save-pending']) {
			include("logic/conection.php");
			$query = "SELECT profileimage, placename, id_place, latitude, longitude FROM places WHERE id_user='".$_SESSION['id_user']."'";
			$result = mysqli_query($conection, $query);
			$array = mysqli_fetch_array($result);
			$_SESSION['profileimage'] = $array['profileimage'];
			$_SESSION['placename'] = $array['placename'];
			$_SESSION['id_place'] = $array['id_place'];
			$_SESSION['save-pending'] = false;
			$_SESSION['latitude'] = $array['latitude'];
			$_SESSION['longitude'] = $array['longitude'];
		}
		echo "<script type='text/javascript'> latitude=".$_SESSION['latitude']."; longitude=".$_SESSION['longitude']." </script>";
		echo "<img id='profile-thumnail' src='profile-images/".$_SESSION['profileimage']."'>";
		?>
	</div>
	
	<div id="place-name-container">
		<h1 class="place-name">
			<?php
				echo $_SESSION['placename'];
			?>
		</h1>
	</div>

	<div id="description-container"></div>

	<ul id="side-menu-items">
		<li><a href="#" id="link-place-overview">Overview</a></li>
		<li><a href="overview.php" id="link-account-details">Detalles de Cuenta</a></li>
		<li><a href="promos.php" id="link-promos">Promos</a></li>
		<li><a href="options.php">Opciones</a></li>
	</ul>	
</div>
