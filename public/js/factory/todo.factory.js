ModuleDeclare.factory('todofactory',['$http','$q','$rootScope',todo]);
function todo($http,$q,$rootScope)
{
    var factory={};
    var on_progress=[];
    var fin=[{des:'this is tehat',
    created:1544074214}
    ,        {des:'this is tehat',
    created:1544074214}
    ,        {des:'this is tehat',
    created:1544074214}];
    var URL='qwdqwd'

    factory.request_todo=function(){
        $http({
            method: 'POST',
            url: URL
          }).then(function successCallback(response) {
                alert('people');

            }, function errorCallback(response) {
                alert('alde');
                $rootScope.$broadcast('add_finish',{data:fin});
          });
    }
    return factory;
}