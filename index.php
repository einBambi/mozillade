<?php ini_set('display_errors', 1); ?>
<!DOCTYPE html>
<html dir="ltr" lang="de-DE" id="mozilla-de">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <title>Deutschsprachige Mozilla Community &bull; mozilla.de</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="shortcut icon" href="/favicon.ico" />
</head>
<body>
<div id="wrapper">

    <header class="clearfix">
        <nav id="headerbar" class="clearfix">
            <ul>
                <li class="first"><a href="http://www.mozilla-europe.de">mozilla-europe.org</a></li>
                <li><a href="http://www.mozilla.org">mozilla.org</a></li>
                <li class="last"></li>
            </ul>
        </nav>
        <div id="header-wrapper">
        	<a class="logo" href="/" title="Home">
        	    <img src="img/logos/mozilla.png" alt="Mozilla-Logo" />
    	    </a>
    	    <nav id="navigation">
                <ul>
                    <li><a href="?site=mitmachen">Mitmachen!</a></li>
                    <li><a href="?site=kalender">Community-Kalender</a></li>
                    <li><a href="?site=ueber">Über Mozilla DE</a></li>
                    <li><a href="http://planet.mozilla.de/">Planet Mozilla</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div id="content-wrapper" class="clearfix"> 
    
        <section id="content">
<?php require_once("inc/contents.php"); ?>        	    
        </section>
    
        <aside id="sidebar">
            <h2>Neuigkeiten <a href="http://planet.mozilla.de/atom.xml" title="Atom Feed abonnieren"><img src="img/icons/feed.png" alt="Feed" /></a></h2>
            <dl id="planet">
<?php require_once("inc/planet.html"); ?>
            </dl>
            <p id="planetlink">&raquo; <a href="http://planet.mozilla.de">planet.mozilla.de</a></p>
        </aside> 
        
    </div>
    
    <footer>
        <div id="footer-wrapper">
            <p>Auch Mozilla.de ist <a href="https://github.com/atopal/mozillade">quelloffen</a>.</p>
            <p class="copyright">Sofern nicht anders vermerkt, steht der Inhalt dieser Seite unter der <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution Share-Alike License v3.0</a> oder einer späteren Version.</p>
            <p class="copyright">Mozilla®, mozilla.org®, Thunderbird®, Seamonkey® und das Mozilla logo™ sind <a href="http://www.mozilla.org/foundation/trademarks/list.html">eingetragene Markenzeichen</a> der Mozilla Foundation.</p>
        	<p><a href="?site=impressum">Impressum</a></p>
        </div>
    </footer>
    
</div>
</body>
</html>