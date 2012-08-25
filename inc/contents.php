<section id="content">
<?php

$whitelist = array("home", "hilfe", "impressum", "kalender", "mitmachen", "ueber"); 

if(isset($_GET['site'])) {
    
	$site = $_GET['site'];
    
    if(file_exists("contents/$site.php") && in_array($site, $whitelist)) {
        include("contents/$site.php");
    } else {
        include("contents/404.php");
    }

} else {
    include("contents/home.php");
}

?>
</section>
