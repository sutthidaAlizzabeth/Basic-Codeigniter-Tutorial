<html>
	<head>
	</head>
	<body>
		<a href="<?php echo base_url('post/create'); ?>">insert post</a>
		<table>
			<tr>
				<td>ID</td>
				<td>Title</td>
				<td>Content</td>
				<td>Link</td>
				<td>Update</td>
				<td>Delete</td>
			</tr>
			<?php 
				foreach ($result as $row)
				{
			?>
				<tr>
					<td><?php echo $row->id ;?></td>
					<td><?php echo $row->title ;?></td>
					<td><?php echo $row->content ;?></td>
					<td>
						<a href="<?php echo base_url('post/get/'.$row->id) ?>">View</a>
					</td>
					<td>
						<a href="<?php echo base_url('post/edit/'.$row->id) ?>">Edit</a>
					</td>
					<td>
						<a onclick="return(confirm('Do you want to delete this row ?'))" href="<?php echo base_url('post/delete/'.$row->id) ?>">delete</a>
					</td>
				</tr>
			<?php
				}
			?>
		</table>
		<br/>
		<a href="<?php echo base_url('admin/logout'); ?>"><button >Logout</button></a>
	</body>
</html>