<!--
   form-uno.html
   
   Copyright 2012 Marco <marco@suoragnese>
   
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
   
   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.
   
   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
   MA 02110-1301, USA.
   
   
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>senza nome</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.21" />
</head>

<body>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="stile-form.css">
	</head>
	<body>
		<?php
		$utenti = array();
		$utenti["luca"] ="password123";
		$utenti["fede"] ="silenzio!";
		
		if ( $_SERVER["REQUEST_METHOD"] == "POST" ) 	
		
		if( $_SERVER["REQUEST_METHOD"] == "POST") {
			
		} else {
			echo "Autenticazione richiesta:";
		}
		//var_dump ($_POST)
		?>
		<form method= "POST">
			<table>
				<tr>
					<td>
						<label for="nome">Nome utente:</label>
					</td>
					<td>
						<input type="text" name= "nome" />
					</td>
				</tr>
				<tr>
					<td>
						<label for="password">Password:</label>
			
					<td>
						<input type="password" name= "password" />
					</td>
				</tr>
				
					<tr>
					
				
				<tr>
					<td>
						<input type="submit" value="invia_dati"/>				
					</td>
					<td>
						<input type="reset" value="cancella_dati"/>	
					</td>
				</tr>
				
			</table>
		</form>
	</body>
</html>
	
</body>

</html>
