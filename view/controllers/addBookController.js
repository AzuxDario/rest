app.controller('AddBookController', ['$scope', 'BooksFactory', '$location' ,function ($scope, BooksFactory, $location) {
    
	$scope.addBook = function () {
		var response = BooksFactory.create($scope.book);
		response.$promise.then(function(name)
		{
			$location.path('/books/');
		});
	}
}]);
