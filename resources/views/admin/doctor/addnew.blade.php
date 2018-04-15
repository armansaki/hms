@extends('layouts.master')

@section('content')
 <div class="col-md-8 col-md-offset-3">
           <div class="panel panel-default inside-body-panel-shadow">
            <div class="panel-heading"> Doctor Registration </div>
            <div class="panel-body">
            	<form  method="POST" action="{{route('adddoctor')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group col-md-12 ">
                            <div class="input-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            	  <div class="input-group-addon">
											 Name*
					  					  </div>
                                <input id="name " type="text" class="form-control"  name="name" value="" placeholder="please enter name" required autofocus>
                            </div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>


                        <div class="form-group col-md-12 ">
                            <div class="input-group {{ $errors->has('contact') ? ' has-error' : '' }}">
                            	  <div class="input-group-addon">
											 Contact*
					  					  </div>
                                <input id="contact " type="text" class="form-control"  name="contact" value="" placeholder="01*********" required autofocus>
                            </div>
                                @if ($errors->has('contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group col-md-12 ">
                            <div class="input-group {{ $errors->has('degree') ? ' has-error' : '' }}">
                            	  <div class="input-group-addon">
											 Degree*
					  					  </div>
                                <input id="degree " type="text" class="form-control"  name="degree" value="" placeholder="Enter Degree" required autofocus>
                            </div>
                                @if ($errors->has('degree'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('degree') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group col-md-12 ">
                            <div class="input-group {{ $errors->has('speciality') ? ' has-error' : '' }}">
                            	  <div class="input-group-addon">
											 speciality*
					  					  </div>
                                <input id="speciality " type="text" class="form-control"  name="speciality" value="" placeholder="Enter speciality" required autofocus>
                            </div>
                                @if ($errors->has('speciality'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('speciality') }}</strong>
                                    </span>
                                @endif
                        </div>


                        <div class="form-group col-md-12 ">
                            <div class="input-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            	  <div class="input-group-addon">
											 Password*
					  					  </div>
                                <input id="password " type="password" class="form-control"  name="password" value="" placeholder="enter password" required autofocus>
                            </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group col-md-12 ">
                            <div class="input-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            	  <div class="input-group-addon">
											 Password Confirmation*
					  					  </div>
                                <input id="password_confirmation " type="password" class="form-control"  name="password_confirmation" value="" placeholder="Confirm Password" required autofocus>
                            </div>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group col-md-12 ">
                          <div class="input-group {{ $errors->has('picture') ? ' has-error' : '' }}">
                            <div class="input-group-addon">
                              Picture*
                            </div>
                            <input id="picture " type="file" class="form-control"  name="picture" value="" placeholder="enter picture" required autofocus>
                          </div>
                          @if ($errors->has('picture'))
                          <span class="help-block">
                            <strong>{{ $errors->first('picture') }}</strong>
                          </span>
                          @endif
                        </div>


                        <div class="form-group">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary btn-sm pull-left">
                                    Save
                                </button>

										<button type="reset" class="btn btn-primary btn-sm pull-right">
                                    Reset
                                </button>

                            </div>
                        </div>
                    </form>
          	</div>
      </div>
    </div>
@endsection
