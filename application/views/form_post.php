<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url('post/insert'); ?>" method="post">
		Title :: <input type="text" name="title"/>
		<br/>
		Content :: <textarea name="content"></textarea>
		<br/>
		<input type="submit" value="Post">
	</form>
</body>
</html>