 @extends('layouts.back')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header"> 
                    <h2>Assing Role</h2>
                </div>    
                <div class="card-body">
                    <form action="{{url('userrole/'.$users->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                        @csrf
                     

                           <div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input"
                                        class=" form-control-label">Name</label></div>
                                <div class="col-12 col-md-9"><input type="text" id="text-input" name="name"
                                  class="form-control" value="{{ $users->name }}" readonly>
                                </div>
                            </div>
                        
                           
                           <div class="row form-group py-5">
                            <div class="col col-md-3"><label for="selectSm" class="">
                                Role Name</label></div>
                            <div class="col-12 col-md-9"> 
                           <select class="js-select2 form-control" name="role[]" id="rolename" multiple="multiple" >
                               @foreach($roles as $value)
                               <option <?php if (in_array($value->id,$userRole)) { echo "selected"; } ?> 
                                value="{{ $value->id }}">{{ $value->name }}</option> 
                               @endforeach
                           </select>
                       </div>
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
    
    
    