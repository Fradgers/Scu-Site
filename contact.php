
<?php

include_once('template_lib.php');

$page = new Template();

$page->title = 'Site - Contact page';
$page->page_id = 'contact';

$page->slides = array(
	'resources/images/slide2.png'
);

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

$page->render('contact.phtml');

?>
