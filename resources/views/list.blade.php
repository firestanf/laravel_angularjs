<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Todo list project</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular.js"></script>

    <!-- My Custom Js -->
    <script src="js/main.js"></script>
    <script src="js/factory/todo.factory.js"></script>
    <script src="js/controller/List.controller.js"></script>
    <script src="js/controller/todo/finished.controller.js"></script>

    <script src="js/directive/User_info.directive.js"></script>

    <!-- My Custom Js -->

    <!-- Custom css -->
    <link href="css/index.css" rel="stylesheet">
    </link>
    <!-- Custom css -->


</head>
@include('Widget.Nav')

<body>

    @include('Widget.Add')
    @include('Widget.Edit')

    {{csrf_field()}}
    <div class="container" ng-app="myApp" ng-controller="listCtrl" ng-init="getprogress()">
        <!--??-->

        <div class="row">
            <div class="col-lg-12 title-todo">
                <h2>My Todo List</h2>
                <button class="btn btn-outline-primary add-btn">Add Todo</button>
            </div>
            @include('layouts.todo.Onprogress')
            @include('layouts.todo.Finished')
        </div>
        <!--End Row-->

    </div>


</body>







</html>
