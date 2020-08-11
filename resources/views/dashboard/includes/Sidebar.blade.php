
 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="{{url('dashboard')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{ trans('dashboard.admincontrol') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('dashboard')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ trans('dashboard.admincontrol') }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas  fa-user"></i>
              <p>
                portfolio
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!--<li class="nav-item">-->
              <!--  <a href="{{route('users.index')}}" class="nav-link {{ Request::is('admin/users') ? ' active' : null }}">-->
              <!--    <i class="far fa-user nav-icon"></i>-->
              <!--    <p>products</p>-->
              <!--  </a>-->
              <!--</li>-->

              <li class="nav-item">
              
                <a href="{{route('products.index')}}" class="nav-link {{ Request::is('admin/users') ? ' active' : null }}">
                  <i class="far fa-user nav-icon"></i>
                  <p>products</p>
                  <!--<ul>-->

          <!--<li class="nav-item">-->
          <!--<a href="{{route('products.create')}}" class="nav-link {{ Request::is('admin/users') ? ' active' : null }}">-->
          <!--  <i class="far fa-user nav-icon"></i>-->
          <!--  <p>create</p>-->
          <!--</a>-->
          <!--</li>-->

          <!--</ul>-->
                </a>
              </li>

              <!--<li class="nav-item">-->
              <!--  <a href="{{route('roles.index')}}" class="nav-link {{ Request::is('admin/roles') ? ' active' : null }}">-->
              <!--    <i class="far fa-user nav-icon"></i>-->
              <!--    <p>Roles</p>-->
              <!--  </a>-->
              <!--</li>-->
              <!--<li class="nav-item">-->
              <!--  <a href="{{route('permission.index')}}" class="nav-link {{ Request::is('admin/permission') ? ' active' : null }}">-->
              <!--    <i class="far fa-user nav-icon"></i>-->
              <!--    <p>Permission</p>-->
              <!--  </a>-->
              <!--</li>-->

            </ul>
          </li>

        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

  </aside>


