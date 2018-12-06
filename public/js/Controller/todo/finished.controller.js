
    ModuleDeclare.controller("todo_finctrl",myctrl);
    myctrl.$inject=['$scope','todofactory','$rootScope'];
    function myctrl($scope,todofactory,$rootScope) {
        $scope.total_task = 123456;
        $scope.total_finishedtask=2;
        $scope.list_data = [];
        $rootScope.$on('add_finish', function(ev, args){
            console.log(args);
            $scope.list_data=args.data;
        });
        $scope.return_progress=function($event){
            alert('fight');
        }
        $scope.finish_progress=function($event){

        }
    }