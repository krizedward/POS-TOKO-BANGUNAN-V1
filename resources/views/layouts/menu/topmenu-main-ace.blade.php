    <div id="sidebar" class="sidebar h-sidebar navbar-collapse collapse ace-save-state">
      <script type="text/javascript">
        try { ace.settings.loadState('sidebar') } catch (e) { }
      </script>

      <div class="sidebar-shortcuts" id="sidebar-shortcuts">

      <ul class="nav nav-list">

        <li class="{{ Route::currentRouteName() === 'dashboard' ? 'active open' : '' }} hover">
          <a href="{{ route('dashboard') }}">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Dashboard </span>
          </a>

          <b class="arrow"></b>
        </li>

        <li class="{{ Route::currentRouteName() === 'kategori.suplier.index' ? 'active open' : '' }} hover">
          <a href="{{ route('kategori.suplier.index') }}">
            <i class="menu-icon fa fa-users"></i>
            <span class="menu-text"> Langganan </span>
          </a>

          <b class="arrow"></b>
        </li>

        <li class="{{ Route::currentRouteName() === 'kategori.produk.index' ? 'active open' : '' }} hover">
          <a href="{{ route('kategori.produk.index') }}">
            <i class="menu-icon fa fa-desktop"></i>
            <span class="menu-text"> Monitor Barang </span>
          </a>

          <b class="arrow"></b>
        </li>
        
      </ul><!-- /.nav-list -->
    </div>