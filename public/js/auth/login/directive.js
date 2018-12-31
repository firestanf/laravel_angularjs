ModuleDeclare.directive('emailLogin',['ValidateService',emaildirective]);
ModuleDeclare.directive('loginButton',['ValidateService',loginbuttondirective]);

function emaildirective(ValidateService)
{
  function Link(scope, elem, attrs) {
    elem.on('change', function() {
      var Result=ValidateService.CheckEmailValidator(scope.EmailInput);
      console.log(Result);
      if(Result != undefined)
      {scope.EmailFalse=Result.email[0];}
      else
      {scope.EmailFalse = "";}
      console.log(ValidateService.ResultValdate());
    });
    
  }
  return {
    link: Link
  };

}

function loginbuttondirective(ValidateService)
{
  function Link(scope, elem, attrs) {
    document.getElementById(attrs.id).disabled = true;
    
  }
  return {
    link: Link
  };
}