<?php include 'inc/_global.php'; ?>

<?php
	$conn = GetConnection();
	$result = $conn->query('SELECT * FROM Keywords');
	$rs = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" media="screen">

  <body>
    <h1>This is the final</h1>

	<?
		$msg = 'Hello, ';
		$name = 'Stephen';
		include 'something.php';
	?>
	<pre>
		<? print_r($rs); ?>
	</pre>
	
	<span class="label label-success"><?= $msg . $name?></span>
	
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"></script>
  </body>
</html>
