<!DOCTYPE html>
<html>
<head>
    <title>PHP, AngularJS, and Mouse Move Example</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <style>
        *
        {
            padding: 10px;
        }
        .container 
        {
            margin: 20px;
        }
        .image 
        {
            display: none;
            width: 200px;
            height: 200px;
            margin: 10px;
        }
        #heading
        {
            padding: 15px;
            font-size: 35px;
            text-align: center;
        }
    </style>
</head>
<body ng-app="myApp" ng-controller="myCtrl" ng-style="{'background-color': bgColor}">
    <div class="container">
        <h1 id=heading >Welcome to Angular js</h1>
        <label>Enter color name or hex code:</label>
        <input type="text" ng-model="bgColorInput" ng-change="changeBackgroundColor()">


        <h2>Change X, Y coordinates values on Mouse Move</h2>
        <div>
            <p>X: {{ mouseX }}</p>
            <p>Y: {{ mouseY }}</p>
        </div>
    </div>

    <script>
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope) {
            $scope.bgColorInput = '';

            $scope.changeBackgroundColor = function() {
                $scope.bgColor = $scope.bgColorInput;
            };

            $scope.toggleImages = function() {
                var images = document.getElementsByClassName('image');
                for (var i = 0; i < images.length; i++) {
                    if (images[i].style.display === 'none') {
                        images[i].style.display = 'inline-block';
                    } else {
                        images[i].style.display = 'none';
                    }
                }
            };

            document.addEventListener('mousemove', function(e) {
                $scope.$apply(function() {
                    $scope.mouseX = e.pageX;
                    $scope.mouseY = e.pageY;
                });
            });
        });
    </script>
</body>
</html>