
<?php

include_once('database.php');

$page = new Template();

$page->title = 'Site - Videos page';
$page->page_id = 'videos';

$page->slides = array(
	'resources/images/slide.png',
	'resources/images/slide.png',
	'resources/images/slide.png',
	'resources/images/slide.png',
);

$lookup = new Lookup();
$lookup->key_show_id = filter_input(INPUT_GET, 'show');
$lookup->key_content_type = filter_input(INPUT_GET, 'type');
$lookup->key_resource_type = VIDEO;

$page->contents = $lookup->filter($data);

$page->render('videos.phtml');

?>
