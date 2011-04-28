<?php

if(isset($_GET['site'])) {
    
	$site = $_GET['site'];
    
    if(file_exists("contents/$site.php")) {
        include("contents/$site.php");
    } else {
        include("contents/404.php");
    }

} else {
    include("contents/home.php");
}

?>