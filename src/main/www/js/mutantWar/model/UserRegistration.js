angular.module('mutantWar', []).controller('registrationCtrl',
		function($scope) {
			$scope.registration = {};
			$scope.registration.user = {};
			$scope.registration.user.username = "test1";

			$scope.alert = function(registration) {
				alert("run alert");
			};

			$scope.reset = function() {
				$scope.registration.user.username = "";
			};
		});