@extends('layouts.authApp')

@section('authcontent')

    <div class="col-sm-4"></div>

    <div class="col-sm-8 col-sm-offset-2 register-top-login">
        <form class="form-horizontal register-container tb-padding" method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <div class="col-sm-12">
                    <h3 class="text-center">Reset Password?</h3>                    
                </div>
            </div>
        </form>
    </div>

@endsection