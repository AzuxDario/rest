app.controller('AddBookController', ['$scope', 'BooksFactory', '$location' ,function ($scope, BooksFactory, $location) {
    
	$scope.addBook = function () {
		BooksFactory.create($scope.book);
		$location.path('/books/');
	}
}]);
