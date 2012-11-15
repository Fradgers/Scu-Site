
<?php

include_once('database.php');

$page = new Template();

$page->title = 'Site - Show page';
$page->page_id = 'show';

$page->slides = array(
	'resources/images/slide1.png'
);

$lookup = new Lookup();
$lookup->key_show_id = $page->page_id;

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

$page->render('show.phtml');

?>
