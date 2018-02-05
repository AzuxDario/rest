app.controller('BooksController', ['$scope', 'BooksFactory', 'BookFactory', '$location' ,function ($scope, BooksFactory, BookFactory, $location) {
    
	$scope.editBook = function (bookId) {
      $location.path('/editBook/' + bookId);
    };

    $scope.deleteBook = function (bookId) {
      BookFactory.delete({ id: bookId });
      $scope.books = BookFactory.query();
    };

    $scope.addBook = function () {
      $location.path('/addBook/');
	};
	
	$scope.books = BooksFactory.query();
}]);
