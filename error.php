
<?php

include_once('template_lib.php');

$page = new Template();

$page->title = 'Site - Info Page';
$page->page_id = 'info';

$page->slides = array(
	'resources/images/slide.png',
	'resources/images/slide.png',
	'resources/images/slide.png',
	'resources/images/slide.png',
);

$page->content = new Content(
	'Info page',
	'Words.',
	'',
	'',
	'', CONTENTTYPE, TEXT
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

$page->render('basic.phtml');

?>
