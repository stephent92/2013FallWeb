<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
	
    <title>My Website - <?=@$title?></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
    	body { padding-top: 70px; }
    </style>
  </head>

  <body>
  	<header class="container">
  		<h1>My Website</h1>
  	</header>
  	<div class="container">
  	<div class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../Home/">Home</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          	<li class="dropdown">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories<b class="caret"></b></a>
          	</li>
          </ul>
          <p class="navbar-text pull-right" id="shopping-cart"><a href="#" class="navbar-link">Cart</a></p>
        </div>
      </div>
    </div>
    
    <? include $view; ?>
    
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <? if(function_exists('Scripts')) Scripts(); ?>
  </body>
</html>