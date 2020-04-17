<!DOCTYPE html>
<html >
<head>
	<title>Programacion con Laravel y Angular</title>
</head>
<body>

	<div  ng-app="myApp" ng-controller="controlador">
		<input type="text" name="nombre" ng-model="nombre"><br>
		<button type="button" ng-click="save()">Registrar</button>
	</div>
	

<script src="angular16/angular.min.js"></script>
<script src="js/controller.js"></script>
</body>
</html>