@extends('layouts.app')

@section('content')
<div class="container-dummy">
    <div class="Login card">

        <div class="row">
            <form class="col s12" method="POST" action="{{ route('login') }}">
                @csrf
                <h3>{{ __('Login') }}</h3>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="fas fa-envelope prefix"></i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">{{ __('E-Mail Address') }</label>
                    </div>
                    <div class="input-field col s12">
                        <i class="fas fa-key prefix"></i>
                        <input id="icon_telephone" type="tel" class="validate">
                        <label for="icon_telephone">{{ __('Password') }}</label>
                    </div>
                    <div class="col s12 login-footer">
                        <input type="button" value="Login" class="button">
                        <a href="" class="link">Register Here</a>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> -->
