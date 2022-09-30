<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Assets MS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="#">
    <link rel="shortcut icon" href="#">
    
    {{-- multiselect --}}
    <link rel="stylesheet" href="{{asset('back/vendors/bootstrap/dist/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('back/vendors/chosen/chosen.min.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('back/assets/css/select2.min.css')}}">
	<link rel="stylesheet" href="select222.css">
	<link rel="stylesheet" href="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{asset('back/assets/js/select2.min.js')}}"></script>
    {{-- <link rel="stylesheet" href="{{asset('back/assets/css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('back/assets/css/dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('back/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('back/assets/css/style.css')}}">
    <script src="https://scripts.guru/download/multiselect/jquery.min.js"></script>
<link href="https://scripts.guru/download/multiselect/jquery.multiselect.css" rel="stylesheet" />
{{-- <link rel="stylesheet" type="text/css" href="css/example-styles.css">
<link rel="stylesheet" type="text/css" href="css/demo-styles.css"> --}}
    <link rel="stylesheet" href="{{asset('back/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/vendors/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('back/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('back/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">
    {{-- Datatable --}}
    <link rel="stylesheet" href="{{asset('back/assets/css/b5.css')}}">
    <link rel="stylesheet" href="{{asset('back/assets/css/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>


<body class="bg-light">
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
      @include('layouts.back.sidebar')
    </aside><!-- /#left-panel -->
    
    <!-- Left Panel -->
    
    <!-- Right Panel -->
    
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        @include('layouts.back.navbar')
        
        {{-- Success message --}}
        @if(session()->has('success'))
        <div class="col-sm-12">
            <div class="alert  alert-success alert-dismissible fade show" role="alert">
                {{-- <span class="badge badge-pill badge-info">
                    <strong>Success:</strong>
                </span> --}}
                {{ session()->get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif
        
        {{-- Error message --}}
        @if(session()->has('error'))
        <div class="col-sm-12">
            <div class="alert  alert-danger alert-dismissible fade show" role="alert">
                {{-- <span class="badge badge-pill badge-danger">
                </span> --}}
                {{ session()->get('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        @endif
        
        <!-- Header-->
        @yield('content')
        
    </div>
    <!-- /#right-panel -->
    
    {{-- <!-- Right Panel -->
        <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="js/jquery.multi-select.js"></script>     --}}
      
       
       
    <script src="{{asset('back/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('back/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('back/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('back/assets/js/main.js')}}"></script>
    <script src="{{asset('back/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('back/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('back/assets/js/widgets.js')}}"></script>
    <script src="{{asset('back/assets/js/select2.js')}}"></script>
    <script src="{{asset('back/assets/js/custom.js')}}"></script>
    <script src="{{asset('back/assets/js/details.js')}}"></script>
    <script src="{{asset('back/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('back/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('back/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('back/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('back/vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="https://scripts.guru/download/multiselect/jquery.multiselect.js"></script>
    
    <script src="script.js"></script>
    <script src="{{asset('back/vendors/chosen/chosen.jquery.min.js')}}"></script>
<script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>
    <script>
        (function($) {
            "use strict";
            
            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
        </script>



<script src="{{asset('back/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('back/assets/js/main.js')}}"></script>
<script src="{{asset('back/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('back/vendors/datatables.net/js/datatable.js')}}"></script>
<script src="{{asset('back/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('back/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('back/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('back/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('back/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('back/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('back/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('back/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('back/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('back/assets/js/init-scripts/data-table/datatables-init.js')}}"></script>

<script src="{{asset('back/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('back/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('back/vendors/peity/jquery.peity.min.js')}}"></script>
<!-- scripit init-->


{{-- multiselect --}}
<script type="text/javascript" src="{{asset('back/assets/js/jquery-2.2.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('back/assets/js/jquery.multi-select.js')}}"></script>
<script src="{{asset('back/assets/js/multiselect.js')}}"></script>
{{-- <script type="text/javascript"> --}}



@yield('scripts')
</body>
</html>
