<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>My Yoga - Thank You</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">
	
	<!-- Custom styles for form -->
    <link href="query-form.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">My Yoga</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="classes.html">Classes</a></li>
            <li class="active"><a href="contact.html">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
		
    <div class="container theme-showcase" role="main">

	  <div class="page-header">
        <h1>Thank You</h1>
      </div>

	   <div class="row">
        <div class="col-md-6">

		<h3>Thank you for your query! </h3>
		<h4>We will get back to you as soon as possible.</h4>
		<p>Confirmation - here are the details you entered:</p>
		
		<p>
			First Name: <?php echo $_REQUEST["inputFirstName"]; ?><br />
			Last Name: <?php echo $_REQUEST["inputLastName"]; ?><br />
			Email: <?php echo $_REQUEST["inputEmail"]; ?><br />
			Query: <?php echo $_REQUEST["inputQuery"]; ?><br />
		</p>
	 </div>
	 
	 <div class="col-md-6">  
		<img src="images/thankyou1.jpg" class="img-thumbnail" alt="Namaste">
		<img src="images/thankyou2.jpg" class="img-thumbnail" alt="Namaste">
		<img src="images/thankyou3.jpg" class="img-thumbnail" alt="Namaste">
		<img src="images/thankyou4.jpg" class="img-thumbnail" alt="Namaste">
		<img src="images/thankyou5.jpg" class="img-thumbnail" alt="Namaste">
		<img src="images/thankyou6.jpg" class="img-thumbnail" alt="Namaste">
	 </div>
	 
	</div>
	  
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="js/formVal.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
