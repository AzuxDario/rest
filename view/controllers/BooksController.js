app.controller('BooksController', ['$scope', 'BooksFactory', 'BookFactory', '$location' ,function ($scope, BooksFactory, BookFactory, $location) {
    
	$scope.editBook = function (bookId) {
		$location.path('/editBook/' + bookId);
    };

    $scope.deleteBook = function (bookId) {
		var response = BookFactory.delete({ id: bookId });
		response.$promise.then(function(name)
		{
			scope.books = BooksFactory.query();
		});
    };

    $scope.addBook = function () {
		$location.path('/addBook/');
	};
	
	$scope.books = BooksFactory.query();
}]);
