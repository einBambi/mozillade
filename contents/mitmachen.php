            <h1>In der deutschsprachigen Mozilla-Community mitwirken</h1>
			<h2>Auf den Projektseiten fündig geworden?</h2>
			<div class="intro">
				<p>Schön, wenn wir ein Problem lösen oder eine Frage beantworten konnten. All diese Angebote sind Ergebnis der Arbeit von freiwilligen Helfern.
				Sie arbeiten in ihrer Freizeit daran, das deutschsprachige Informationsangebot rund um Mozilla auszubauen und zu verbessern - 
				<strong>ein wertvoller Service für Millionen von Nutzern!</strong></p>
			</div>
			<h2>Lust, dabei zu sein?</h2>
			<p>Unsere Projekte bieten einige Möglichkeiten, wie sich wirklich <span style="text-decoration: underline">jeder</span> aktiv einbringen kann:</p>
			<?php

			$projects = array( 
				0 => array( 
					'name' => 'Firefox', 
					'desc' => 'Die deutsche Firefox-Community wird zu 100% von Freiwilligen vorangetrieben. Wir übersetzen den Browser, Hilfedokumente und Online-Kampagnen,
					und wir bieten persönliche Hilfe im Forum für über 30 Millionen deutschsprachige Anwender. Wir suchen jederzeit nach engagierten Firefox-Anwendern,
					die mithelfen möchten, speziell zur Mitarbeit im Forum und zum Korrekturlesen von Übersetzungen. Wir koordinieren die Arbeit der deutschen Community im 
					<a href="http://www.camp-firefox.de/forum/viewforum.php?f=2">Forum</a> und freuen uns über jeden Beitrag.'),		
				1 => array(
					'name' => 'Thunderbird',
					'desc' => 'Die deutsche Thunderbird-Community verfügt über ein exzellentes Forum und eine ebenso gelungene Dokumentation. 
				Beides beruht vollständig auf der Arbeit von Freiwilligen, lebt also vom Feedback und der Mitarbeit von interessierten Thunderbird-Anwendern.
				Das Team freut sich daher über jeden Beitrag, der <a href="http://www.thunderbird-mail.de/forum/">ins Forum</a> gestellt wird.'),
				2 => array(
					'name' => 'SeaMonkey',
					'desc' => 'Das SeaMonkey-Projekt besteht vollständig aus freiwilligen Helfern, die sich engagieren, um das Internet-Paket zu testen, weiter zu entwickeln
				und den Benutzern zu präsentieren. Wir suchen immer Verstärkung für diese Gemeinschaft und jeder Handgriff zählt - sei es, Beta- oder "Nightly"-Versionen zu testen,
				anderen bei Fragen zu helfen, Fehler zu melden, Designs zu entwerfen, selbst an Verbesserungen zu arbeiten oder einfach
				<a href="http://seamonkey.at/">SeaMonkey weiter zu empfehlen</a>. Es gibt für jeden eine Möglichkeit zu helfen - auch für Sie/dich!'), 
				3 => array(
					'name' => 'Lightning',
					'desc' => 'Das <a href="http://www.sunbird-kalender.de">deutsche Übersetzungsprojekt von Lightning</a> freut sich immer über Unterstützung!
				Ob Mitarbeit im Forum, Vorschläge zur Übersetzung, Aktualisierung der FAQ oder Vorantreiben der Dokumentationsbemühungen - wir bieten viele Chancen zur Beteiligung.
				Interesse? Jeder ist eingeladen, sich <a href="http://www.sunbird-kalender.de/forum/">im Forum</a> zu melden und dabei mitzuhelfen, Lightning für deutschsprachige Nutzer
				noch besser werden zu lassen!'),
				4 => array(
					'name' => 'SUMO',
					'desc' => 'SUMO ist die Abkürzung von SUpport.MOzilla.com. Die Aufgabe des SUMO-Projekts ist es, Firefox-Nutzern bei Problemen und Fragen weiterzuhelfen. Es werden besonders Übersetzer benötigt, die die Wissensdatenbank übersetzen und vorhandene Inhalte aktuell halten möchten. Der aktuelle Stand kann in der <a href="http://support.mozilla.com/de/localization">Übersetzungsübersicht</a> eingesehen werden.'),
				5 => array(
					'name' => 'MDN',
					'desc' => 'Das <a href="https://developer.mozilla.org/de/">Mozilla Developer Network</a> unterstützt die Entwicklung von Firefox und dem Web mit reichhaltiger, 
					sorgfältiger und aktueller Dokumentation über Firefox, Mozilla und vielen Webtechnologien. Das Wiki ermöglicht es jedem, dabei zu helfen, die Seiten aktuell zu halten und ins Deutsche zu übersetzen.'),
				6 => array(
					'name' => 'BabelZilla',
					'desc' => '<a href="http://www.babelzilla.org/">BabelZilla</a> versteht sich als Schnittstelle zwischen Entwicklern und Übersetzern von Erweiterungen für Anwendungen aus der Mozilla-Familie.
 				Freiwillige aus aller Welt helfen dabei, möglichst viele Erweiterungen zu übersetzen. Selbstverständlich haben wir auch ein deutschsprachiges
				Forum und freuen uns über neue Freiwillige zum Übersetzen und/oder Korrekturlesen von Übersetzungen.
'),
				7 => array(
					'name' => 'KompoZer',
					'desc' => 'Die deutschsprachige KompoZer-Gemeinschaft leistet Hilfestellung bei allen Fragen rund um die Webseitenerstellung mit KompoZer.
				Auf <a href="http://kompozer-web.de/">http://www.kompozer-web.de</a> findet ihr Informationen, Screenshots und Links zu aktuellen und zukünftigen Versionen.
				Neben gezielter Hilfestellung für Anfänger und Fortgeschrittene werden im Forum auch kostenlose Kurse angeboten. 
				Wir freuen uns über Beiträge und Mitarbeit von euch!'),
				);
			
			shuffle($projects);			

			foreach ($projects as $val) {	
			
			?>

			<dl class="mitmachen clearfix" id="<?=strtolower($val['name']); ?>">
				<dt>
					<span class="project-name"><?=$val['name']; ?></span>
					<img src="/img/logos/<?=strtolower($val['name']); ?>.png" alt="<?=$val['name']; ?>-Logo" />
				</dt>
				<dd>
					<?=$val['desc']; ?>
				</dd>
			</dl>

			<?php
			}
			?>
