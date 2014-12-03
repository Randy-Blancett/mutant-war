<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min" />
<script src="js/angular/angular"></script>
<script src="js/mutantWar/model/UserRegistration"></script>

</head>
<body ng-app="mutantWar">
	<div class="container-fluid">
		<h1>Register for Mutant Wars!!!</h1>
		<div ng-controller="registrationCtrl">
			<form name="registrationForm" role="form" class="form-horizontal">
				<div class="form-group">
					<label for="username" class="control-label col-xs-2">User Name:</label>
					<div class="col-xs-10">
						<input type="text" class="form-control" name="username"
							id="username" ng-model="registration.user.username"
							placeholder="User Name" required />
						<div ng-messages="registrationForm.username.$error"
							ng-messages-include="messages.html"></div>
					</div>
				</div>
				<div class="form-group">
					<label for="pwd" class="control-label col-xs-2">Password:</label>
					<div class="col-xs-10">
						<input type="password" class="form-control" id="pwd"
							placeholder="Enter password" /> <input type="confirm_password"
							class="form-control" id="confirm_pwd"
							placeholder="confirm password" />
					</div>
				</div>
				<div class="form-group">
					<label for="firstName" class="control-label col-xs-2">First Name:</label>
					<div class="col-xs-10">
						<input type="text" class="form-control" id="firstName"
							placeholder="First Name" />
					</div>
				</div>
				<div class="form-group">
					<label for="lastName" class="control-label col-xs-2">Last Name:</label>
					<div class="col-xs-10">
						<input type="text" class="form-control" id="lastName"
							placeholder="Last Name" />
					</div>
				</div>
				<div class="col-xs-offset-2 col-xs-10">
					<button ng-click="alert(registration.user)" type="submit"
						class="btn btn-default" ng-disabled="registrationForm.$invalid">Create
						Account</button>
				</div>

			</form>
		</div>
	</div>

	<div>{{registration.user.username}}</div>

</body>

</html>
