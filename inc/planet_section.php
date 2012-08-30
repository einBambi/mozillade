<?php
// Sites that can have a planet entries with avatar:
$planetWithAvatar = array("home", "hilfe", "impressum", "ueber");
$noPlanet = array("404");

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
				else if(!in_array($site, $noPlanet))
					require_once("planet2.php");
			?>
		</aside> 
	</div>
</section>