<!DOCTYPE html>
<html>
<head>
	<title>Hello PHP</title>
</head>
<body style="background-color: #EEEEAC;">
	<div align="center">
		<h1>Welcome Human</h1>
		<br/>
		<h2><?php echo $title; ?></h2>
		<br/>
		<form action="<?php echo base_url('post/index') ?>" method="POST">
			<input type="text" name="num1">
			+
			<input type="text" name="num2">
			<br/>
			<input type="submit" value="Calculate">
		</form>
		<br/>
		<img height="200px" src="http://th01.deviantart.net/fs71/PRE/i/2012/210/7/7/queen_serenity_and_princess_rini_by_windemo-d592b6u.jpg">
	</div>
</body>
</html>