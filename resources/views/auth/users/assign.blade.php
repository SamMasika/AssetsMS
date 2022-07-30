 @extends('layouts.back')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"> 
                    <h4>Assing Role</h4>
                </div>    
                <div class="card-body">
                    <form action="{{url('userrole/'.$users->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                        <div class="mt-2">
                        <input type="text" class="form-control" name="name" value={{$users->name}} readonly>
                           </div>

                           
                           <div class="mt-5">        
                    @foreach($roles as $value)
                    <label>{{ Form::checkbox('role[]', $value->id, in_array($value->id, $userRole) ? true : false, array('class' => 'name')) }}
                    {{ $value->name }}</label>
                    <br/>
                    @endforeach
                           </div>
                            <div class="mt-3">
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
    
    
    