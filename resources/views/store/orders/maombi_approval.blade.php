@extends('layouts.back')

@section('content')
    <div class="container py-5">
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h6>  <strong>Approve</strong> </h6>
            </div>
            <div class="card-body">

                <form action="{{ url('maombi-process/'. $maombi->id) }}" method="post" enctype="multipart/form-data"
                           class="form-horizontal">
                           @csrf
                           <div class="row form-group ">
                               <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                                   Status</label></div>
                               <div class="col-12 col-md-9">
                                   <select name="status" id="SelectLm" class="form-control">
                                       <option value="0">--Status--</option>
                                       <option  value="0">Pending</option>
                                       <option  value="1">Approved</option>  
                                       <option  value="2">Rejected</option>  
                                    </div> 
                                   </select>
                               </div>
                           </div>   
                           <div>
                               <button type="submit" class="btn btn-primary btn-sm float-right">
                                   <i class="fa fa-dot-circle-o"></i> Update
                               </button>
                           </div>
                       </form>
            </div>
        </div>
    </div>
</div>
@endsection