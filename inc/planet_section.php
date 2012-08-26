<?php
// Sites that can have a planet entries with avatar:
$planetWithAvatar = array("home", "hilfe", "impressum", "ueber");

if(isset($_GET['site'])) {
    $site = $_GET['site'];
}
?>
<section id="pllt">
	<div id="plnt">
		<aside id="sidebar" class="programm5">
			<?php
				if(in_array($site, $planetWithAvatar))
					require_once("planet.php");
				else
					require_once("planet2.php");
			?>
		</aside> 
	</div>
</section>