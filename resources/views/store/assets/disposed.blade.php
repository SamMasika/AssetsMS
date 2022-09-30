@extends('layouts.back')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4> Disposed Assets
                            <a href="{{url('assets-list')}}" class="btn btn-success btn-sm float-right">
                                <i class="fa fa-arrow-left"></i>
                            Back</a>
                        </h4>
                    </div>
                    <div class="table-responsive">
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Asset Name</th>
                                        <th>Disposed_at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($disposal as $info)
                                    <tr>
                                        <td>{{$info->asset->name}}</td>
                                        <td>{{$info->created_at}}</td>
                                        <td><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#ModalDisp{{ $info->id }}"
                                            class="btn btn-danger btn-sm"><i class="fa fa-trash"
                                            title="Delete"></i> </a>  
                                            @include('store.assets.dispdel')
                                        </td>
                                        </tr> 
                                        @endforeach  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @endsection