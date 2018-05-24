  
<div class="sidebar" style="background:#3E4651;">
  <div class="menu-control toggle-sidebar">
    <a class="navbar-brand" href="#">Ayudan Hotel</a>
    <i class="fa fa-bars navicon"></i>
  </div>
  <ul class="menu">
    <!-- <li class="submenu">
      <a href="{{ url('/registrations/test') }}">
        <div>
          <i class="menu-icon fa fa-th-large"></i>
          <span class="menu-title">Dashboard</span>
        </div>
      </a>
    </li> -->
    <li class="submenu">
      <a href="{{ url('/guests') }}">
        <div>
          <i class="menu-icon fa fa-users"></i>
          <span class="menu-title">Guest</span>
        </div>
      </a>
    </li>
    <li class="submenu">
      <a href="{{ url('/product/show') }}">
        <div>
          <i class="menu-icon fa fa-cube"></i>
          <span class="menu-title">Product</span>
        </div>
      </a>
    </li>
    <li class="submenu">
      <a href="{{ url('/registrations/test') }}">
        <div>
          <i class="menu-icon fa fa-shopping-cart"></i>
          <span class="menu-title">Registrasion</span>
        </div>
      </a>
    </li>
    <li class="submenu">
      <a href="{{ url('/rooms') }}">
        <div>
          <i class="menu-icon fa fa-home"></i>
          <span class="menu-title">Rooms</span>
        </div>
      </a>
    </li>
  </ul>
</div>

<!-- <a href="{{ url('/guests') }}"></i> Guests</a>
          <a href="{{ url('/product') }}"></i> product</a>
          <a href="{{ url('/registrations') }}"></i> Registrasion</a>
          <a href="{{ url('/rooms') }}"></i> Rooms</a> -->