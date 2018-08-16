@extends('layouts.app')

@section('content')
    <form >
        <div id="box" class="animated bounceIn">
            <div id="top_header">
                <img src="{{ asset('images/logo/logo.png') }}" alt="Admin Dashboard Logo">
                <h5>Sign in to access to your</h5>
            </div>
            <div id="inputs">
                <div class="form-block">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    <i class="icon-user-check"></i>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-block">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    <i class="icon-spell-check"></i>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <input type="submit" value="{{ __('Login') }}">
            </div>
            <div id="bottom" class="clearfix">
                <div class="pull-right">
                    <label class="switch pull-right">
                        <input type="checkbox" class="switch-input" checked="checked" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="switch-label" data-on="Yes" data-off="No"></span>
                            <span class="switch-handle"></span>
                    </label>
                </div>
                <div class="pull-right">
                    <span class="cb-label"> {{ __('Remember Me') }}</span>
                </div>
            </div>
        </div>
    </form>
@endsection
