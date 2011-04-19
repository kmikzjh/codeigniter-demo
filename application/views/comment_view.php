<html>

<head>
	<title><?php echo $title; ?></title>
</head>
<body>
<h1><?php echo $heading; ?></h1>

<?php if ($query->num_rows() > 0): ?>
	

	<?php foreach($query->result() as $row): ?>

	<p><?php echo $row->body; ?></p>
	<p><?php echo $row->author; ?></p>
	
	<hr />

	<?php endforeach; ?>
	
<?php endif; ?>

<p><?php echo anchor('blog', 'Back to Blog')?></p>

<?php echo form_open('blog/comment_insert');?>

<?php echo form_hidden('entry_id', $this->uri->segment(3));?>

<p><textarea name="body" rows="10"></textarea></p>
<p><input type="text" name="author" /></p>
<p><input type="submit" value="Submit Comment" /></p>

</form>


</body>
</html>