<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
	<form action="<?php echo base_url('post/update') ?>" method="post">
		<input type="text" name="id" readonly value="<?php echo $row->id ?>">
		<br/>
		<input type="text" name="title" value="<?php echo $row->title ?>">
		<br/>
		<textarea name="content"><?php echo $row->content ?></textarea>
		<br/>
		<input type="submit" value="update">
	</form>
</body>
</html>