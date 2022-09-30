<nav class="navbar navbar-expand-sm navbar-default">
    <div class="navbar-header">
        <button class="navbar-toggler" type="button" 
        data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" 
        aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <h5></h5>
        <a class="navbar-brand asset" href="{{url('dashboard')}}">Assets Ms</a>
        {{-- <a class="navbar-brand hidden" href="./"><img src="{{asset('back/images/log.png')}}" alt="Logo"></a> --}}
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse py-5">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="{{url('dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
            </li>
            
         
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle {{Request::is('assets-list')?'active':''}}" data-toggle="dropdown" aria-haspopup="true" 
            aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Assets</a>  
            <ul class="sub-menu children dropdown-menu">
                {{-- @can('asset-content') 
                <li><i class="fa fa-table {{Request::is('vendor-list')?'active':''}}"></i><a href="{{url('vendor-list')}}">Vendors List</a></li>
                @endcan --}}
                <li><i class="fa fa-table {{Request::is('assets-list')?'active':''}}"></i><a href="{{url('assets-list')}}">All Assets</a></li>
                <li><i class="fa fa-table {{Request::is('electronics')?'active':''}}"></i><a href="{{url('electronics')}}">Electronics</a></li>
                <li><i class="fa fa-tasks {{Request::is('furnitures')?'active':''}}"></i><a href="{{url('furnitures')}}">Furnitures</a></li>
                <li><i class="fa fa-tasks {{Request::is('buildings')?'active':''}}"></i><a href="{{url('buildings')}}">Buildings</a></li>            
                <li><i class="fa fa-tasks {{Request::is('vehicles')?'active':''}}"></i><a href="{{url('vehicles')}}">Vehicles</a></li>            
                <li><i class="fa fa-tasks {{Request::is('others')?'active':''}}"></i><a href="{{url('others')}}">Others</a></li>        
                </ul>
        </li>
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" 
            aria-expanded="false"> <i class="menu-icon fa fa-rocket"></i>Requests</a>  
            <ul class="sub-menu children dropdown-menu">
                <li><i class="fa fa-tasks {{Request::is('vehicles')?'active':''}}"></i><a href="{{url('apply-list')}}">Available Assets</a></li>            
                <li><i class="fa fa-tasks {{Request::is('apply-list')?'active':''}}"></i><a href="{{url('request-list')}}">Non-Available Assets</a></li>            
                </ul>
        </li>
        <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle {{Request::is('users-list')||('roles-list')||('permissions-list')?'active':''}}" data-toggle="dropdown" aria-haspopup="true" 
            aria-expanded="false"> <i class="menu-icon fa fa-wrench"></i>Workshop</a>  
            <ul class="sub-menu children dropdown-menu">
                <li><i class="fa fa-wrench {{Request::is('workshop')?'active':''}}"></i><a href="{{url('workshop')}}">Repairement Point</a></li>           
                <li><i class="fa fa-trash-o {{Request::is('disposal')?'active':''}}"></i><a href="{{url('disposal')}}">Disposed Assets</a></li>        
                </ul>
        </li>
        @can('view department')
            
        <li class="active">
            <a href="{{url('department-list')}}"> <i class="menu-icon fa fa-building-o"></i>Departments-list </a>
        </li>
        @endcan
        @can('view-settings')
             <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle {{Request::is('users-list')||('roles-list')||('permissions-list')?'active':''}}" data-toggle="dropdown" aria-haspopup="true" 
            aria-expanded="false"> <i class="menu-icon fa fa-cog"></i>Settings</a>  
            <ul class="sub-menu children dropdown-menu">
                <li><i class="fa fa-users {{Request::is('users-list')?'active':''}}"></i><a href="{{url('users-list')}}">Users</a></li>
                <li><i class="fa fa-tasks {{Request::is('roles-list')?'active':''}}"></i><a href="{{url('roles-list')}}">Roles</a></li>
                <li><i class="fa fa-ban {{Request::is('permissions-list')?'active':''}}"></i><a href="{{url('permissions-list')}}">Permissions</a></li>
                <li><i class="fa fa-key {{Request::is('permissions-list')?'active':''}}"></i><a href="{{url('change-password')}}">Change Password</a></li>
            </ul>
        </li>
        @endcan
           <li class="{{Request::is('staff-list')?'active':''}}">
            <a class="" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
             <i class="menu-icon fa fa-power-off"></i>
             {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
    </div>
</nav>