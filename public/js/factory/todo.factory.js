ModuleDeclare.factory('todofactory',['$http','$q','$rootScope',todo]);
function todo($http,$q,$rootScope)
{
    var factory={};
    var on_progress=[{des:'this is tehat',
    created:1544074214}
    ,        {des:'this is tehat',
    created:1544074214}
    ,        {des:'this is tehat',
    created:1544074214}];
    var fin=[{des:'this is tehat',
    created:1544074214}
    ,        {des:'this is tehat',
    created:1544074214}
    ,        {des:'this is tehat',
    created:1544074214}];
    var URL='https://jsonplaceholder.typicode.com/posts'

    factory.request_todo=function(){

  
        setTimeout(() => {
            $http({
                method: 'POST',
                url: URL
              }).then(function successCallback(response) {
                  console.log()
                    $rootScope.$broadcast('add_finish',{command:'GET_DATA',data:fin});
                    $rootScope.$broadcast('add_onprogress',{command:'GET_DATA',data:on_progress}); 
                }, function errorCallback(response) {
                    $rootScope.$broadcast('add_finish',{command:'FAIL_UPDATE'});
                    $rootScope.$broadcast('add_onprogress',{command:'FAIL_UPDATE'});
              });
        }, 2500);


    }
    factory.remove_finish=function(position){
        fin.splice(position,1);   
        $rootScope.$broadcast('add_finish',{command:'UPDATE',size:fin.length});   
    }
    factory.move_to_finish=function(position){
        fin.push(on_progress[position]);
        on_progress.splice(position,1);
        $rootScope.$broadcast('add_onprogress',{command:'UPDATE',size:on_progress.length});
        $rootScope.$broadcast('add_finish',{command:'UPDATE',size:fin.length}); 
    }
    factory.return_onprogress=function(){

    }


    return factory;
}


//info

// https://stackoverflow.com/questions/37296070/angularjs-directive-templateurl-in-laravel5-2