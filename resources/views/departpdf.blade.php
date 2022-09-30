<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <div class="card">
                  
                        <div class="table-responsive">
                            <div class="card-body">
    
                                <table id="bootstrap-data-table-export" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            {{-- <th>#</th> --}}
                                            <th >Name</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($assets as $department)
                                        
                                        <tr>
                                            {{-- <td>{{$department->id}}</td> --}}
                                            <td>{{$department->name}}</td>
                                            
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
</body>
</html>


{{-- @extends('layouts.back')

@section('content')

  
    
@endsection --}}