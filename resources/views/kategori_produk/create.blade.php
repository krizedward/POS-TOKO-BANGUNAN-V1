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
      Kategori Produk
      <small data-step="1" data-intro="Menampilkan tabel kategori">
        <i class="ace-icon fa fa-angle-double-right"></i>
        <!-- top menu &amp; navigation -->
        create page
      </small>
    </h1>
  </div><!-- /.page-header -->
@endsection

@section('main')
  <div class="table-header">
    Tabel data untuk Kategori Produk
  </div>
  <!-- div.table-responsive -->

  <!-- div.dataTables_borderWrap -->
  <div>
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
        @php
          $no = 1
        @endphp
        @foreach($data as $d)
          <tr>
            <td class="center">
              <label class="pos-rel">
                <input type="checkbox" class="ace" />
                <span class="lbl"></span>
              </label>
            </td>
            <td>
              {{$no++}}
            </td>
            <td>{{ $d->name }}</td>
            <td>Rp. {{ number_format ($d->buy_price) }}</td>
            <td>Rp. {{ number_format ($d->sell_price) }}</td>
                      <td class="hidden-480">
                          <span class="label label-sm label-info">Tersedia</span>
                      </td>
                      <td>
                          <div class="hidden-sm hidden-xs action-buttons">
                              <a href="#">
                                  <span class="label label-sm label-success">Detail</span>
                              </a>
                              <a href="#">
                                  <span class="label label-sm label-warning">Edit</span>
                              </a>
                              <a href="#"
                                  onclick="event.preventDefault();
                                      document.getElementById('delete').submit();">
                                  <span class="label label-sm label-danger">Delete</span>
                              </a>
                              <form id="delete" action="#" method="POST" style="display: none;">
                                  @method('DELETE')    
                                  @csrf
                              </form>
                          </div>
                      </td>
            </tr>
        @endforeach
      </tbody>
    </table>
  </div>
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