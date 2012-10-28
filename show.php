
<?php

include_once('database.php');

$page = new Template();

$page->title = 'Site - Show page';
$page->page_id = 'show';

$page->slides = array(
	'resources/images/slide.png',
	'resources/images/slide.png',
	'resources/images/slide.png',
	'resources/images/slide.png',
);

$lookup = new Lookup();
$lookup->key_show_id = $page->page_id;

$page->contents = $lookup->filter($data);

$page->render('show.phtml');

?>
