<?php
require 'scraperwiki.php';
require 'scraperwiki/simple_html_dom.php'; 
$MAX_ID = 3;


$html_content = scraperwiki::scrape("http://www.mciindia.org/ViewDetails.aspx?ID=".$id"); 
$html = str_get_html($html_content);
$dom = new simple_html_dom();
$dom->load($html);
echo $dom;

?>
