<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form action="<?php echo base_url('admin/login'); ?>" method="post">
			Username :: <input type="text" name="username"/>
			<br/>
			Password :: <input type="password" name="password"/>
			<br/>
			<input type="submit" value="Post">
		</form>
	</div>
</body>
</html>