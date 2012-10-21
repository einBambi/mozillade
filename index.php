<?php $site=htmlspecialchars($_GET['site'], ENT_QUOTES); ?>
<!DOCTYPE html>
<html dir="ltr" lang="de-DE" id="mozilla-de">
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Die deutschsprachige Mozilla-Community &bull; <?=($site !='') ? ucwords($site) : 'mozilla.de' ?></title>
    <link rel="stylesheet" type="text/css" href="/css/styles.css?ver=1.1" />
    <link href="/tabzilla.css" rel="stylesheet" />
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="alternate" href="http://planet.mozilla.de/atom.xml" title="Mozilla.de Planet-Feed abonnieren" type="application/atom+xml">
</head>
<body id="<?=($site == '') ? 'home' : $site ?>">
<div id="back">
<!-- <a href="http://www.mozilla.org/" id="tabzilla">mozilla</a> -->
<a href="/" id="tabzilla">mozilla</a>
<div id="wrapper">
    <nav id="headerbar" class="clearfix">
        <ul>
            <li><a href="http://www.mozilla.com/de/firefox/">Firefox</a></li>
            <li><a href="http://www.thunderbird-mail.de/">Thunderbird</a></li>
            <li><a href="http://www.mozilla.org">mozilla.org</a></li>
        </ul>
    </nav>
		<div style="text-align: center;">
        	<a href="/" style="text-decoration:none;"><h1>Wir sind <img src="/mozillade.png" width="492" height="85" alt="mozilla.de"/></h1></a>
            <h2>Die deutschsprachige Mozilla-Community</h2>
		</div>
    <header>
    	    <nav id="navigation">
                <ul>
<?php 

	$links = array( 
		0 => array( 
			'href' => '/',
			'id' => '/', 
			'title' => 'Zur Startseite wechseln',
			'text' => 'Start'),	
		1 => array( 
			'href' => '../hilfe/',
			'id' => 'hilfe', 
			'title' => 'Haben Sie Probleme mit Firefox & Co.? Wir helfen Ihnen weiter!',
			'text' => 'Hilfe'),
		2 => array( 
			'href' => '../mitmachen/', 
			'id' => 'mitmachen',
			'title' => 'Möglichkeiten, bei Mozilla mitzumachen',
			'text' => 'Mitmachen!'),	
		3 => array( 
			'href' => '../kalender/', 
			'id' => 'kalender',
			'title' => 'Community-Kalender',
			'text' => 'Events'),		
		4 => array( 
			'href' => '../ueber/', 
			'id' => 'ueber',
			'title' => 'Mehr über Mozilla im deutschsprachigen Raum erfahren',
			'text' => 'Über uns')
	);

	if(!$site) {
		$site = '/';
	}

	foreach ($links as $val) {
		if ($val['id'] != $site) {
			echo  "\t<li><a href=\"".$val['href']."\" title=\"".$val['title']."\">".$val['text']."</a></li>\n";
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
<!-- Skripte -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">
 $(document).ready(function()
 {
     setupAktivitaeten();
 });
 function setupAktivitaeten(){if($('.aktivitaet').length > 1){$('.aktivitaet:first').addClass('string').fadeIn(1000);setInterval('textVeraendern()', 3000);}}
function textVeraendern(){var string = $('#sachen > .string');if(string.next().length == 0){string.removeClass('string').fadeOut(1000);$('.aktivitaet:first').addClass('string').fadeIn(1000);}else{string.removeClass('string').fadeOut(1000);string.next().addClass('string').fadeIn(1000);}}
</script>
    <script type="text/javascript" src="/tabzilla.js"></script>
        <!--[if lte IE 8]>
        <script src="/js/html5.js" type="text/javascript"></script>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
    <![endif]-->
    <!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<!-- Ende -->
</body>
</html>
