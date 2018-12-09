
    ModuleDeclare.controller("listCtrl",myctrl);
    myctrl.$inject=['$scope','todofactory'];
    function myctrl($scope,todofactory) {
        $scope.getprogress=function(){
            todofactory.request_todo();
        }
        $scope.add_todo=function(){
            $('#AddModal').modal('show');
        }
    }
