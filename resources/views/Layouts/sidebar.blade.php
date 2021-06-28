<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

        </div>
        <div class="info">

          <a href="{{route('update')}}" class="d-block" >{{ Auth::user()->name }}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="showprofile" class="nav-link active">

                    <p>Edit profile</p>
                  </a>
                </li>


              </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="show" class="nav-link active">

                  <p>Product</p>
                </a>
              </li>


            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('invoice') }}" class="nav-link active">

                    <p>Invoice</p>
                  </a>
                </li>


              </ul>
              <li class="nav-item">
                <a href="#" class="nav-link">

                  <p>
                    Charts
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="barcharts" class="nav-link">

                      <p>Barcharts</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="charts" class="nav-link">

                      <p>Pie Charts</p>
                    </a>
                  </li>
                </ul>
            </li>


              </ul>


            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('logout') }}" class="nav-link active">

                    <p>Logout</p>
                  </a>
                </li>


              </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
