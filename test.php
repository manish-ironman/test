<?php
include('simple_html_dom.php');
$context = stream_context_create(
    array(
        "http" => array(
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
        )
    )
);

  echo  $html= file_get_html("https://isbnsearch.org/isbn/9780070260689", false, $context);
// $html = file_get_html('https://isbnsearch.org');
// echo $html->find('title',0)->plaintext;

// $html=file_get_html("https://en.wikipedia.org/wiki/PHP");
// echo $html->find('table.infobox',0)->innertext;

// $html=file_get_html("https://www.google.com/");

//
?>