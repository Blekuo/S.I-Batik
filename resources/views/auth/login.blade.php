@extends('layouts.main')
@section('content')
<style>
    body {
        background: url('/img/bg.png');
        background-repeat: no-repeat;
        background-size: cover;
        }
</style>
@include('layouts.loading.load')
<div class="container d-none" style="margin-top: 3%;" id="content">
    <div class="d-flex justify-content-center">
        <div>
            <div class="card card-body shadow" style="border-radius: 5px;width: 40rem;background: url('/img/navbar-side.png')">
                <div class="d-flex justify-content-center">
                    <img src="{{ \App\Models\Webpack::where('name', 'webicon')->first()->url }}" alt="" width="20%" style="border-radius: 20px">
                </div>
                <h3 class="text-center">
                    {{ env('APP_NAME') }}
                </h3>
                <h4 class="text-muted text-center">
                    Sign to your account.
                </h4>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="" class="form-label">Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <small id="helpId" class="form-text text-muted">Must contained @</small>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <small id="helpId" class="form-text text-muted">Your info is secure.</small>
                    </div>
                    <div class="row p-2">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for=""> Keep me logged in. </label>
                            </div>

                        </div>
                        <div class="col text-end">
                            <a href="/password/reset">Forgot password?</a>
                        </div>
                    </div>
                    <div class="row p-2">
                        <button type="submit" class="col btn btn-primary" style="font-size: 20px">
                            Login
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>
@endsection
