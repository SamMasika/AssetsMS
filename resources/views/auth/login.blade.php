@extends('layouts.log')

@section('content')
<div class="container">
    {{-- <div class=" d-flex align-content-center flex-wrap"> --}}
        <div class="container py-5">
            <div class="">
                <h1 style="text-align: center; opacity:0.8;"> <strong>Assets Management System</strong>    </h1>
            </div>
            <div class="login-content">
                <div class="login-form">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <h2 class="text-primary" style="text-align:center; opacity:0.8;"> <strong>Login</strong> </h2>
                        <div class="form-group mt-3 lo">
                            {{-- <label > <i class="fa fa-user fa-lg position-absolute"></i></label> --}}
                            <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror " placeholder="Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                       
                            <div class="form-group lo py-2">
                                {{-- <label>Password</label> --}}
                                <input type="password" class="form-control @error('password') is-invalid @enderror lock" name="password" required autocomplete="current-password" placeholder="Password">
                        </div>
                               
                        <div class="form-group py-3">
                            <button type="submit" class="btn btn-primary btn-sm  small_btn"><i class="fa fa-sign-in"></i> <strong>Login</strong> </button>
                        </div>
    
                    </form>
                </div>
            </div>
        </div>
    {{-- </div> --}}
</div>
@endsection
