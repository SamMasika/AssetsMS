<nav class="navbar navbar-expand-sm navbar-default">
    <div class="navbar-header">
        <button class="navbar-toggler" type="button" 
        data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" 
        aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <h5></h5>
        <a class="navbar-brand asset" href="{{url('dashboard')}}">Assets Ms</a>
        <a class="navbar-brand hidden" href="./"><img src="{{asset('back/images/logo2.png')}}" alt="Logo"></a>
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse py-5">
        <ul class="nav navbar-nav">
            <li class="active">
                <a href="{{url('dashboard')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
            </li>
          @can('view-settings')
               <li class="menu-item-has-children dropdown">
              <a href="#" class="dropdown-toggle {{Request::is('users-list')||('roles-list')||('permissions-list')?'active':''}}" data-toggle="dropdown" aria-haspopup="true" 
              aria-expanded="false"> <i class="menu-icon fa fa-cog"></i>Settings</a>  
              <ul class="sub-menu children dropdown-menu">
                  <li><i class="fa fa-table {{Request::is('users-list')?'active':''}}"></i><a href="{{url('users-list')}}">Users</a></li>
                  <li><i class="fa fa-table {{Request::is('roles-list')?'active':''}}"></i><a href="{{url('roles-list')}}">Roles</a></li>
                  <li><i class="fa fa-table {{Request::is('permissions-list')?'active':''}}"></i><a href="{{url('permissions-list')}}">Permissions</a></li>
              </ul>
          </li>
          @endcan

          @can('view category')
              
          <li class=" {{Request::is('category-list')?'active':''}}">
              <a href="{{url('category-list')}}"> <i class="menu-icon fa fa-table"></i>Categories </a>
          </li>
          @endcan

          @can('view vendor')
            <li class="{{Request::is('vendor-list')?'active':''}}">
                <a href="{{url('vendor-list')}}"> <i class="menu-icon fa fa-table"></i>Vendors </a>
            </li>
            @endcan

            @can('view brand')
            <li class=" {{Request::is('brand-list')?'active':''}}">
                <a href="{{url('brand-list')}}"> <i class="menu-icon fa fa-table"></i>Brands </a>
            </li>
            @endcan

            <li class="{{Request::is('assets-list')?'active':''}}">
                <a href="{{url('assets-list')}}"> <i class="menu-icon fa fa-table"></i>Assets </a>
            </li>
            @can('view department')
            <li class="{{Request::is('department-list')?'active':''}}">
                <a href="{{url('department-list')}}"> <i class="menu-icon fa fa-table"></i>Departments </a>
            </li>
            @endcan
            <li class="{{Request::is('staff-list')?'active':''}}">
                <a href="{{url('staff-list')}}"> <i class="menu-icon fa fa-table"></i>Staff </a>
            </li>
            {{-- <li class="menu-item-has-children dropdown">
                <a href="{{url('assets-list')}}" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                 aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Assets</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-table"></i><a href="{{url('assets-list')}}">Assets-list</a></li>
                </ul>
            </li> --}}

            {{-- <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                 aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Categories</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-table"></i><a href="{{url('category-list')}}">Categories-List</a></li>
                </ul>
            </li> --}}
         
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>