 @extends('layouts.layout3')    <!--   includes2 used for login and register -->
@section('change') 
<div class="container mt-5">
    <div class="row justify-content-center ">
        <div class="col-md-8">
            <div class="card bg-light">
                <div class="card-header text-center">{{ __('Login') }}</div>

                   <div class="card-body">
                       <form method="POST" action="{{ route('login') }}">
                           @csrf

                           <div class="form-group row">
                             <label for="email" class="col-md-4 col-form-label text-md-right"><i class="fa fa-envelope-square"></i>{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

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

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4 ">
                                <button type="submit" class="btn btn-primary" style="margin-left:60px" >
                                    {{ __('Login') }}
                                </button> 
                                <br>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                       <br>
                                              <br>

                                  <div class="">
                                        <label style="margin-left:10px;">Don't have an account?</label>
                                         <a href="pages/register" style="color:red;"> Register</a>
                                  </div>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
