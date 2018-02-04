app.controller('BooksList', ['$scope', 'BooksFactory' ,function ($scope, BooksFactory) {
    $scope.books = BooksFactory.query();
}]);

/*
app.controller('BooksController', function($scope, Entry){
	$http.get('http://localhost/rest/server/books/').then(function(response) {
		$scope.books = response.data;
	});
});

*/