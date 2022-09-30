<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assets List</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h2 align="center">Assets List</h2>
                    </div>
                    <div class="table-responsive">
                        <div class="card-body">
                            <table id="#" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th style="border: 1px solid; padding:12px;" width="5%">ID</th>
                                        <th  style="border: 1px solid; padding:12px;" width="15%">Name</th>
                                        <th style="border: 1px solid; padding:12px;" width="15%">Asset Code</th>
                                        <th style="border: 1px solid; padding:12px;" width="15%">Staff_Assigned</th>
                                        <th style="border: 1px solid; padding:12px;" width="15%">Condition</th>
                                       <th style="border: 1px solid; padding:12px;" width="20%">Request</th>
                                        <th style="border: 1px solid; padding:12px;" width="15%">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $asset)
                                        <tr>
                                            <td style="border: 1px solid; padding:12px;"> {{ $asset->id }}</td>
                                            <td style="border: 1px solid; padding:12px;">{{ $asset->name }}</td>
                                            <td style="border: 1px solid; padding:12px;">{{ $asset->asset_code }}</td>
                                            @if($asset->user_id==NULL)
                                            <td style="border: 1px solid; padding:12px;"> <i><b> None</b></i></td>
                                            @else
                                            <td style="border: 1px solid; padding:12px;">{{ $asset->user->name }}</td>
                                            @endif
                                            @if ($asset->status == 'broken')
                                            <td style="border: 1px solid; padding:12px;">
                                               {{ $asset->status }}
                                                </td>
                                                @else
                                                <td style="border: 1px solid; padding:12px;">
                                                    {{ $asset->status }}
                                                </td>
                                                @endif  
                                                <td style="border: 1px solid; padding:12px;">
                                                    @if ($asset->flug=='0')
                                                   Not Requested
                                                    @elseif($asset->flug=='1')
                                                   Pending
                                                    @elseif($asset->flug=='2')
                                                   Approved
                                               @elseif($asset->flug=='3')
                                              Assigned
                                               @endif
                                            </td>
                                                
                                            <td style="border: 1px solid; padding:12px;">
                                                @if ($asset->user_id !=NULL)
                                                    In Use
                                                    @else
                                                    In Store
                                                    @endif
                                            </td>
                                               
                                            </tr>
                                            @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
           
            </div>    
</body>
</html>





  

  