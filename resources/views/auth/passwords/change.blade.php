@extends('layouts.back')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <h4> Change Password</h4>  
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update-password') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @elseif (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                    
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Old Password</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="password"  name="old_password"  class="form-control
                                    @error('old_password') is-invalid @enderror"  id="oldPasswordInput" placeholder="Old Password">
                                    @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                    
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">New Password</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="password"  name="new_password"  class="form-control
                                    @error('new_password') is-invalid @enderror"  id="newPasswordInput" placeholder="New Password">
                                    @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>
                    
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Confirm New Password</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="password"  name="new_password_confirmation"  class="form-control" id="confirmNewPasswordInput" placeholder="Confirm New Password">
                                  
                                </div>
                            </div>
                    
                                   
                            <div>
                                <button type="submit" class="btn btn-primary btn-sm float-right">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                            </div> 
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div> 
@endsection

