app.controller('EditBookController', ['$scope', '$routeParams', 'BookFactory', '$location' ,function ($scope, $routeParams, BookFactory, $location) {
    
    $scope.editBook = function () {
      BookFactory.update($scope.response.data[0]);
      $location.path('/books/');
    };

    $scope.cancel = function () {
      $location.path('/books/');
	};
	
	$scope.response = BookFactory.show({id: $routeParams.id});
}]);
