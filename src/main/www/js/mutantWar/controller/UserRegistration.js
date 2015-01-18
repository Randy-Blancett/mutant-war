var RegistrationCtrl = function($scope, $http) {
	var model = $scope;

	model.message = "";

	model.user = {
		username : "",
		email : "",
		password : "",
		confirmPassword : "",
		fName : "",
		lName : ""
	};

	model.validateData = function() {
		if (model.user.username == "") {
			return false;
		}
		return true;
	}

	model.submit = function(form) {
		if (!model.validateData()) {
			form.message = "Failed to submit data for " + model.user.username
					+ " data validation failed.";
			return false;
		}

		console.log($http);
		console.log(form);
		console.log(model.user.username);
		form.message = "Submitted " + model.user.username;
		form.$invalid = true;

		var dataObject = model.user;

		var responsePromise = $http.post("rest/user", dataObject, {});
		responsePromise.success(function(dataFromServer, status, headers,
				config) {
			console.log(dataFromServer.title);
		});
		responsePromise.error(function(data, status, headers, config) {
			alert("Submitting form failed!");
		});

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

mutantWar.controller("registrationCtrl", RegistrationCtrl);