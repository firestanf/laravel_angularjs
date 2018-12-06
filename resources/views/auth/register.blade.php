@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>








        <div class="container-dummy">
            <div class="Register card">
                
                <div class="row">
                        <form class="col s12">
                                <h3>Register</h3>
                          <div class="row">
                            <div class="input-field col m6 s12">
                                <i class="fas fa-user prefix"></i>
                              <input id="Username_reg" type="text" class="validate">
                              <label for="Username_reg">Username</label>

                              <span class="helper-text help-error">Helper text</span>
                              <span class="helper-text help-success">Helper text</span>

                            </div>
                            <div class="input-field col m6 s12">
                                <i class="fas fa-envelope prefix"></i>
                                <input id="Email_reg" type="text" class="validate">
                                <label for="Email_reg">Email</label>



                              </div>
                            <div class="input-field col s12">
                                <i class="fas fa-key prefix"></i>
                              <input id="Password-reg" type="tel" class="validate">
                              <label for="Password-reg">Password</label>




                            </div>
                            <div class="input-field col s12">
                                <i class="fas fa-key prefix"></i>
                              <input id="Retype-Password-reg" type="tel" class="validate">
                              <label for="Retype-Password-reg">Retype-Password</label>
                            </div>

                            <div class="col s12 register-footer">
                                <input type="button" value="Register" class="button">
                                <a href="" class="link">Login Here</a>
                            </div>

                          </div>
                        </form>
                      </div>
</div>
        </div>
@endsection
