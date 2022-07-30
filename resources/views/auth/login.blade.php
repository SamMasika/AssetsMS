@extends('layouts.log')

@section('content')

<div class=" d-flex align-content-center flex-wrap">
    <div class="container py-5">
        <div class="login-content">
            <div class="login-logo">
                {{-- <a href="index.html">
                    <img class="align-content" src="{{asset('back/images/asset.jfif')}}" alt="" style="
                        border-radius: 35%;">
                </a>
                 --}}
            </div>
            
            <div class="login-form">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group mt-3">
                        <label>Email Address</label>
                        <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                    </div>
                           
                    <div class="">

                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-sign-in"></i> Sign in</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection
