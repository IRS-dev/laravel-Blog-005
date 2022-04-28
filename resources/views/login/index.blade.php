@extends('layouts.auth')
@section('form')
<div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
    <div class="auth-box bg-dark border-top border-secondary">
        <div id="loginform">
            <h3 class="text-center text-light">Login</h3>
            <!-- Form -->
            @if(session()->has('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif
            @if(session()->has('loginError'))
            <div class="alert alert-danger" role="alert">{{ session('loginError') }}</div>
            @endif

            <form class="form-horizontal m-t-20" id="loginform" method="POST" action="/login">
                @csrf
                <div class="row p-b-30">
                    <div class="col-12">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                            </div>
                            <input  autofocus name="username" value="{{ old('username' )}}" type="text" class=" @error('username') is-invalid @enderror form-control form-control-lg" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                        @error('username')
                        <div>
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                        @enderror
                        <!-- email -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                            </div>
                            <input name="email" value="{{ old('email') }}" type="email" class="@error('email') is-invalid @enderror form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                        @error('email')
                        <div>
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                        @enderror
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                            </div>
                            <input name="password" type="password" class=" form-control form-control-lg" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                        </div>
                        @error('password')
                        <div>
                            <span class="text-danger">{{ $message }}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row border-top border-secondary">
                    <div class="col-12">
                        <div class="form-group">
                            <div class="p-t-20">
                                <button class="btn btn-success float-right" type="submit">Login</button>
                                <a href="/" class="btn btn-light">Back to Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <span class="text-light">Not registered? <a href="/register">Register Now!</a></span>
        </div>

    </div>
</div>
@endsection