<? include 'include.php'; ?>

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
    <script src="Scripts/main.js"></script>
    <script type="text/javascript">
    	$(function(){
    		$(".nav .contact").addClass("active");
    	});
    </script>
  </body>
</html>
