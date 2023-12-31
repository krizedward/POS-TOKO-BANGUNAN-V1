<!-- import-template -->
@extends('layouts.top-menu-ace')

<!-- main -->
@push('header')
<!-- style css -->
@endpush

@section('page-header')
  <!-- page-header -->
  <div class="page-header">
    <h1>
      Produk
      <small data-step="1" 
        data-intro="Langkah 1: Halaman index form Produk Barang">
        <i class="ace-icon fa fa-angle-double-right"></i>
        <!-- top menu &amp; navigation -->
        index page
      </small>
    </h1>
  </div><!-- /.page-header -->
@endsection

@section('main')
  <div class="row">
    <div class="col-xs-12">

      <a href="{{ route('produk.create') }}" class="btn btn-app btn-primary btn-sm"
      data-step="2" data-intro="Langkah 2: Pilih tombol untuk tambah produk">
        <i class="ace-icon fa fa-pencil-square-o bigger-200"></i>
        Tambah
      </a>

      <!-- <a href="#" class="btn btn-app btn-light btn-sm">
        <i class="ace-icon fa fa-print bigger-200"></i>
        Print
      </a> -->
    </div>
  </div>

  <div class="space"></div>

  @include('layouts.table.index_produk')

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