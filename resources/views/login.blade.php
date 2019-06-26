<!DOCTYPE html>
<html>
	<head>
		<title>Login Form</title>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<h1>Login Form</h1>

					<form action="{{route('login-submit')}}" method="POST">
						@csrf
					  <fieldset>
					    <div class="form-group">
					      <label for="exampleInputEmail1">Email address</label>
					      <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					    </div>
					    <div class="form-group">
					      <label for="exampleInputPassword1">Password</label>
					      <input type="password" class="form-control" id="exampleInputPassword1" name="exampleInputPassword1" placeholder="Password">
					    </div>
					    <button type="submit" class="btn btn-primary">Submit</button>
					  </fieldset>
					</form>					
					
				</div>
			</div>
		</div>
	</body>
</html>