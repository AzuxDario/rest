var app = angular.module('myApp', ['ngRoute']);

app.config(function($routeProvider) {
	$routeProvider
	
	.when('/', {
		templateUrl : 'pages/home.html',
		controller : 'HomeController'
	})
	
	.when('/books', {
		templateUrl : 'pages/books.html',
		controller : 'BooksController'
	})
	
	.otherwise({redirectTo: '/'});
});

app.controller('HomeController', function($scope){
	$scope.message = 'Hello HomeController';
});

app.controller('BooksController', function($scope){
	$scope.message = 'Hello BooksController';
});