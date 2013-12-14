<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
	
    <title>My Website - <?=@$title?></title>
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.0.0/flatly/bootstrap.min.css" rel="stylesheet">

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
          <a class="navbar-brand" href="../FrontEnd/">Front End</a>
        </div>
        <div class="navbar-collapse collapse">
        	<ul class="nav navbar-nav">
        		<li><a href="../Home/">Home</a></li>
	        	<li><a href="../Users">Users</a></li>
	        	<li><a href="../Inventory">Inventory</a></li>
	        	<li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Others<b class="caret"></b></a>
	              <ul class="dropdown-menu">
	                <li class="dropdown-header">User Info</li>
	                <li><a href="../Addresses">Addresses</a></li>
	                <li><a href="../ContactMethods">Contact Methods</a></li>
	                <li><a href="../Orders">Orders</a></li>
	                <li><a href="../PaymentMethods">Payment Methods</a></li>
	                <li><a href="../Feedback">User Feedback</a></li>
	                <li><a href="../UserTypes">User Types</a></li>
	                <li><a href="../Wishlist">Wishlist</a></li>
	                <li class="divider"></li>
	                <li class="dropdown-header">Other</li>
	               	<li><a href="../Categories">Categories</a></li>
	                <li><a href="../Suppliers">Suppliers</a></li>
	              </ul>
	            </li>
            </ul>
          <p class="navbar-text pull-right">Signed in as <a href="#" class="navbar-link"><? $user=Auth::GetUser(); echo $user['LastName']; ?></a></p>
        </div>
      </div>
    </div>
    
    <? include $view; ?>
    
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <? if(function_exists('Scripts')) Scripts(); ?>
  </body>
</html>