app.controller('BooksController', function($scope, $http){
	$http.get('http://localhost/rest/server/books/').then(function(response) {
		$scope.books = response.data;
	});
});

