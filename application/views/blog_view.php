<html>

<head>
	<title><?php echo $title; ?></title>
</head>
<body>
	<h1><?php echo $heading; ?></h1>
	
	<?php foreach($query->result() as $row): ?>
	
	<h3><?php echo $row->title; ?></h3>
	<p><?php echo $row->body; ?></p>
	
	<p><?php echo anchor('blog/comments/'.$row->id, 'Comments')?></p>
		
	<hr />
	
	<?php endforeach; ?>

</body>
</html>