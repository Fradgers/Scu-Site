
<?php

include_once('template_lib.php');

$page = new Template();

$page->title = 'Site - Page';
$page->page_id = 'info';

$page->slides = array(
	'resources/images/slide1.png',
	'resources/images/slide2.png',
	'resources/images/slide3.png',
);

$page->content = new Content(
	'Info page',
	'Words.',
	'',
	'',
	'', CONTENTTYPE, TEXT
);

$page->render('basic.phtml');

?>
