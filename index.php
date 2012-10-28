
<?php

include_once('template_lib.php');

$page = new Template();

$page->title = 'Site';
$page->page_id = 'home';

$page->slides = array(
	'resources/images/slide1.png',
	'resources/images/slide2.png',
	'resources/images/slide3.png',
);

$page->featured = new Content(
	'Featured',
	'Words Words Words',
	new VideoGroup(
		new Video('http://www.youtube.com',FLASH),
		VIDEO_LINK
	),
	'',
	SHOWNAME, CONTENTTYPE, VIDEO
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
		'resources/images/person.png'),
);


$page->render('home.phtml');

?>
