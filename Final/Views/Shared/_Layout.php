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
    <link href="jumbotron.css" rel="stylesheet">

	<style type="text/css">
    	body { padding-top: 70px; }
    </style>
  </head>

  <body>
  	<header>
  		<div class="container">
  			<h1>My Website</h1>
  		</div>
  	</header>
  	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Final</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          	<li class="Keywords">
            	<a href="../Keywords/"> Keywords</a>
           	</li>
           	<li class="Inventory">
	            <a href="../Inventory/"> Inventory</a>
	        </li>
	        <li class="Suppliers">
	            <a href="../Suppliers/"> Suppliers</a>
	        </li>
            <li id="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users <b class="caret"></b></a>
              <ul class="dropdown-menu">
              	<li class="Users">
	            	<a href="../Users/"> Users</a>
	            </li>
	            <li class="Addresses">
	            	<a href="../Addresses/"> Addresses</a>
	            </li>
	            <li class="ContactMethods">
	            	<a href="../ContactMethods/"> Contact Methods</a>
	            </li>
              	<li class="Feedback">
            		<a href="../Feedback/"> Feedback</a>
            	</li>
				<li class="Wishlist">
	            	<a href="../Wishlist/"> Wishlist</a>
	            </li>
	            <li class="WishlistItems">
	            	<a href="../WishlistItems/"> Wishlist Items</a>
	            </li>
	            <li class="PaymentMethods">
	            	<a href="../PaymentMethods/"> Payment Methods</a>
	            </li>
	            <li class="Orders">
	            	<a href="../Orders/"> Orders</a>
	            </li>
	            <li class="TrackOrder">
	            	<a href="../TrackOrder/"> Track Order</a>
	            </li>
              </ul>
            </li>
          </ul>
          <p class="navbar-text pull-right">Signed in as <a href="#" class="navbar-link">Stephen Toth</a></p>
        </div>
      </div>
    </div>
    
    <? include $view; ?>
    
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="Scripts/main.js"></script>
    <? if(function_exists('Scripts')) Scripts(); ?>
  </body>
</html>