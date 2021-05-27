<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="POST" action="">
		<table>
			<tr>
				<td>username:</td>
				<td><input type="text" name="u_name"></td>
			</tr>
			<tr>
				<td>password:</td>
				<td><input type="password" name="u_pass"></td>
			</tr>
			<tr>
				<td></td>
				<td ><input type="submit" name="u_login"></td>
			</tr>
			
		</table>
		
	</form>
	<?php
		if (isset($_POST['u_login'])) {
		$u_name=$_POST['u_name'];
		$u_pass=md5($_POST['u_pass']);
		
		echo $u_name;
		echo '<br>';
		echo $u_pass;
		}
	?>
</body>
</html>