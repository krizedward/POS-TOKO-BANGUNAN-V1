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
        summary
      </small>
    </h1>
  </div><!-- /.page-header -->
@endsection

@section('main')
  <!-- PAGE CONTENT BEGINS -->
  <div id="main-widget-container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 widget-container-col" id="widget-container-col-1">
        
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <td class="center">
                <label class="pos-rel">
                  <input type="checkbox" class="ace" />
                  <span class="lbl"></span>
                </label>
              </td>
              <th>No</th>
              <th>Nama</th>
              <th>Harga Beli</th>
              <th>Harga Jual</th>
              <th>Status</th>
              <th>Action</th>
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
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-xs-12 col-sm-6 widget-container-col" id="widget-container-col-2">
        
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <td class="center">
                <label class="pos-rel">
                  <input type="checkbox" class="ace" />
                  <span class="lbl"></span>
                </label>
              </td>
              <th>No</th>
              <th>Nama</th>
              <th>Harga Beli</th>
              <th>Harga Jual</th>
              <th>Status</th>
              <th>Action</th>
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
            </tr>
          </tbody>
        </table>
      </div>
    </div>
	</div><!-- PAGE CONTENT ENDS -->
  <!-- membuat isi dari konten -->

  <div class="center">
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
  </div>
@endsection

@push('script')
	<!-- none -->
@endpush

@push('inline_scripts')
  <!-- membuat tambahain script -->
  <script type="text/javascript">
    jQuery(function ($) {
      var $sidebar = $('.sidebar').eq(0);
      if (!$sidebar.hasClass('h-sidebar')) return;

      $(document).on('settings.ace.top_menu', function (ev, event_name, fixed) {
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
        $window.on('scroll.ace.top_menu', function (e) {

          var scroll = $window.scrollTop();
          scroll = parseInt(scroll / 4);//move the menu up 1px for every 4px of document scrolling
          if (scroll > 17) scroll = 17;


          if (scroll > 16) {
            if (!done) {
              $sidebar.addClass('lower-highlight');
              done = true;
            }
          }
          else {
            if (done) {
              $sidebar.removeClass('lower-highlight');
              done = false;
            }
          }

          sidebar.style['marginTop'] = (17 - scroll) + 'px';
        }).triggerHandler('scroll.ace.top_menu');

      }).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass('sidebar-fixed')]);

      $(window).on('resize.ace.top_menu', function () {
        $(document).triggerHandler('settings.ace.top_menu', ['sidebar_fixed', $sidebar.hasClass('sidebar-fixed')]);
      });


    });
  </script>
@endpush