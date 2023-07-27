<!-- import-template -->
@extends('layouts.top-menu-ace')

<!-- main -->
@push('header')
<!-- untuk style header -->
@endpush

@section('breadcrumbs')
<!-- breadcrumbs -->
@endsection

@section('page-header')
  <!-- page-header -->
  <div class="page-header">
    <h1>
      Dashboard
      <small>
        <i class="ace-icon fa fa-angle-double-right"></i>
        Ringkasan Semua Fitur
      </small>
    </h1>
  </div><!-- /.page-header -->
@endsection

@section('main')
  <div class="row">
    <div class="space-6"></div>
    <div class="col-sm-7 infobox-container">
      <div class="row-1">
        <div class="infobox infobox-blue">
          <div class="infobox-icon">
            <i class="ace-icon fa fa-building"></i>
          </div>
          <div class="infobox-data">
            <span class="infobox-data-number">0</span>
            <div class="infobox-content">Jumlah Produk</div>
          </div>
          <!-- <div class="stat stat-success">8%</div> -->
        </div>

        <div class="infobox infobox-blue">
          <div class="infobox-icon">
            <i class="ace-icon fa fa-building"></i>
          </div>
          <div class="infobox-data">
            <span class="infobox-data-number">0</span>
            <div class="infobox-content">Jumlah Produk</div>
          </div>
          <!-- <div class="stat stat-success">8%</div> -->
        </div>

        <div class="infobox infobox-blue">
          <div class="infobox-icon">
            <i class="ace-icon fa fa-building"></i>
          </div>
          <div class="infobox-data">
            <span class="infobox-data-number">0</span>
            <div class="infobox-content">Jumlah Produk</div>
          </div>
          <!-- <div class="stat stat-success">8%</div> -->
        </div>
      </div>

      <div class="row-2">
        <div class="infobox infobox-blue">
          <div class="infobox-icon">
            <i class="ace-icon fa fa-building"></i>
          </div>
          <div class="infobox-data">
            <span class="infobox-data-number">0</span>
            <div class="infobox-content">Jumlah Produk</div>
          </div>
          <!-- <div class="stat stat-success">8%</div> -->
        </div>

        <div class="infobox infobox-blue">
          <div class="infobox-icon">
            <i class="ace-icon fa fa-building"></i>
          </div>
          <div class="infobox-data">
            <span class="infobox-data-number">0</span>
            <div class="infobox-content">Jumlah Produk</div>
          </div>
          <!-- <div class="stat stat-success">8%</div> -->
        </div>

        <div class="infobox infobox-blue">
          <div class="infobox-icon">
            <i class="ace-icon fa fa-building"></i>
          </div>
          <div class="infobox-data">
            <span class="infobox-data-number">0</span>
            <div class="infobox-content">Jumlah Produk</div>
          </div>
          <!-- <div class="stat stat-success">8%</div> -->
        </div>
      </div>
    </div>
    <div class="vspace-12-sm"></div>
    <div class="col-sm-5">
      <div class="widget-box">
        
        <div class="widget-header widget-header-flat widget-header-small">
          <h5 class="widget-title">
            <i class="ace-icon fa fa-signal"></i>
            Tabel Barang Masuk
          </h5>

          <div class="widget-toolbar no-border">
            <div class="inline dropdown-hover">
              <button class="btn btn-minier btn-primary">
                This Week
                <i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
              </button>

              <ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
                <li class="active">
                  <a href="#" class="blue">
                    <i class="ace-icon fa fa-caret-right bigger-110">&nbsp;</i>
                    This Week
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                    Last Week
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                    This Month
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class="ace-icon fa fa-caret-right bigger-110 invisible">&nbsp;</i>
                    Last Month
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="widget-body">
          <div class="widget-main">
            <table class="table  table-bordered table-hover">
              <thead>
                <tr>
                  <th>Data</th>
                  <th>Data</th>
                  <th>Data</th>
                  <th>Data</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="center">
                    <label class="pos-rel">
                      <input type="checkbox" class="ace" />
                      <span class="lbl"></span>
                    </label>
                  </td>

                  <td class="center">
                    <div class="action-buttons">
                      <a href="#" class="green bigger-140 show-details-btn" title="Show Details">
                        <i class="ace-icon fa fa-angle-double-down"></i>
                        <span class="sr-only">Details</span>
                      </a>
                    </div>
                  </td>
                  <td>
                    <a href="#">ace.com</a>
                  </td>
                  <td>$45</td>
                  <td class="hidden-480">3,330</td>
                  <td>Feb 12</td>
                  <td class="hidden-480">
                    <span class="label label-sm label-warning">Expiring</span>
                  </td>
                  <td>
                    <div class="hidden-sm hidden-xs btn-group">
                      <button class="btn btn-xs btn-success">
                        <i class="ace-icon fa fa-check bigger-120"></i>
                      </button>
                      <button class="btn btn-xs btn-info">
                        <i class="ace-icon fa fa-pencil bigger-120"></i>
                      </button>
                      <button class="btn btn-xs btn-danger">
                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                      </button>
                      <button class="btn btn-xs btn-warning">
                        <i class="ace-icon fa fa-flag bigger-120"></i>
                      </button>
                    </div>
                    <div class="hidden-md hidden-lg">
                      <div class="inline pos-rel">
                        <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                          <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                          <li>
                            <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                              <span class="blue">
                                <i class="ace-icon fa fa-search-plus bigger-120"></i>
                              </span>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                              <span class="green">
                                <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                              </span>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                              <span class="red">
                                <i class="ace-icon fa fa-trash-o bigger-120"></i>
                              </span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div><!-- /.widget-main -->
        </div><!-- /.widget-body -->

      </div><!-- /.widget-box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
@endsection

@push('script')
<!-- none -->
@endpush

@push('inline_scripts')
  <!-- membuat tambahain script -->
  <script type="text/javascript">
    jQuery(function($) {
      var $sidebar = $('.sidebar').eq(0);
      if (!$sidebar.hasClass('h-sidebar')) return;
      $(document).on('settings.ace.top_menu', function(ev, event_name, fixed) {
        if (event_name !== 'sidebar_fixed') return;
        var sidebar = $sidebar.get(0);
        var $window = $(window);
        //return if sidebar is not fixed or in mobile view mode
        var sidebar_vars = $sidebar.ace_sidebar('vars');
        if (!fixed || (sidebar_vars['mobile_view'] || sidebar_vars['collapsible'])) {
          $sidebar.removeClass('lower-highlight');
          //restore original, default marginTop
          sidebar.style.marginTop = '';
          $window.off('scroll.ace.top_menu')
          return;
        }
        var done = false;
        $window.on('scroll.ace.top_menu', function(e) {
          var scroll = $window.scrollTop();
          scroll = parseInt(scroll / 4); //move the menu up 1px for every 4px of document scrolling
          if (scroll > 17) scroll = 17;
          if (scroll > 16) {
            if (!done) {
              $sidebar.addClass('lower-highlight');
              done = true;
            }
          } else {
            if (done) {
              $sidebar.removeClass('lower-highlight');
              done = false;
            }
          }
          sidebar.style['marginTop'] = (17 - scroll) + 'px';
        }).triggerHandler('scroll.ace.top_menu');
      }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass('sidebar-fixed')]);
      $(window).on('resize.ace.top_menu', function() {
        $(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass(
          'sidebar-fixed')]);
      });
    });
  </script>
@endpush