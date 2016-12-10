<?php
require 'flight/Flight.php';

$pages = array(
	array(
		'url' => '/flightphp',
		'label' => 'Home',
	),
	array(
		'url' => '/flightphp/contact',
		'label' => 'Contact',
	),
);

Flight::render('menu.php', array('pages' => $pages), 'menu_content');

Flight::route('/', function(){

    Flight::render('layout.php', array('title' => 'Home'));


});

Flight::route('/contact', function(){

    Flight::render('layout.php', array('title' => 'xxx'));

});

Flight::start();
