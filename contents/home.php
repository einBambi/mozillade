<img id="com" src="com22.jpg"/>
			<p id="pic"><div id="things"><div class="textItem">Im Internet surfen...</div> <div class="textItem">E-Mails schreiben...</div> <div class="textItem">Termine verwalten...</div> <div class="textItem">Webseiten erstellen...</div></div></p>
			<p id="pic">Täglich verwenden Millionen<br>Nutzer Anwendungen der<br>weltweiten Mozilla-Community – auch im deutschsprachigen Raum.</p>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
 $(document).ready(function()
 {
     setupRotator();
 });
 function setupRotator()
 {
     if($('.textItem').length > 1)
     {
         $('.textItem:first').addClass('current').fadeIn(1000);
         setInterval('textRotate()', 3000);
     }
 }
     function textRotate()
     {
         var current = $('#things > .current');
         if(current.next().length == 0)
         {
             current.removeClass('current').fadeOut(1000);
             $('.textItem:first').addClass('current').fadeIn(1000);
         }
         else
         {
             current.removeClass('current').fadeOut(1000);
             current.next().addClass('current').fadeIn(1000);
         }
     }
</script>

			<div id="projects-column">
			<section class="projects-block" id="apps">
        	<h2>Projekte</h2>	
  <p class="intro">Auf den Seiten der Übersetzungsprojekte finden sich alle Informationen. Dort besteht auch die Möglichkeit, sich in Foren auszutauschen.</p>
    	<ul>
        <li>
            <h3><a href="http://www.camp-firefox.de">
            <img src="/img/logos/firefox.png" width="50px" height="50px" alt="Firefox-Logo" />
			Firefox
			</a></h3>
                <p>Firefox ist ein anpassbarer und sicherer Browser mit vielen Erweiterungen, der zur Förderung von Offenheit, Innovation und Chancen im Internet beitragen soll.</p>
      <a class="button" href="http://www.mozilla.com/de/firefox/">Download</a>
      </li>
      <li>
      <h3><a  href="http://www.thunderbird-mail.de">
      <img src="/img/logos/thunderbird.png" width="50px" height="50px" alt="Thunderbird-Logo" />
            Thunderbird
            </a></h3>
                <p>Thunderbird, das E-Mail-Pendant zum Browser Firefox, lässt sich mittels zahlreicher Add-ons ganz leicht den eigenen Bedürfnissen anpassen.</p>
            <a class="button" href="http://www.mozilla.com/de/thunderbird/">Download</a>
      </li>
       <li>
       <h3><a href="http://seamonkey.at/"><img src="/img/logos/seamonkey.png" width="50px" height="50px" alt="SeaMonkey-Logo" />
            SeaMonkey
            </a></h3>
                <p>SeaMonkey ist ein Gesamtpaket welches aus Browser, E-Mail, Newsgroups, Webseiten-Editor und Chat besteht.</p>
            <a class="button" href="http://seamonkey.at/download/">Download</a>
      </li>
       <li>
            <h3> <a href="http://www.sunbird-kalender.de"><img src="/img/logos/lightning.png" width="50px" height="50px" alt="Lightning-Logo" />
            Lightning
            </a></h3>
                <p>Lightning, entwickelt vom Mozilla Kalenderprojekt, erweitert Thunderbird und SeaMonkey um eine umfangreiche Termin- und Aufgabenverwaltung.</p>
              <a class="button" href="http://www.sunbird-kalender.de/downloads.php">Download</a>
        </li>
        <li>
           <h3><a href="http://kompozer-web.de/"><img src="/img/logos/kompozer.png" width="50px" height="50px" alt="Kompozer-Logo" />
            KompoZer</a></h3>
                <p>KompoZer, der intuitive Webeditor mit grafischer Benutzeroberfläche und Echtzeitvorschau zum Erstellen von Internetseiten.</p>
           <a class="button" href="http://kompozer-web.de/">Download</a>
     </li>
      </ul>
    </section>
</div>