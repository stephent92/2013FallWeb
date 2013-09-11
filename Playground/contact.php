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
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="contact.php">Contact</a></li>
            <li><a href="links.php">Links</a></li>
            <li class="dropdown">
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

    <div class="container">
		<div class="well">
			<h1>Hello world!</h1>
		    <p>Welcome class of 2013 to Web Server Programming <a class="btn btn-default">Learn More</a></p>
		</div>
		    
		<div class="row">
		   	<div class="col-lg-8 col-lg-offset-2"> 
		   		<h2>Contact Us</h2>
			    <form class="form-horizontal">
				  	<div class="form-group">
					    <label for="inputEmail1" class="col-md-2 control-label">Your Email</label>
					    <div class="col-md-10">
					      	<input type="text" class="form-control" id="inputEmail1" placeholder="Email">
					    </div>
				  	</div>
				  	<div class="form-group">
					    <label for="inputMessage" class="col-md-2 control-label">Message</label>
					    <div class="col-md-10">
					      	<textarea class="form-control" id="inputMessage" placeholder="Boy do I love you guys"></textarea>
					    </div>
					</div>
					<div class="form-group">
						<div class="col-md-offset-2 col-md-10">
							<input type="submit" class="btn" value="Submit"/>
						</div>
					</div>  			
		  		</form>
			</div>
		</div>
	</div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  </body>
</html>
