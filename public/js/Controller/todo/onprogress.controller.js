ModuleDeclare.controller("todo_onprogressctrl",myctrl);
myctrl.$inject=['$scope','todofactory','$rootScope'];
function myctrl($scope,todofactory,$rootScope) {
    $scope.total_task = 0;
    $scope.list_data = [];
    
   
    $rootScope.$on('add_onprogress', function(ev, args){
        console.log('a');
        switch (args.command)
        {
        // case "LOADING":
        
        //     $scope.condition=args.message;
        // break;
        case "GET_DATA":
        $scope.list_data=args.data;
        $scope.total_task=$scope.list_data.length;
        break;
        case "UPDATE":
            $scope.total_task=args.size;
        break;
        }
    });

    // $scope.condition=
        
    //         return 'you have no task';
        
    
    $scope.finish_progress=function($event){
        todofactory.move_to_finish($event.target.getAttribute('data-position'));
    }

}