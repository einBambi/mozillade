<?php

$planet = simplexml_load_file("http://planet.mozilla.de/atom.xml");
$i = 0;
$count = 5;

ob_start();

foreach ($planet->entry as $entry) {
	if ($i < $count) {
		echo "\t".'<dt><a class="post" href="'.$entry->link["href"].'">'.$entry->title.'</a></dt>'."\n";
		echo "\t".'<dd>von <a class="author" href="'.$entry->source->id.'">'.$entry->author->name.'</a></dd>'."\n";
		$i++;
	} else {
		break;
	}
}

$cache = fopen('planet.html', 'w');
fwrite($cache, ob_get_clean());
fclose($cache);

?>