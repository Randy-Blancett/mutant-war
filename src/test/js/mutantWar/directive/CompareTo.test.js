describe(
		'Unit testing Compare to directive',
		function() {
			var $compile, $rootScope;

			// Load the myApp module, which contains the directive
			beforeEach(module('mutantWar'));

			// Store references to $rootScope and $compile
			// so they are available to all tests in this describe block
			beforeEach(inject(function(_$compile_, _$rootScope_) {
				// The injector unwraps the underscores (_) from around the
				// parameter
				// names when matching
				$compile = _$compile_;
				$rootScope = _$rootScope_;
			}));

			it(
					'Replaces the element with the appropriate content',
					function() {
						// Compile a piece of HTML containing the directive

						var html = "<form name=\"registrationForm\" role=\"form\" class=\"form-horizontal\"	novalidate>";
						html += "<input type=\"password\" class=\"form-control\" id=\"pwd\" name=\"pwd\" ng-model=\"registration.user.password\" placeholder=\"Enter password\" />";

						html += "<input type=\"confirm_password\" id=\"confirm_pwd\" ng-model=\"registration.user.confirmPassword\"	compare-to=\"registration.user.password\" />";

						html += "</form>"

						var element = $compile(html)($rootScope);
						// fire all the watches, so the scope expression {{1 +
						// 1}} will
						// be evaluated
						$rootScope.$digest();
						// Check that the compiled element contains the
						// templated
						// content

					
					});
		});