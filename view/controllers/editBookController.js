app.controller('EditBookController', ['$scope', '$routeParams', 'BookFactory', '$location' ,function ($scope, $routeParams, BookFactory, $location) {
    
    $scope.editBook = function () {
		var response = BookFactory.update($scope.response.data[0]);
		response.$promise.then(function(name)
		{
			$location.path('/books');
		});
    };

    $scope.cancel = function () {
		$location.path('/books');
	};
	
	$scope.response = BookFactory.show({id: $routeParams.id});
}]);
