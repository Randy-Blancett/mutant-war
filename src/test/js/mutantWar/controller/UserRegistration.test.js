describe('Unit Test registrationCtrl', function() {
	var $controller;
	beforeEach(module('mutantWar'));

	beforeEach(inject(function(_$controller_) {
		// The injector unwraps the underscores (_) from around the parameter
		// names when matching
		$controller = _$controller_;
	}));

	describe('$scope.alert', function() {
		it('sets the strength to "strong" if the password length is >8 chars',
				function() {
					var $scope = {};
					var controller = $controller('registrationCtrl', {
						$scope : $scope
					});
					$scope.alert();
				});
	});

	describe('$scope.alert', function() {
		it('Reset the data to null', function() {
			var $scope = {};
			var controller = $controller('registrationCtrl', {
				$scope : $scope
			});

			$scope.user.username = "UserName1";
			expect($scope.user.username).toEqual("UserName1");

			$scope.reset();
			expect($scope.user.username).toEqual("");
		});
	});
});
