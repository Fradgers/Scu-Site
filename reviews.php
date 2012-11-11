
<?php

include_once('database.php');

$page = new Template();

$page->title = 'Site - Reviews page';
$page->page_id = 'reviews';

$page->slides = array(
	'resources/images/slide1.png'
);

$lookup = new Lookup();
$lookup->key_show_id = filter_input(INPUT_GET, 'show');
$lookup->key_content_type = CONTENTTYPE;
$lookup->key_resource_type = TEXT;

$page->contents = $lookup->filter($data);

$page->render('reviews.phtml');

?>
