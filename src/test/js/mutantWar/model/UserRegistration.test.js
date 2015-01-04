describe('registrationCtrl', function() {

	// var scope, $location, createController;
	//
	// beforeEach(inject(function ($rootScope, $controller _$location_) {
	// $location = _$location_;
	// scope = $rootScope.$new();
	//
	// createController = function() {
	// return $controller('registrationCtrl', {
	// '$scope': scope
	// });
	// };
	// }));
	//
	// // it('should have a method to check if the path is active', function() {
	// // var controller = createController();
	// //// $location.path('/about');
	// //// expect($location.path()).toBe('/about');
	// //// expect(scope.isActive('/about')).toBe(true);
	// //// expect(scope.isActive('/contact')).toBe(false);
	// // });
	//	
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
					controller.alert();
				});
	});

	describe('$scope.alert', function() {
		it('Reset the data to null', function() {
			var $scope = {};
			var controller = $controller('registrationCtrl', {
				$scope : $scope
			});

			controller.user.username = "UserName1";
			expect(controller.user.username).toEqual("UserName1");

			controller.reset();
			expect(controller.user.username).toEqual("");
		});
	});
});
