<img id="com" src="com22.jpg"/>
			<p id="pic"><div id="sachen"><div class="aktivitaet">Im Internet surfen...</div> <div class="aktivitaet">E-Mails schreiben...</div> <div class="aktivitaet">Termine verwalten...</div> <div class="aktivitaet">Webseiten erstellen...</div></div></p>
			<p id="pic">Täglich verwenden Millionen<br>Nutzer Anwendungen der<br>weltweiten Mozilla-Community – auch im deutschsprachigen Raum.</p>

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
        <li>
            <h3><a href="http://www.camp-firefox.de">
            <img src="/img/logos/firefox.png" width="50px" height="50px" alt="Firefox-Logo" />
			<h3 style="font-weight:300; font-family:'Open Sans Light',sans-serif; margin-top:-6px; font-size:22px;">Firefox</h3>
			</a></h3>
                <p>Firefox ist ein anpassbarer und sicherer Browser mit vielen Erweiterungen, der zur Förderung von Offenheit, Innovation und Chancen im Internet beitragen soll.</p>
      <a class="button" href="http://www.mozilla.com/de/firefox/">Download</a>
      </li>
      <li>
      <h3><a  href="http://www.thunderbird-mail.de">
      <img src="/img/logos/thunderbird.png" width="50px" height="50px" alt="Thunderbird-Logo" />
            <h3 style="font-weight:300; font-family:'Open Sans Light',sans-serif; margin-top:-6px; font-size:22px;">Thunderbird</h3>
            </a></h3>
                <p>Thunderbird, das E-Mail-Pendant zum Browser Firefox, lässt sich mittels zahlreicher Add-ons ganz leicht den eigenen Bedürfnissen anpassen.</p>
            <a class="button" href="http://www.mozilla.com/de/thunderbird/">Download</a>
      </li>
       <li>
       <h3><a href="http://seamonkey.at/"><img src="/img/logos/seamonkey.png" width="50px" height="50px" alt="SeaMonkey-Logo" />
            <h3 style="font-weight:300; font-family:'Open Sans Light',sans-serif; margin-top:-6px; font-size:22px;">SeaMonkey</h3>
            </a></h3>
                <p>SeaMonkey ist ein Gesamtpaket welches aus Browser, E-Mail, Newsgroups, Webseiten-Editor und Chat besteht.</p>
            <a class="button" href="http://seamonkey.at/download/">Download</a>
      </li>
       <li>
            <h3> <a href="http://www.sunbird-kalender.de"><img src="/img/logos/lightning.png" width="50px" height="50px" alt="Lightning-Logo" />
            <h3 style="font-weight:300; font-family:'Open Sans Light',sans-serif; margin-top:-6px; font-size:22px;">Lightning</h3>
            </a></h3>
                <p>Lightning, entwickelt vom Mozilla Kalenderprojekt, erweitert Thunderbird und SeaMonkey um eine umfangreiche Termin- und Aufgabenverwaltung.</p>
              <a class="button" href="http://www.sunbird-kalender.de/downloads.php">Download</a>
        </li>
        <li>
           <h3><a href="http://kompozer-web.de/"><img src="/img/logos/kompozer.png" width="50px" height="50px" alt="Kompozer-Logo" />
            <h3 style="font-weight:300; font-family:'Open Sans Light',sans-serif; margin-top:-6px; font-size:22px;">KompoZer</h3>
            </a></h3>
                <p>KompoZer, der intuitive Webeditor mit grafischer Benutzeroberfläche und Echtzeitvorschau zum Erstellen von Internetseiten.</p>
           <a class="button" href="http://kompozer-web.de/">Download</a>
     </li>
      </ul>
    </section>
</div>