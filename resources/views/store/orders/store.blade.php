@extends('layouts.back')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                       
                        <h3>Staff-List
                         
                            <a href="#" class="btn btn-success btn-sm float-right mt-auto" data-bs-toggle="modal"
                                data-bs-target="#staffModal">
                                <i class="fa fa-plus">Request an Asset</i></a>
                        </h3>
                      
                    </div>
                    <form action="{{ url('apply-store/'.$asset->id) }}" method="post" enctype="multipart/form-data"
                    class="form-horizontal">
                    @csrf
                 
                  
                    <div class="row form-group">
                        <div class="col col-md-3"><label for="selectSm" class=" form-control-label">
                            Department</label></div>
                        <div class="col-12 col-md-9">
                            <select name="depart_id" id="SelectLm" class="form-control">
                                <option value="0">--Department--</option>
                                @foreach ($departments as $item)  
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
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

 
    @endsection
