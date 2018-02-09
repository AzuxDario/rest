var app = angular.module('bookStore', ['ngRoute', 'ngResource']);

app.config(function($routeProvider) {
	$routeProvider.when('/', {
		templateUrl : 'pages/home.html',
		controller : 'HomeController'
	});
	
	$routeProvider.when('/books', {
		templateUrl : 'pages/books.html',
		controller : 'BooksController'
	});
	
	$routeProvider.when('/addBook', {
		templateUrl : 'pages/addBook.html',
		controller : 'AddBookController'
	});
	
	$routeProvider.when('/editBook/:id', {
		templateUrl : 'pages/editBook.html',
		controller : 'EditBookController'
	});
	
	$routeProvider.when('/about', {
		templateUrl : 'pages/about.html',
		controller : 'AboutController'
	});
	
	$routeProvider.otherwise({redirectTo: '/'});
});