<!DOCTYPE html>
<html ng-app="universityApp">
<head>
    <title>Pakistani Universities Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <style>
        .card {
            margin-bottom: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.5s ease;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .card-body {
            background-color: #f8f9fa;
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }
    </style>
</head>
<body>

<div class="container" ng-controller="UniversityController">
    <h2 class="mt-5 mb-4 text-center">Pakistani Universities Search</h2>
    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search any University" ng-model="searchUniversity">
    </div>

    <div class="row">
        <div class="col-md-4" ng-repeat="uni in universities | filter:customFilter">
            <div class="card">
                <img class="card-img-top" ng-src="{{ uni.image }}" alt="{{ uni.name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ uni.name }}</h5>
                    <p class="card-text">Location: {{ uni.location }}</p>
                    <p class="card-text">{{ uni.description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var app = angular.module('universityApp', []);

    app.controller('UniversityController', function ($scope) {
        $scope.universities = [
            {
                name: 'University of Karachi',
                location: 'Karachi, Sindh',
                description: 'The University of Karachi is a public research university located in Karachi, Sindh, Pakistan.',
                image: 'karachi.png'
            },
            {
                name: 'Lahore University of Management Sciences (LUMS)',
                location: 'Lahore, Punjab',
                description: 'Lahore University of Management Sciences is a private research university located in Lahore, Punjab, Pakistan.',
                image: 'LUMS.jpeg'
            },
            {
                name: 'Air University Kamra',
                location: 'Kamra, Punjab',
                description: 'The Air University Kamra Campus is a public research university located in Kamra, Punjab, Pakistan.',
                image: 'AU.jpg'
            },
            {
                name: 'Air University Islamabad',
                location: 'Islamabad, Punjab',
                description: 'The Air University Islamabad Campus is a public research university located in Islamabad, Punjab, Pakistan.',
                image: 'AU.jpg'
            },
            {
                name: 'Bahria University Islamabad',
                location: 'Kamra, Punjab',
                description: 'The Bahria University Kamra Campus is a public research university located in Islamabad, Punjab, Pakistan.',
                image: 'BU.jpeg'
            },
            {
                name: 'Comsats University Islamabad',
                location: 'Kamra, Punjab',
                description: 'The Comsats University Islamabad is a public research university located in Islamabad, Punjab, Pakistan.',
                image: 'CUI.jpeg'
            },
        ];

        $scope.customFilter = function (uni) {
            if (!$scope.searchUniversity) {
                return true;
            }
            return uni.name.toLowerCase().indexOf($scope.searchUniversity.toLowerCase()) !== -1;
        };
    });
</script>

</body>
</html>
