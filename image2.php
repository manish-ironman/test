<?php

$ch = curl_init('https://isbnsearch.org/isbn/9780070260689');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

$dom = new DOMDocument;
libxml_use_internal_errors($result);
$dom->loadHTML($result);

$tags = $dom->getElementsByTagName('img');
 echo $tags;
for($i = 0; $i < $tags->length; $i++) {
	$grab = $tags->item($i);
	if(parse_url($grab->getAttribute('src'), PHP_URL_HOST) == 'images.isbndb.com') {
		echo $filteringPath = parse_url($grab->getAttribute('src'));
		if( !strpos($filteringPath['path'], 'users')) {
			echo '<img src=' . $grab->getAttribute('src') . ' width=800px /><br>';
		}
	}
}



