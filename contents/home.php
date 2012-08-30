<?php

$projekte = array( 
	0 => array( 
		'link' => 'http://www.camp-firefox.de',
		'dllink' => 'http://www.mozilla.com/de/firefox/',
		'title' => 'Firefox',
		'img' => 'firefox',
		'text' => 'Firefox ist ein anpassbarer und sicherer Browser mit vielen Erweiterungen, der zur Förderung von Offenheit, Innovation und Chancen im Internet beitragen soll.'),
	1 => array( 
		'link' => 'http://www.thunderbird-mail.de',
		'dllink' => 'http://www.mozilla.com/de/thunderbird/',
		'title' => 'Thunderbird',
		'img' => 'thunderbird',
		'text' => 'Thunderbird, das E-Mail-Pendant zum Browser Firefox, lässt sich mittels zahlreicher Add-ons ganz leicht den eigenen Bedürfnissen anpassen.'),
	2 => array( 
		'link' => 'http://seamonkey.at/',
		'dllink' => 'http://seamonkey.at/download/',
		'title' => 'SeaMonkey',
		'img' => 'seamonkey',
		'text' => 'SeaMonkey ist ein nützliches und vielfäliges Gesamtpaket welches aus Browser, E-Mail, Newsgroups, Webseiten-Editor und Chat besteht.'),
	3 => array( 
		'link' => 'http://www.sunbird-kalender.de',
		'dllink' => 'http://www.sunbird-kalender.de/download/',
		'title' => 'Lightning',
		'img' => 'lightning',
		'text' => 'Lightning, entwickelt vom Mozilla Kalenderprojekt, erweitert Thunderbird und SeaMonkey um eine umfangreiche Termin- und Aufgabenverwaltung.'),		
	4 => array( 
		'link' => 'http://kompozer-web.de/',
		'dllink' => 'http://kompozer-web.de/',
		'title' => 'KompoZer',
		'img' => 'kompozer',
		'text' => 'KompoZer, der intuitive Webeditor mit grafischer Benutzeroberfläche und Echtzeitvorschau zum Erstellen von Internetseiten.')
);

?><img id="com" src="com22.jpg" alt="Gruppenfoto"/>
			<p class="pic"><div id="sachen"><div class="aktivitaet">Im Internet surfen...</div> <div class="aktivitaet">E-Mails schreiben...</div> <div class="aktivitaet">Termine verwalten...</div> <div class="aktivitaet">Webseiten erstellen...</div></div></p>
			<p class="pic">Täglich verwenden Millionen<br>Nutzer Anwendungen der<br>weltweiten Mozilla-Community – auch im deutschsprachigen Raum.</p>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
 $(document).ready(function()
 {
     setupAktivitaeten();
 });
 function setupAktivitaeten(){if($('.aktivitaet').length > 1){$('.aktivitaet:first').addClass('string').fadeIn(1000);setInterval('textVeraendern()', 3000);}}
function textVeraendern(){var string = $('#sachen > .string');if(string.next().length == 0){string.removeClass('string').fadeOut(1000);$('.aktivitaet:first').addClass('string').fadeIn(1000);}else{string.removeClass('string').fadeOut(1000);string.next().addClass('string').fadeIn(1000);}}
</script>

			<div id="projects-column">
			<section class="projects-block" id="apps">
        	<h2>Programme</h2>	
  <p class="intro">Auf den Seiten der Übersetzungsprojekte finden sich alle Informationen. Dort besteht auch die Möglichkeit, sich in Foren auszutauschen.</p>
    	<ul>
		  <?php
		  foreach($projekte as $val) {
		  ?>
		  <li>
	        <h3>
		      <a href="<?=$val['link']; ?>">
	            <img src="img/logos/<?=$val['img']; ?>.png" width="50" height="50" alt="<?=$val['title']; ?>-Logo" />
				<span class="programme"><?=$val['title']; ?></span>
			  </a>
			</h3>
	        <p class="programm_text"><?=$val['text']; ?></p>
	        <a class="button" href="<?=$val['dllink']; ?>">Download</a>
	      </li>
		  <?php } ?>
      </ul>
    </section>
</div>