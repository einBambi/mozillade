<?php $site=htmlspecialchars($_GET['site'], ENT_QUOTES); ?>
<!DOCTYPE html>
<html dir="ltr" lang="de-DE" id="mozilla-de">
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Die deutschsprachige Mozilla-Community &bull; <?=($site !='') ? ucwords($site) : 'mozilla.de' ?></title>
    <link rel="stylesheet" type="text/css" href="css/styles.css?ver=1.1" />
    <link href="tabzilla.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="alternate" href="http://planet.mozilla.de/atom.xml" title="Mozilla.de Planet-Feed abonnieren" type="application/atom+xml">
    <script type="text/javascript" src="tabzilla.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <!--[if lte IE 8]>
        <script src="/js/html5.js" type="text/javascript"></script>
    <![endif]-->
</head>
<body id="<?=($site == '') ? 'home' : $site ?>">
<div id="back">
<!-- <a href="http://www.mozilla.org/" id="tabzilla">mozilla</a> -->
<a href="/" id="tabzilla">mozilla</a>
<div id="wrapper">
    <nav id="headerbar" class="clearfix">
        <ul>
            <li><a href="http://www.mozilla.com/de/firefox/">Firefox</a></li>
            <li><a href="http://www.mozilla.org">mozilla.org</a></li>
        </ul>
    </nav>
		<div style="text-align: center;">
        	<h1>Wir sind <img src="mozillade.png" width="492" height="85" alt="logo"/></h1>
            <h2>Die deutschsprachige Mozilla-Community</h2>
		</div>
    <header>
    	    <nav id="navigation">
                <ul>
<?php 

	$links = array( 
		0 => array( 
			'href' => 'home', 
			'title' => 'Zur Startseite wechseln',
			'text' => 'Start'),	
		1 => array( 
			'href' => 'hilfe', 
			'title' => 'Haben Sie Probleme mit Firefox & Co.? Wir helfen Ihnen weiter!',
			'text' => 'Hilfe'),
		2 => array( 
			'href' => 'mitmachen', 
			'title' => 'Möglichkeiten, bei Mozilla mitzumachen',
			'text' => 'Mitmachen!'),	
		3 => array( 
			'href' => 'kalender', 
			'title' => 'Community-Kalender',
			'text' => 'Events'),		
		4 => array( 
			'href' => 'ueber', 
			'title' => 'Mehr über Mozilla im deutschsprachigen Raum erfahren',
			'text' => 'Über Uns'),
		5 => array( 
			'href' => '404', 
			'title' => 'Fehlerseite',
			'text' => '404 (Test)')
	);

	if(!$site) {
		$site = 'home';
	}

	foreach ($links as $val) {
		if ($val['href'] != $site) {
			echo  "\t<li><a href=\"?site=".$val['href']."\" title=\"".$val['title']."\">".$val['text']."</a></li>\n";
		} else {
			echo  "\t<li><span class=\"aktiv\">".$val['text']."</span></li>\n";
		}
	}
?>
                    <li><a href="http://planet.mozilla.de" title="Neuigkeiten aus der deutschsprachigen Mozilla-Welt lesen">Planet Mozilla (de)</a></li>
                </ul>
            </nav>
    </header>
    
<div id="content-wrapper" class="clearfix"> 
    <?php require_once("inc/contents.php"); ?>
    <?php require_once("inc/planet_section.php"); ?>
</div>
<?php require_once("inc/footer.php"); ?>
</div>
</div>
</body>
</html>
