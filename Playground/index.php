<? include 'include.php'; ?>
	
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container">
	  <div class="jumbotron">
	    <h1>Hello world!</h1>
	      <p>Welcome class of 2013 to Web Server Programming</p>
	      <a class="btn btn-success btn-lg">Learn More</a>
	  </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary btn-md" href="#">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Important Points</h2>
          <ul>
	        <li>The three main links in the navbar work</li>
			<li>They are all centralized in one file</li>
			<li>They change apearance to show you which page you are on.</li>
			<li>These colunms start as three columns then reduce as the browser shrinks</li>
		  </ul>
          <p><a class="btn btn-primary btn-md" href="#">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
          <p><a class="btn btn-primary btn-md" href="#">View details &raquo;</a></p>
        </div>
      </div>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      window.onload=function changeActive()
      {
        document.getElementById("Home").classList.add("active");
      }
    </script>
  </body>
</html>
