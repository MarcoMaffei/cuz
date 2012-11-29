<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Età</title>
	</head>
<?php	
$oggi = date('Y-m-d');

$giorno_attuale = date('d');
$mese_attuale = date('m');
$anno_attuale = date('Y');

$anni = $anno_attuale - $_POST['anno']; 

if ($_POST['anno'] != NULL) {	
	
	if ($mese_attuale > $_POST['mese']) { 
		$risultato = $anni;
	} elseif ($mese_attuale < $_POST['mese']) {
		$risultato = $anni-1;
	} else {
		
		if ($giorno_attuale >= $_POST['giorno']) {
			$risultato = $anni;
		} else {
			$risultato = $anni-1;	
		}
			
	}
		
}

?>
<body>
Età: <? if ($risultato != NULL) {
echo $risultato; 
} else {
echo "<em>Compila i campi e clicca su calcola</em>";
	
} ?><br />
	<body>
		<form method="POST">
			<table>
				<tr>
					<td>
						<label for="anno">Anno:</label>
					</td>
					<td>	
						<input type="text" name="anno" maxlength="30" size="20"  />
					</td>
				</tr>
				<tr>
					<td>
						<label for "mese">Mese:</label>
					</td>
					<td>
						<input type="text" name="mese" maxlength="30" size="20" />
					</td>
				</tr>
				<tr>
					<td>
						<label for "giorno">Giorno:</label>
					</td>
					<td>
						<input type="text" name="giorno" maxlength="30" size="20" />
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Calcola" />
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
