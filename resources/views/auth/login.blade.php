@extends('auth_template')

@section('auth-content')

        {{-- Error From Validation --}}
        {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif --}}
        <div class="container login-form">

                <h3 class="head-title">{{ __('Login')}}</h3>

                {{-- <div class="alert alert-danger">
                    Email or password is incorect
                </div> --}}
                {{ Form::open(array('route' => 'CheckLogin','class'=>'form-signin'))}}
                @csrf

                <email-login>
                {{ Form::label('email', 'Email Address',array('class'=>'sr-only')) }}
                {{ Form::text('email', Input::old('email'), array('placeholder' => 'Email address','class'=>'form-control iptfrm','name'=>'email','ng-model'=>'EmailInput')) }}
                <p class="Error-notify"> <%EmailFalse%></p>
                <email-login>
                
                {{ Form::label('inputPassword', 'password',array('class'=>'sr-only')) }}
                {{ Form::text('password','', array('placeholder' => 'Password','class'=>'form-control iptfrm','name'=>'password')) }}
                {{-- <p class="Error-notify">Please Fill Password Field</p> --}}

                <button class="btn Login-button btn-block" type="submit">{{ __('Sign in') }}</button>
                {{Form::close()}}

                <a href="#" class="Link" >Register Here </a> 
        </div>
        
@endsection

 <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
//                                     {{ __('Forgot Your Password?') }}
//                                 </a>
//                                 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> -->


{{-- @if (session('status'))
                

                
<div class="alert alert-success col s3">
    {{ session('status') }}
</div>


@endif --}}