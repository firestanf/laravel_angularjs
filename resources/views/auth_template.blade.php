<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cfff</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.5/angular.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.12.0/validate.min.js"></script>

    {{-- custom js --}}
    {{ Html::script('js/main.js') }}
    {{ Html::script('js/auth/login/directive.js')}}
    {{ Html::script('js/service/validate.service.js')}}
    

    <style>
        /*Global*/
        html,
        body {
        height: 100%;
        }
        body
        {   
            Border:1px solid red;
            /* display: flex;
            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-content: center;
            align-content: center; */
            padding-top:11vmax;
            background-color: #f5f5f5;
        }

        /*Global*/

        /*Login-Register V1*/
        .register-form
        {
            max-width:700px;
            Border:1px solid red;
            text-align:center;
            Padding:2em 2em; 
        }
        
        .input-container
        {   
            margin-top:.5em;
            line-height:20px;
 
            height:60px;
        }
        .input-container  .inpt-border
        {
            /* -moz-box-shadow: 1px 2px 3px rgba(0,0,0,.5);
            -webkit-box-shadow: 1px 2px 3px rgba(0,0,0,.5);
            box-shadow: 1px 2px 3px rgba(0,0,0,.5); */
        }
        .error-border
        {
            Border:1px solid #dc3545;
        }
        .input-container .condition-notify
        {
            text-align:left;
            box-sizing: content-box;
            margin-left:.6em;
        }
        .error-text
        {
            color:#dc3545;
        }
        .succcess-text
        {
            color:green;
        }
        .button-action
        {
            Border:1px solid transparent;
            background:#4CAF50;   
            color:white;
            font-weight:600;
        }
        .button-action:hover
        {
        color:silver;
        }
        .term-con
        {   
            display:flex;
            padding-top:.5em;
            padding-bottom:.5em;
            padding-left:1.2em;
            text-align:left;
        }




.styled-checkbox {
  position: absolute;

  opacity: 0;
}
.styled-checkbox + label {
  position: relative;
  cursor: pointer;
  Border:1px solid red;
  
  padding: 0;
}
.lbl 
{
    Border:1px solid red;
    /* margin-left:100px; */
    float:right;
}
.styled-checkbox + label:before {
  content: '';
  margin-right: 10px;
  display: inline-block;
  vertical-align: text-top;
  width: 20px;
  height: 20px;
  background: white;
  Border:1px solid red;
}
.styled-checkbox:hover + label:before {
  background: #f35429;
}
.styled-checkbox:focus + label:before {
  box-shadow: 0 0 0 3px rgba(0, 0, 0, 0.12);
}
.styled-checkbox:checked + label:before {
  background: #f35429;
}
.styled-checkbox:disabled + label {
  color: #b8b8b8;
  cursor: auto;
}
.styled-checkbox:disabled + label:before {
  box-shadow: none;
  background: #ddd;
}
.styled-checkbox:checked + label:after {
  content: '';
  position: absolute;
  left: 5px;
  top: 9px;
  background: white;
  width: 2px;
  height: 2px;
  box-shadow: 2px 0 0 white, 4px 0 0 white, 4px -2px 0 white, 4px -4px 0 white, 4px -6px 0 white, 4px -8px 0 white;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
        /*Login-Register V1*/
    </style>
</head>
    <body ng-app="myApp">
        @yield('auth-content')
    </body>
</html>