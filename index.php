<?php

/*
 * The MIT License
 *
 * Copyright 2015 Cadiducho.
 * Read more in https://github.com/Cadiducho/Shortener/blob/master/LICENSE
 */

require './shortener.php';
require './config.php';

$links = json_decode(file_get_contents('links.json'), true);
$solicitada = str_replace('/', '', $_SERVER['REQUEST_URI']);
if(array_key_exists($solicitada, $links)){
	$url = $links[$solicitada];
    
	echo 'Te llevo a '.$url;?></br>
	<a href="<?=$url;?>">Click</a>
	<?
	//header('Location: '.$url);
}
else{
    echo 'Link desconocido. Aqu&iacute; mandaria a la web normal.</br>';
	echo 'Links: '.implode(", ", $links);
	echo '</br> Solicitado: '. $solicitada;
	echo '</br></br>Esbozo de cadi.xyz';
}