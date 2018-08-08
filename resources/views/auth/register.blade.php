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
                            <span class="text-color">Smart Expense Keeping</span>
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

            </form>
        </div>
    </div>

@endsection
