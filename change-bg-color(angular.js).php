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
            padding:10px;
        }
        input
        {
            padding: 10px;                  /* Increase padding for better size */
            font-size: 16px;                /* Increase font size */
            width: 300px;                   /* Set the width of the input box */
            border: 3px solid #ccc;         /* Add a border for better visibility */
            border-radius: 5px;             /* Add rounded corners */
            box-sizing: border-box;         /* Include padding and border in width calculation */
        }
        h1
        {
            padding: 15px;
            font-size: 25px;
            text-align: center;
        }
    </style>

    <!-- < Head Tag -->
</head>
<body>
    <h1>Welcome to Angular js</h1>
    <div ng-app="" ng-init="myCol='lightblue'">
        <input style="background-color:{{myCol}}" ng-model="myCol">
    </div>
</body>
</html>
