@extends('layouts.authApp')

@section('authcontent')

    <div class="col-sm-8 col-sm-offset-2">
        <div class="col-sm-12"></div>
        <div class="col-sm-12 register-top">
            <form class="form-horizontal register-container tb-padding" role="form" method="POST" action="{{ route('register') }}" >

                {{ csrf_field() }}

                <div class="form-group">
                    <div class="col-sm-12">
                        <h3 class="text-center">Sign Up to 
                            <span class="text-color">LaraExpenses</span>
                        </h3> 
                    </div>
                </div>

                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                    <label for="name" class=" col-sm-2 form-control-label ">
                        Name:
                    </label>
                    <div class="col-sm-10">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  autofocus>

                        @if($errors->has('name'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('name') }}
                                </strong>
                            </span>
                        @endif                        
                    </div>
                </div>

                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email" class=" form-control-label col-sm-2">
                        E-Mail Address
                    </label>
                    <div class="col-sm-10">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if($errors->has('email'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('email') }}
                                </strong>
                            </span>
                        @endif 
                    </div>
                </div>

                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }} ">
                    <label for="password" class=" form-control-label col-sm-2">
                        Password
                    </label>
                    <div class="col-sm-10">
                        <input id="password" type="password" class="form-control" name="password" >

                        @if($errors->has('password'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('password') }}
                                </strong>
                            </span>
                        @endif                         
                    </div>        
                </div> 

                <div class="form-group  {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    <label for="password-confirm" class=" form-control-label col-sm-2">
                        Confirm Password
                    </label>
                    <div class="col-sm-10">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
                    </div>
                </div>

                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="phone" class=" form-control-label col-sm-2">
                        Phone
                    </label>
                    <div class="col-sm-10">
                        <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                        @if($errors->has('phone'))
                            <span class="help-block">
                                <strong>
                                    {{ $errors->first('phone') }}
                                </strong>
                            </span>
                        @endif 
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
