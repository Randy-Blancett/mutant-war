describe('registrationCtrl', function() {
  beforeEach(module('mutantWar'));

  var $controller;

  beforeEach(inject(function(_$controller_){
    // The injector unwraps the underscores (_) from around the parameter names when matching
    $controller = _$controller_;
  }));

  describe('$scope.alert', function() {
    it('sets the strength to "strong" if the password length is >8 chars', function() {
      var $scope = {};
      var controller = $controller('registrationCtrl', { $scope: $scope });
//      $scope.password = 'longerthaneightchars';
//      $scope.grade();
//      expect($scope.strength).toEqual('strong');
    });
  });
});