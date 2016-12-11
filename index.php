<?php
require 'flight/Flight.php';

$pages = array(
	array(
		'url' => '/flightphp',
		'label' => 'Accueil',
	),
	array(
		'url' => '/flightphp/film',
		'label' => 'film',
	),
	array(
		'url' => '/flightphp/serie',
		'label' => 'Serie',
	),
	array(
		'url' => '/flightphp/FEUILLETON',
		'label' => 'FEUILLETON',
	),
	array(
		'url' => '/flightphp/TV REPLAY',
		'label' => 'TV REPLAY',
	),
	array(
		'url' => '/flightphp/DIRECT',
		'label' => 'DIRECT',
	),
);

$topmenu=array(

array(
		'url' => '/flightphp/termes',
		'label' => 'Termes & Conditions'),
		array(
		'url' => '/flightphp/Annonceurs',
		'label' => 'Annonceurs',),
		array(
		'url' => '/flightphp/Contacteznous',
		'label' => 'Contactez nous',),
		);

$menulateral=array(

array(
		'url' => '/flightphp/nouveau',
		'label' => 'nouveau'),
		array(
		'url' => '/flightphp/mieuxnote',
		'label' => 'mieuxnote',),
		);
$page = explode("/",$_SERVER['REQUEST_URI']);

$page = (isset($page[2]) AND $page[2]!=="") ? $page[2] : 'home';
$page .= '.php';

$SCRIPT_PATH = __DIR__.DIRECTORY_SEPARATOR.$page;


Flight::render('menu.php', array('pages' => $pages), 'menu_content');

Flight::render('topmenu.php', array('topmenu' => $topmenu), 'topmenu_content');
Flight::render('menulateral.php', array('menulateral' => $menulateral), 'menulateral_content');

Flight::route('/', function(){

    Flight::render('layout.php', array('title' => 'Home'));


});

Flight::route('/contact', function(){

    Flight::render('layout.php', array('title' => 'xxx'));

});

Flight::route('/movies(/@id)', function($id){

	if (isset($id))
	{
		$movie = '';
	}else{
		$movies = '';
	}

    Flight::render('layout.php', array('title' => 'Movies', 'id' => $id));

});

Flight::map('notFound', function(){
    // Display custom 404 page
    include 'views/404.php';
});



Flight::start();
