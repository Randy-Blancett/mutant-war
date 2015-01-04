var RegistrationCtrl = function($scope) {
	var model = this;

	model.message = "";

	model.user = {
		username : "",
		password : "",
		confirmPassword : ""
	};

	model.submit = function(isValid) {
		console.log("h");
		if (isValid) {
			model.message = "Submitted " + model.user.username;
		} else {
			model.message = "There are still invalid fields below";
		}
	};

	model.alert = function(registration) {
		alert("run alert");
	};

	model.reset = function() {
		model.user.username = "";
	};

	model.validatePwdConfirm = function(registration) {
		return false
	}

};

app.controller("registrationCtrl", RegistrationCtrl);