
    ModuleDeclare.controller("todo_finctrl",myctrl);
    myctrl.$inject=['$scope','todofactory','$rootScope'];
    function myctrl($scope,todofactory,$rootScope) {
        $scope.total_task = 0;
        $scope.list_data = [];
        $scope.Status="LOADING";       
        $rootScope.$on('add_finish', function(ev, args){
            switch (args.command)
            {
            case "GET_DATA":
            $scope.Status="IF_EMPTY"
            $scope.list_data=args.data;
            $scope.total_task=$scope.list_data.length;
            break;
            case "UPDATE":
                $scope.total_task=args.size;
            break;
            case "FAIL_UPDATE":
                $scope.Status="FAIL_UPDATE";
            break;
            }
        });
        $scope.return_progress=function($event){
            todofactory.return_onprogress();
            alert($event.target.getAttribute('data-position'));
        }
        $scope.finish_progress=function($event){
            todofactory.remove_finish($event.target.getAttribute('data-position'));
        }

    }