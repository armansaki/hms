@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default inside-body-panel-shadow">
                <div class="panel-heading" style="background-color: #245269; border-bottom-color: indianred;border-bottom-width: 2px;color: #cccccc"> <b> Login </b></div>

                <div class="panel-body">
                    <form class="form-horizontal col-md-offset-2" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group col-md-10 ">
                            <div class="input-group {{ $errors->has('contact') ? ' has-error' : '' }}">
                            	  <div class="input-group-addon">
											             Contact*
					  					         </div>
                               <input id="contact " type="text" class="form-control"  name="contact" value="" placeholder="please enter your contact number" required autofocus>
                            </div>
                                @if ($errors->has('contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group col-md-10 ">
                          <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-group-addon">
                              Password*
                            </div>
                            <input id="password " type="password" class="form-control"  name="password" value="" placeholder="Please enter your password" required autofocus>
                          </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
