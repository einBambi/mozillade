			<h2 class="programm9">Auf den Projektseiten fündig geworden?</h2>
			<div class="intro intro2">
				<p>Schön, wenn wir ein Problem lösen oder eine Frage beantworten konnten. All diese Angebote sind Ergebnis der Arbeit von freiwilligen Helfern.
				Sie arbeiten in ihrer Freizeit daran, das deutschsprachige Informationsangebot rund um Mozilla auszubauen und zu verbessern - 
				ein wertvoller Service für Millionen von Nutzern!</p>
			</div>
			<h3 class="lust">Lust, dabei zu sein?</h3>
			<p class="projekte">Unsere Projekte bieten einige vielfältige Möglichkeiten, wie sich wirklich <span class="underline">jeder</span> aktiv einbringen kann:</p>
			<div id="mitmachenul">
			<?php

			$projects = array( 
				0 => array( 
					'name' => 'Firefox', 
					'desc' => 'Die deutsche Firefox-Community wird zu 100% von Freiwilligen vorangetrieben. Wir übersetzen den Browser, Hilfedokumente sowie Online-Kampagnen
					und bieten persönliche Hilfe im Forum für über 30 Millionen deutschsprachige Anwender. Wir suchen jederzeit nach engagierten Firefox-Anwendern,
					die mithelfen möchten und freuen uns über jeden Beitrag im <a href="http://www.camp-firefox.de/forum/viewforum.php?f=2">Forum</a>.',
					'url' => 'http://www.camp-firefox.de'),		
				1 => array(
					'name' => 'Thunderbird',
					'desc' => 'Die deutsche Thunderbird-Community verfügt über ein exzellentes Forum und eine ebenso gelungene Dokumentation. 
				Beides beruht vollständig auf der Arbeit von Freiwilligen, lebt also vom Feedback und der Mitarbeit von interessierten Thunderbird-Anwendern.
				Das Team freut sich daher über jeden Beitrag, der <a href="http://www.thunderbird-mail.de/forum/">ins Forum</a> gestellt wird.',
					'url' => 'http://www.thunderbird-mail.de'),
				2 => array(
					'name' => 'SeaMonkey',
					'desc' => 'Das SeaMonkey-Projekt besteht aus freiwilligen Helfern, die sich engagieren, um das Internet-Paket weiter zu entwickeln.
					Wir suchen immer Verstärkung für diese Gemeinschaft und jeder Handgriff zählt - sei es, verschiedene Versionen zu testen,
				anderen bei Fragen zu helfen, Fehler zu melden oder einfach
				<a href="http://seamonkey.at/">SeaMonkey weiter zu empfehlen</a>. Es gibt für jeden eine Möglichkeit zu helfen - auch für Dich!', 
					'url' => 'http://seamonkey.at'),
				3 => array(
					'name' => 'Lightning',
					'desc' => 'Das <a href="http://www.sunbird-kalender.de/index.php">deutsche Übersetzungsprojekt von Lightning</a> freut sich immer über Hilfe!
				Ob Mitarbeit im Forum, Vorschläge zur Übersetzung, Aktualisierung der FAQ oder Vorantreiben der Dokumentationsbemühungen - wir bieten viele Chancen zur Beteiligung.
				Interesse? Jeder ist eingeladen, <a href="http://www.thunderbird-mail.de/forum/viewforum.php?f=46">im Forum</a> mitzuhelfen, Lightning für deutschsprachige Nutzer
				noch besser zu machen!',
					'url' => 'http://www.sunbird-kalender.de/index.php'),
				4 => array(
					'name' => 'SUMO',
					'desc' => 'SUMO ist die Abkürzung von <a href="https://support.mozilla.org/de/home">SUpport.MOzilla.org</a>. Die Aufgabe des SUMO-Projekts ist es, Firefox-Nutzern bei Problemen
 					und Fragen weiterzuhelfen. Es werden besonders Übersetzer benötigt, die die Wissensdatenbank übersetzen und vorhandene Inhalte aktuell halten möchten.
				  	Der aktuelle Stand kann in der <a href="http://support.mozilla.com/de/localization">Übersetzungsübersicht</a> eingesehen werden.',
					'url' => 'http://support.mozilla.com/de/'),
				5 => array(
					'name' => 'MDN',
					'desc' => 'Das <a href="http://developer.mozilla.org/de/">Mozilla Developer Network</a> unterstützt die Entwicklung von Firefox und dem Web mit reichhaltiger, 
					sorgfältiger und aktueller Dokumentation über Firefox, Mozilla und vielen Webtechnologien. Das Wiki ermöglicht es jedem, dabei zu helfen, die Seiten aktuell zu halten und ins Deutsche zu übersetzen.',
					'url' => 'http://developer.mozilla.org/de/'),
				6 => array(
					'name' => 'BabelZilla',
					'desc' => '<a href="http://www.babelzilla.org/">BabelZilla</a> versteht sich als Schnittstelle zwischen Entwicklern und Übersetzern von Erweiterungen für Anwendungen aus der Mozilla-Familie.
 				Freiwillige aus aller Welt helfen dabei, möglichst viele Erweiterungen zu übersetzen. Selbstverständlich haben wir auch ein <a href="http://www.babelzilla.org/forum/index.php">deutschsprachiges
				Forum</a> und freuen uns über neue Freiwillige zum Übersetzen oder Korrekturlesen von Übersetzungen.',
					'url' => 'http://www.babelzilla.org/'),
				7 => array(
					'name' => 'KompoZer',
					'desc' => 'Die deutschsprachige KompoZer-Gemeinschaft leistet Hilfestellung bei allen Fragen rund um die Webseitenerstellung mit KompoZer.
				Auf <a href="http://kompozer-web.de/">kompozer-web.de</a> findet ihr Informationen, Screenshots und Links zu aktuellen und zukünftigen Versionen.
				Neben Hilfestellung für Anfänger und Fortgeschrittene werden im Forum auch kostenlose Kurse angeboten. 
				Wir freuen uns über Beiträge!',
					'url' => 'http://kompozer-web.de/'),
				);
			
			//shuffle($projects);			

			foreach ($projects as $val) {	
			
			?>

			<ul class="mitmachen clearfix" id="<?=strtolower($val['name']); ?>">
				<li>
				<h3><a href="<?=$val['url']; ?>"><img src="/img/logos/<?=strtolower($val['name']); ?>.png" alt="<?=$val['name']; ?>-Logo" />
				<span class="programme"><?=$val['name']; ?></span>
				</a></h3>
					<p class="lah"><?=$val['desc']; ?></p>
				</li>
			</ul>
			<?php
			}
			?>
			</div>
<br><br><br>