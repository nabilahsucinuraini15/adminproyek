<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
        
    <!-- Dashboard Menu -->
    <li class="nav-item">
      <a class="nav-link" href="/">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <!-- Vendor Menu -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#vendor" aria-expanded="false" aria-controls="vendor">
        <i class="mdi mdi-account-box menu-icon"></i>
        <span class="menu-title">Vendor</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="vendor">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('vendor.index') }}">List of Vendors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('vendor.create') }}">Add New Vendor</a>
          </li>
        </ul>
      </div>
    </li>

    <!-- Pembelian Menu -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#pembelian" aria-expanded="false" aria-controls="pembelian">
        <i class="mdi mdi-cart menu-icon"></i>
        <span class="menu-title">Pembelian</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="pembelian">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pembelian.index') }}">List of Purchases</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pembelian.create') }}">Create New Purchase</a>
          </li>
        </ul>
      </div>
    </li>

    <!-- Mandor Menu -->
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#mandor" aria-expanded="false" aria-controls="mandor">
        <i class="mdi mdi-account-cog menu-icon"></i>
        <span class="menu-title">Mandor</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="mandor">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('mandor.index') }}">List of Mandors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('mandor.create') }}">Add New Mandor</a>
          </li>
        </ul>
      </div>
    </li>

  </ul>
</nav>
