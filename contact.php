
<?php

include_once('template_lib.php');

$page = new Template();

$page->title = 'Site - Contact page';
$page->page_id = 'contact';

$page->slides = array(
	'resources/images/slide2.png'
);

$page->render('contact.phtml');

?>
