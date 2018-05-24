<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
  </div>
  <!-- /.navbar-top-links -->
  <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
      <ul class="nav" id="side-menu">
        <li class="sidebar-search">
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
                  <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
          <!-- /input-group -->
        </li>
        <li><a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
        <li>
          <a href="{{ url('/guests') }}"></i> Guests</a>
        </li>
        <li>
          <a href="{{ url('/product') }}"></i> product</a>
        </li>
        <li>
          <a href="{{ url('/registrations') }}"></i> Registrasion</a>
        </li>
        <li>
          <a href="{{ url('/rooms') }}"></i> Rooms</a>
        </li>                        
        <li><a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a></li>
        <li><a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a></li>
        <li>
          <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="panels-wells.html">Panels and Wells</a></li>
            <li><a href="buttons.html">Buttons</a></li>
            <li><a href="notifications.html">Notifications</a></li>
            <li><a href="typography.html">Typography</a></li>
            <li><a href="icons.html"> Icons</a></li>
            <li><a href="grid.html">Grid</a></li>
          </ul>
          <!-- /.nav-second-level -->
        </li>
        <li>
          <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="blank.html">Blank Page</a></li>
            <li><a href="login.html">Login Page</a></li>
          </ul>
          <!-- /.nav-second-level -->
        </li>     
      </ul>
    </div>
    <!-- /.sidebar-collapse -->
  </div>
<!-- /.navbar-static-side -->
</nav>