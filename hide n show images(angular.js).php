<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angular Js</title>
    <!-- < Script Tag -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <!-- < Style Tag -->
    <style>
        * 
        {
            padding: 10px;  
        }


        h1 
        {
            padding: 15px;
            font-size: 35px;
            text-align: center;
        }

        .image-container 
        {
            display: flex;
        }

        .image-container img 
        {
            width: 150px;
            height: 150px;
            margin-right: 10px;
        }

        button 
        {
            padding: 10px 20px;                                 /* Adjust padding as needed */
            font-size: 16px;
            background-color: #4CAF50;                          /* Green */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;             /* Smooth transition for background color */
        }

        button:hover 
        {
            background-color: #fff;                          /* Darker green on hover */
            color: #45a049;
            border: 1px solid #45a049;
        }

    </style>
    <!-- < Head Tag -->
</head>
<body>
    <h1>Welcome to Angular js</h1>

    <div ng-app="myApp" ng-controller="myCtrl">
        <button ng-click="myFunc()">Click Me!</button>

        <div ng-show="showMe" class="image-container">
            <h1>Hide and Show Image with Angular.js!</h1>
            <div><img src="image2.png"></div>
            <div><img src="image4.png"></div>
            <div><img src="image3.png"></div>
        </div>
    </div>

    <script>
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope) {
            $scope.showMe = false;
            $scope.myFunc = function() {
                $scope.showMe = !$scope.showMe;
            }
        });
    </script>
</body>
</html>
