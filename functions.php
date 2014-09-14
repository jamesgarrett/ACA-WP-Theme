<?
foreach(array(
/*
|| INCLUDED PLUGINS
*/
	'acf-conf'       ,
	'acf-opts'       ,
	'blade-conf'     ,
/*
|| ADDED FUNCTIONALITY
*/
	'theme'          ,
	'tools'          ,
	'checks'         ,
/*
|| CUSTOM POSTTYPES
*/
//	'cpt-podcasts'   ,
) as $file){require_once("lib/func/$file.php");}
?>