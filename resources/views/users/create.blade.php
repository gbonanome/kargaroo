<!DOCTYPE html>
<html>
    <head>
        <title>Join the Community :: Kargaroo</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>

		<div class="container">
		
			<form class="form-signin form-horizontal" method="POST" action="/jointhecommunity">
				<h2 class="form-signin-heading">Join the community</h2>
				<div class="form-group">
				    <label for="firstname" class="col-sm-3 control-label">Name</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Name">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="lastname" class="col-sm-3 control-label">Last name</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="mail" class="col-sm-3 control-label">Email</label>
				    <div class="col-sm-9">
				      <input type="email" class="form-control" id="mail" name="mail" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="company" class="col-sm-3 control-label">Company</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="company" name="company" placeholder="eg. Digital Accademia">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="address" class="col-sm-3 control-label">Where are you from?</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="address" name="address" placeholder="eg. Padova">
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="phone" class="col-sm-3 control-label">Phone</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="phone" name="phone" placeholder="eg. 123456789">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-3 col-sm-9">
				      <button type="submit" class="btn btn-lg btn-default">Join</button>
				    </div>
				  </div>
			</form>

		</div> <!-- /container -->
	</body>
</html>