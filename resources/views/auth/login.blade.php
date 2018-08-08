@extends('layouts.authApp')

@section('authcontent')
    <div class="col-sm-4"></div>

    <div class="col-sm-4 register-top-login">
        <form class="form-horizontal register-container tb-padding" role= "form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}
          
          <div class="form-group">
              <div class="col-sm-12">
                  <h3 class="text-center">Login to 
                    <span class="text-color">Smart Expenses</span>
                  </h3>
              </div>
          </div> 

          <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
              <div class="col-sm-12">
                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
                  @if($errors->has('email'))
                    <span class="help-block">
                        <strong>
                            {{ $errors->first('email') }}
                        </strong>
                    </span>
                  @endif
              </div>
          </div> 
        </form>
    </div>
@endsection
