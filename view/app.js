var app = angular.module('bookStore', ['ngRoute', 'ngResource']);

app.config(function($routeProvider) {
	$routeProvider.when('/', {
		templateUrl : 'pages/home.html',
		controller : 'HomeController'
	});
	
	$routeProvider.when('/books/', {
		templateUrl : 'pages/books.html',
		controller : 'BooksList'
	});
	
	$routeProvider.when('/books/:bookId/', {
		templateUrl : 'pages/book.html',
		controller : 'BooksController'
	});
	
	$routeProvider.when('/addBook/', {
		templateUrl : 'pages/addBook.html',
		controller : 'BooksController'
	});
	
	$routeProvider.otherwise({redirectTo: '/'});
});