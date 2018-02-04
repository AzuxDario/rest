var app = angular.module('bookStore', ['ngRoute']);

app.config(function($routeProvider) {
	$routeProvider
	
	.when('/', {
		templateUrl : 'pages/home.html',
		controller : 'HomeController'
	})
	
	.when('/books/', {
		templateUrl : 'pages/books.html',
		controller : 'BooksController'
	})
	
	.when('/books/:bookId', {
		templateUrl : 'pages/book.html',
		controller : 'BooksController'
	})
	
	.otherwise({redirectTo: '/'});
});
