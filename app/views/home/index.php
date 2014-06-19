<!DOCTYPE html>
<html>
<head>
	<title>MVC By Kalpesh Panchal</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<style type="text/css">
		*{
			font-family: 'Open Sans', sans-serif;
		}
	</style>
</head>
<body>
	<h1>MVC Developed by Kalpesh Panchal</h1>
	<p>This is a php based, light weight mvc by <strong>Kalpesh Panchal</strong></p>
	<p>
		<?php

			echo '<table cellpadding="10" border="1">' ; 
			foreach ($data['values'] as $key => $value) { 
				echo '<tr><th>'.$key.'</th><td>' . $value . '</td></tr>' ; 
			} 
			echo '</table>' ;
		?>
	</p>
</body>
</html>