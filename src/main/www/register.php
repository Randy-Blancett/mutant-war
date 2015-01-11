<html ng-app='mutantWar'>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min" />
<script src="js/angular/angular.min"></script>
<script src="js/angular/angular-messages.min"></script>
<script src="js/mutantWar/app/MutantWar"></script>
<script src="js/mutantWar/directive/CompareTo"></script>
<script src="js/mutantWar/controller/UserRegistration"></script>

</head>
<body ng-controller="registrationCtrl as registration">
	<div class="container-fluid">
		<h1>Register for Mutant Wars!!!</h1>
		<h3>{{ registrationForm.message }}</h3>
		<div>
			<form name="registrationForm" role="form" class="form-horizontal"
				novalidate ng-submit="submit(registrationForm)">
				<div class="form-group">
					<label for="username" class="control-label col-xs-2">User Name:</label>
					<div class="col-xs-10">
						<input type="text" class="form-control" name="username"
							id="username" ng-model="user.username"
							placeholder="User Name" required />
						<div ng-messages="registrationForm.username.$error"
							ng-messages-include="./messages"></div>
					</div>
				</div>
				<div class="form-group">
					<label for="pwd" class="control-label col-xs-2">Password:</label>
					<div class="col-xs-10">
						<input type="password" class="form-control" id="pwd" name="pwd"
							ng-model="registration.user.password"
							placeholder="Enter password" />
						<div ng-messages="registrationForm.pwd.$error"
							ng-messages-include="./messages"></div>
						<input type="confirm_password" class="form-control"
							id="confirm_pwd" name="confirm_pwd"
							ng-model="registration.user.confirmPassword"
							placeholder="confirm password"
							compare-to="registration.user.password" />
						<div ng-messages="registrationForm.confirm_pwd.$error"
							ng-messages-include="./messages"></div>
					</div>
				</div>
				<div class="form-group">
					<label for="firstName" class="control-label col-xs-2">First Name:</label>
					<div class="col-xs-10">
						<input type="text" class="form-control" id="firstName"
							placeholder="First Name" required />
						<div ng-messages="registrationForm.firstName.$error"
							ng-messages-include="./messages"></div>
					</div>
				</div>
				<div class="form-group">
					<label for="lastName" class="control-label col-xs-2">Last Name:</label>
					<div class="col-xs-10">
						<input type="text" class="form-control" id="lastName"
							placeholder="Last Name" required />
						<div ng-messages="registrationForm.lastName.$error"
							ng-messages-include="./messages"></div>
					</div>
				</div>
				<div class="col-xs-offset-2 col-xs-10">
					<button ng-click="reset()" type="reset" class="btn btn-default">Reset</button>
					<button type="submit" class="btn btn-primary"
						ng-disabled="registrationForm.$invalid">Create Account</button>
				</div>

			</form>
		</div>
	</div>

</body>

</html>
