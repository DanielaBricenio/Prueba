var app = angular.module('myApp',[]);

app.controller('controlador', function($scope, $http){
	$scope.save = function(){
		console.log($scope.nombre);
		$http({
			url : "http://127.0.0.1:8000/api/insert",
			method : "POST",
			data : {
				"nombre" : $scope.nombre
			} 
		}).then(function(response){
			alert('seccess');
		}, function(response){
			alert('failed');
		});
	}
});
