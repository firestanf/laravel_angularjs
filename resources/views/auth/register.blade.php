@extends('auth_template')

@section('auth-content')
<div class="container register-form">

    <h3 class="head-title">{{ __('Register')}}</h3>

    <div class="row input-container" >
        <div class="col">
            <email-login>
                {{ Form::label('email', 'Email Address',array('class'=>'sr-only')) }}
                {{ Form::text('email', Input::old('email'), array('placeholder' => 'Email address','class'=>'form-control inpt-border error-border','name'=>'email','ng-model'=>'EmailInput')) }}
                <p class="condition-notify error-text">
                   Test {{-- <%EmailFalse%> --}}
                </p>
            <email-login>
        </div>
    </div>
    <div class="row input-container" >
            <div class="col">
                    {{ Form::label('Name', 'Name',array('class'=>'sr-only')) }}
                    {{ Form::text('Name', Input::old('ame'), array('placeholder' => 'Name','class'=>'form-control inpt-border error','name'=>'email','ng-model'=>'')) }}
                    <p class="condition-notify error-text">
                        Test {{-- <%EmailFalse%> --}}
                     </p>
            </div>
    </div>
    <div class="row  " >
        <div class="col-6 input-container">
            {{ Form::label('inputPassword', 'password',array('class'=>'sr-only')) }}
            {{ Form::text('password','', array('placeholder' => 'Password','class'=>'form-control
            inpt-border','name'=>'password')) }}
              <p class="condition-notify error-text">
                Test {{-- <%EmailFalse%> --}}
             </p>  
        </div>
        <div class="col-6 input-container">
            {{ Form::label('inputPassword', 'password',array('class'=>'sr-only')) }}
            {{ Form::text('password','', array('placeholder' => 'Repeat Password','class'=>'form-control
            inpt-border','name'=>'password')) }}
                  <p class="condition-notify error-text">
                    Test {{-- <%EmailFalse%> --}}
                 </p>
        </div>
    </div>

    <div class="row " >
        <div class="col-12 term-con" >
            <input class="styled-checkbox" id="styled-checkbox"     type="checkbox" value="value1" >
            {{-- <label for="styled-checkbox" class="lbl"></label> --}}
            <div>
                
            </div>
        </div>
    </div>
    <div class="row" >
            <div class="col-12" >
                    <button class="btn button-action btn-block " type="submit">{{ __('Register') }}</button>
            </div>
    </div>

</div>

@endsection
