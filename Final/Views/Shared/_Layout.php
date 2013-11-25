<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
	
    <title>My Website - <?=@$title?></title>
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.0.1/flatly/bootstrap.min.css" rel="stylesheet">

	<style type="text/css">
    	body { padding-top: 70px; }
    </style>
  </head>

  <body>
  	<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../FrontEnd/">Home</a>
        </div>
        <div class="navbar-collapse collapse">
          <p class="navbar-text pull-right">Signed in as <a href="#" class="navbar-link">Stephen Toth</a></p>
        </div>
      </div>
    </div>
    
    <? include $view; ?>
    
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <? if(function_exists('Scripts')) Scripts(); ?>
  </body>
</html>