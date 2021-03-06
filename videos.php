
<?php

include_once('database.php');

$page = new Template();

$page->title = 'Site - Videos page';
$page->page_id = 'videos';

$page->slides = array(
	'resources/images/slide3.png'
);

$lookup = new Lookup();
$lookup->key_show_id = filter_input(INPUT_GET, 'show');
$lookup->key_content_type = filter_input(INPUT_GET, 'type');
$lookup->key_resource_type = VIDEO;

$page->contents = $lookup->filter($data);

$page->articles = array(
	new Article(
		'Shows',
		'Optional words.',
		'show.php',
		'resources/images/man_red.png'),
	new Article(
		'Videos',
		'Optional words.',
		'videos.php',
		'resources/images/people.png'),
	new Article(
		'Review',
		'Optional words.',
		'reviews.php',
		'resources/images/creature_boy.png'),
	new Article(
		'Info',
		'Optional words.',
		'info.php',
		'resources/images/person.png')
);

$page->render('videos.phtml');

?>
