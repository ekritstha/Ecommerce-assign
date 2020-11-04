@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">{{ __('Confirm Password') }}</p>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <div class="input-group mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    required autocomplete="current-password" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block"> {{ __('Confirm Password') }}</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        @if (Route::has('password.request'))
        <p class="mt-3 mb-1">
            <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
        </p>
        @endif
    </div>
    <!-- /.login-card-body -->
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Confirm Password') }}</div>

<div class="card-body">
    {{ __('Please confirm your password before continuing.') }}

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Confirm Password') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div> --}}
@endsection