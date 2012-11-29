<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="stile-form.css">
	</head>
	<body>
		<?php
			var_dump($_POST);
			
			
			$cambio = array();
			$cambio['AMN'] = 1.50;
			$cambio['USD'] = 8.28;
			$cambio['LONGU'] = 200.37;
			$cambio['GBP'] = 0.80;
			$cambio['CHF'] = 1.20;
	
		?>
		<form method="POST">
			<select name="cambio">
			<?php foreach($cambio as $key => $val): ?>
				<option value="<?php echo $key ?>">
					<?php echo $key ?>
				</option>
			<?php endforeach; ?>
			</select>
			
			<input type="text" name="valuta" />
			<input type="submit" value="Calcola cambio" />
		</form>
		
		<?php 
			$valuta = $_POST['valuta'];
			$tasso_di_cambio = $cambio[$_POST['cambio']];
			
			echo $_POST['valuta'];
			echo " euri equivalgono a tanti ";
			echo $valuta*$tasso_di_cambio;
			echo " ".$_POST['cambio'];
			
			
		?>
  
	</body>
</html>
