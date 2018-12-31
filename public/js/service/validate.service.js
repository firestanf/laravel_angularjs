ModuleDeclare.service('ValidateService',['$q','$http',function ($q,$http) {

  var confirm_constraints = {
    password: {
      // Password is also required
      presence: true,
      // And must be at least 5 characters long
      length: {
        minimum: 5
      }
    },
    confirmPassword: {
      presence: true,
      equality: "password"
    }
  };

  var Email_constraints = {
    email: {
      presence: true,
      email: true
    }
  }
  var Password_constraints = {
    password: {
      // Password is also required
      presence: true,
      // And must be at least 5 characters long
      length: {
        minimum: 5
      }
    }
  }
  var Name_constraints={
   name:{
    presence: true,
   } 
  }




  //Return value
  this.CheckEmailValidator = function (EmailVal) {
    if (EmailVal.length == 0) {
      EmailVal = null;
    }
    var result = validate({
      email: EmailVal
    }, Email_constraints);

    if(result == undefined)
    {
      var deferred = $q.defer();
      //cache email if alrady checked?
      setTimeout(function() {
        if (1==2) {
          deferred.resolve('This Email is Available');
        } else {
          deferred.reject('This Email Already Taken');
        }
      }, 10000);
    
      result=deferred.promise;
    }

    return result;
  }
  this.CheckPasswordValidator = function (password) {
    if (password.length == 0) {
      password = null;
    }
    var result = validate({
      password: password
    }, Password_constraints);
    return result;
  }
  this.ComparePasswordValidator = function (password,Rptpassword) {
  console.log(password + Rptpassword)
    var result = validate({
      password: password,
      confirmPassword:Rptpassword
    }, confirm_constraints);
    return result;
  }
this.CheckNameValidator=function(name){
  if (name.length == 0) {
    name = null;
  }
  var result=validate({name:name},Name_constraints);
  
  if(result == undefined)
  {
    if (/^(\w+\s?)*\s*$/.test(name)) {
      console.log('error');
      //return s.replace(/\s+$/, '');
    }
  }

  console.log(result);
  return result;
}






}]);

// var form = document.querySelector("form#main");
//       form.addEventListener("submit", function(ev) {
//         ev.preventDefault();
//         handleFormSubmit(form);
//       });

//https://validatejs.org/examples.html
//https://itnext.io/how-to-cancel-http-requests-in-angularjs-4ccf351319e0
//https://stackoverflow.com/questions/51434679/manually-cancel-q-angularjs