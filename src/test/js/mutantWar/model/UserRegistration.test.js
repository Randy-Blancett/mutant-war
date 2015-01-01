describe('registrationCtrl', function() {
	beforeEach(module('mutantWar'));

	// var ctrl, scope;
	// // inject the $controller and $rootScope services
	// // in the beforeEach block
	// beforeEach(inject(function($controller, $rootScope) {
	// // Create a new scope that's a child of the $rootScope
	// scope = $rootScope.$new();
	// // Create the controller
	// ctrl = $controller('registrationCtrl', {
	// $scope : $scope
	// });
	// }));
	//
	// it('should create $scope.greeting when calling sayHello', function() {
	// // expect(scope.alert).toBeUndefined();
	// scope.alert();
	// // expect(scope.greeting).toEqual("Hello Ari");
	// });

	var $controller;

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

			$scope.registration.user.username = "UserName1";
			expect($scope.registration.user.username).toEqual("UserName1");
			
			$scope.reset();
			expect($scope.registration.user.username).toEqual("");
		});
	});
});
