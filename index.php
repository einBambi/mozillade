<?php $site=$_GET['site']; ?>
<!DOCTYPE html>
<html dir="ltr" lang="de-DE" id="mozilla-de">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Die deutschsprachige Mozilla-Community &bull; <?=($site !='') ? ucwords($site) : 'mozilla.de' ?></title>
    <link rel="stylesheet" type="text/css" href="/css/styles.css" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="alternate" href="http://planet.mozilla.de/atom.xml" title="Mozilla.de Planet-Feed abonnieren" type="application/atom+xml">
    <!--[if lte IE 8]>
        <script src="/js/html5.js" type="text/javascript"></script>
    <![endif]-->
</head>
<body id="<?=($site == '') ? 'home' : $site ?>">
<div id="wrapper">

    <header>
        <nav id="headerbar" class="clearfix">
            <ul>
                <li><a href="http://www.mozilla-europe.org">mozilla-europe.org</a></li>
                <li><a href="http://www.mozilla.org">mozilla.org</a></li>
            </ul>
        </nav>
        <div id="header-wrapper" class="clearfix">
        	<a class="logo" href="/" title="Zur Startseite wechseln">
        	    <img src="/img/logos/mozilla.png" alt="Mozilla-Logo" />
    	    </a>
    	    <nav id="navigation">
                <ul>
<?php 

	$links = array( 
		0 => array( 
			'href' => '/', 
			'title' => 'Zur Startseite wechseln',
			'text' => 'Start'),		
		1 => array( 
			'href' => '/mitmachen/', 
			'title' => 'Möglichkeiten, bei Mozilla mitzumachen',
			'text' => 'Mitmachen!'),	
		2 => array( 
			'href' => '/kalender/', 
			'title' => 'Community-Kalender',
			'text' => 'Kalender'),		
		3 => array( 
			'href' => '/ueber/', 
			'title' => 'Mehr über Mozilla im deutschsprachigen Raum erfahren',
			'text' => 'Über Uns')
	);

	foreach ($links as $val) {
		if ($val['href'] != $_SERVER['REQUEST_URI']) {
			echo  "\t<li><a href=\"".$val['href']."\" title=\"".$val['title']."\">".$val['text']."</a></li>\n";
		} else {
			echo  "\t<li><span class=\"aktiv\">".$val['text']."</span></li>\n";
		}
	}
?>
                    <li><a href="http://planet.mozilla.de" title="Neuigkeiten aus der deutschsprachigen Mozilla-Welt lesen">Planet Mozilla (de)</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div id="content-wrapper" class="clearfix"> 
    
        <section id="content">
<?php require_once("inc/contents.php"); ?>        	    
        </section>
    
        <aside id="sidebar">
            <h2>Neuigkeiten <a href="http://planet.mozilla.de/atom.xml" title="Atom Feed abonnieren"><img src="/img/icons/feed.png" alt="Feed" /></a></h2>
            <dl id="planet">
<?php require_once("inc/planet.html"); ?>
            </dl>
            <p id="planetlink">&raquo; <a href="http://planet.mozilla.de">planet.mozilla.de</a></p>
        </aside> 
        
    </div>
    
    <footer>
        <div id="footer-wrapper">
            <p>Auch mozilla.de ist <a href="https://github.com/atopal/mozillade">quelloffen</a>.</p>
            <p class="copyright">Sofern nicht anders vermerkt, steht der Inhalt dieser Seite unter der <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution Share-Alike License v3.0</a> oder einer späteren Version. Mozilla®, mozilla.org®, Thunderbird®, SeaMonkey® und das Mozilla-Logo™ sind <a href="http://www.mozilla.org/foundation/trademarks/list.html">eingetragene Markenzeichen</a> der Mozilla Foundation.</p>
	       	<p><a href="/impressum/">Impressum</a></p>
        </div>
    </footer>
    
</div>
</body>
</html>
