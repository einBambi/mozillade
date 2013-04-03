<?php
	$helpwith = array( 
		0 => array( 
			'name' => 'Firefox', 
			'btnlabel' => 'Forum',
			'url' => 'http://www.camp-firefox.de/forum/',
			'logo' => 'firefox'),
		1 => array( 
			'name' => 'Firefox-Chat', 
			'btnlabel' => 'Betreten',
			'url' => 'http://widget00.mibbit.com/?settings=ac94eecf36f16bd1854e7a27ad5d6562&amp;server=irc.mozilla.org&amp;channel=%23firefox.de&amp;customprompt=Firefox-Chat%20betreten&amp;nick=',
			'logo' => 'irc'),
		2 => array(
			'name' => 'Thunderbird',
			'btnlabel' => 'Forum',
			'url' => 'http://www.thunderbird-mail.de/forum/',
			'logo' => 'thunderbird'),
		3 => array( 
			'name' => 'Thunderbird-Chat', 
			'btnlabel' => 'Betreten',
			'url' => 'https://widget00.mibbit.com/?settings=ac94eecf36f16bd1854e7a27ad5d6562&amp;server=irc.mozilla.org&amp;channel=%23thunderbird.de&amp;customprompt=Thunderbird-Chat%20betreten&amp;nick=',
			'logo' => 'irc'),
		4 => array( 
			'name' => 'SeaMonkey', 
			'btnlabel' => 'Hilfe',
			'url' => 'http://seamonkey.at/support.html',
			'logo' => 'seamonkey'),
		5 => array(
			'name' => 'Lightning',
			'btnlabel' => 'Forum', 
			'url' => 'http://www.thunderbird-mail.de/forum/viewforum.php?f=46',
			'logo' => 'lightning'),
		6 => array(
			'name' => 'KompoZer',
			'btnlabel' => 'Forum',
			'url' => 'http://www.kompozer-web.de/forum/',
			'logo' => 'kompozer'),
		7 => array(
			'name' => 'Entwickler',
			'btnlabel' => 'MDN',
			'url' => 'http://developer.mozilla.org/de/',
			'logo' => 'mdn'),
	);
?>
<h6 class="ml3">Du brauchst Hilfe?</h6>
<p id="uebertext">Wenn sich Firefox, Thunderbird &amp; Co. nicht richtig benehmen und deshalb langsam sind, abstürzen oder andere Probleme bereiten, helfen wir Dir gerne weiter. Das Einzige, was Du machen musst, ist uns zu kontaktieren - entweder über Foren oder über Chat. Abgesehen von <a href="https://support.mozilla.org/de/home">support.mozilla.org</a> gibt es weitere hilfreiche Seiten:</p>
<h2>Hier findest Du uns:</h2><br><br>
<div class="hilfe">
    <table class="t1"><tbody>
		<?php
		$count = 0;
		$tdclasscount = 0;
		$newline = false;
		foreach($helpwith as $val) {
			$count++;
			$newline = !$newline;
			if($count % 2 != 0)
				$tdclasscount++;
		?>
		<?php if($newline == true) echo "<tr>"; ?>
		<td style="vertical-align: middle;" class="td<?=$tdclasscount ?>">
		<ul>
		  <li>
			<h3>
		    <img src="/img/logos/<?=$val['logo'];?>.png" class="picex" alt="C" />
		      <span class="programme programm2"><?=$val['name']; ?></span>
			  
			</h3>
			<a class="button programm3" href="<?=$val['url']; ?>"><?=$val['btnlabel']; ?></a>
		  </li>
		</ul>
		</td>
		<?php if($newline == 0) echo "</tr>"; ?>
		<?php } ?>
    </tbody></table>
</div><br>