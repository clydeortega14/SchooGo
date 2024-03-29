<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->user()->username }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        @if(auth()->user()->hasRole('admin'))
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Access Rights</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('users.index') }}"><i class="fa fa-circle-o"></i>Users</a></li>
            <li><a href="{{ route('roles.index') }}"><i class="fa fa-circle-o"></i>Roles</a></li>
            <li><a href="{{ route('permissions.index') }}"><i class="fa fa-circle-o"></i>Permissions</a></li>
          </ul>
        </li>

        <li>
          <a href="{{ route('categories.index') }}">
            <i class="fa fa-dashboard"></i> 
            <span>Categories</span>
          </a>
        </li>

        <li>
          <a href="{{ route('departments') }}">
            <i class="fa fa-dashboard"></i> <span>Departments</span>
          </a>
        </li>

        <li>
          <a href="{{ route('products.index') }}">
            <i class="fa fa-dashboard"></i> <span>Products</span>
          </a>
        </li>
        @endif

        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Orders</span>
          </a>
        </li>

        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Printing Services</span>
          </a>
        </li>

        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Settings</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>