<?
	$pages = array(
		array(
			'url'=> 'index.php',
			'section'=> 'home', 
			'title'=> 'Home'),
		array(
			'url'=> 'links.php',
			'section'=> 'links', 
			'title'=> 'Links'),
		array(
			'url'=> 'contact.php',
			'section'=> 'contact', 
			'title'=> 'Contact Us'));	
			
		$pages[] = array(
			'url'=> 'store.php',
			'section'=> 'store', 
			'title'=> 'Buy Our Stuff');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
	
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

	<style type="text/css">
    body 
    { 
      padding-top: 70px; 
    }
    </style>
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Playground</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <? foreach ($pages as $name => $data): ?>
			   		<li class="<?=$data['section']?> ">
			   			<a href="<?=$data['url']?>"> <?=$data['title']?> </a>
			   		</li>
			<? endforeach; ?>
            
            <li id="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <p class="navbar-text pull-right">Signed in as <a href="#" class="navbar-link">Stephen Toth</a></p>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <pre class="container">
    	<? echo json_encode($pages); ?>
    </pre>
