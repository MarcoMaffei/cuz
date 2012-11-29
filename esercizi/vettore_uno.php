<?php
/*
 * vettore_uno.php
 * 
 * Copyright 2012 Marco <marco@suoragnese>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>senza nome</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
</head>

<body>
	
	<?php
	
$persona = array(); //Inizializzazione
$persona[] = "Luca"; //Elemento aal posizione 0
$persona[] = "Saba"; //Elemento aal posizione 1
$persona[] = "Marco"; //Elemento aal posizione 2
$persona[] = "M"; //Elemento aal posizione 4
$persona[] = "1973"; //Elemento aal posizione 5

echo $persona[1];
?>
 <b>-</b>
<?php
//Seconda parte
$persona = array(); //Inizializzazione
$persona['nome'] = "Luca"; //Elemento aal posizione 0
$persona['cognome'] = "Saba"; //Elemento aal posizione 1
$persona['secondo nome'] = "Marco"; //Elemento aal posizione 2
$persona['sesso'] = "M"; //Elemento aal posizione 4
$persona['anno di nascita'] = "1973"; //Elemento aal posizione 5

echo $persona['cognome'];

?>

<?php
//Terza parte
$persona = array(); //Inizializzazione
$persona['12'] = "Ciao"; //Elemento aal posizione 0
$persona[] = "pippo"; //Elemento aal posizione 1
$persona['sesso'] = "M"; //Elemento aal posizione 2
$persona[] = "CA"; //Elemento aal posizione 4

echo $persona[12]."-".$persona[13] ."-".$persona[14];

?>

<?php
//Quarta parte
$aula = array(); //Inizializzazione
$aula['12'] = "Ciao"; //Elemento aal posizione 0
$aula[] = "pippo"; //Elemento aal posizione 1
$aula['sesso'] = "M"; //Elemento aal posizione 2
$aula[] = "CA"; //Elemento aal posizione 4

echo $persona[12]."-".$persona[13] ."-".$persona[14];

?>
	
</body>

</html>
