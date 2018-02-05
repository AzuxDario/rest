var baseUrl = "http://localhost/rest/server/";

app.factory('BooksFactory', function($resource) {
	return $resource(baseUrl + "books", {}, {
		query: {method: 'GET'},
		create: {method: 'POST'}
	});
});

app.factory('BookFactory', function($resource) {
	return $resource(baseUrl + "books/:id", {}, {
		show: {method: 'GET'},
		update: {method: 'PUT', params: {id: '@id'}},
		delete: {method: 'DELETE', params: {id: '@id'}}
	});
});