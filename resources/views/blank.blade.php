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
<!-- <div id="main-widget-container">
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

    <div class="row">
      <div class="col-sm-4">
        <div class="widget-box">
          <div class="widget-header widget-header-flat">
            <h4 class="widget-title smaller">
              <i class="ace-icon fa fa-quote-left smaller-80"></i>
              Detail Barang
            </h4>
          </div>
          <div class="widget-body">
            <div class="widget-main">
              <h1>sidebar</h1>
            </div>
          </div>
        </div>         
      </div>

      <div class="col-sm-8">
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="widget-box">
                            <div class="widget-header widget-header-flat">
                              <h4 class="widget-title smaller">Definition List</h4>
                              <div class="widget-toolbar">
                                <label>
                                  <small class="green">
                                    <b>Horizontal</b>
                                  </small>
                                  <input id="id-check-horizontal" type="checkbox" class="ace ace-switch ace-switch-6" />
                                  <span class="lbl middle"></span>
                                </label>
                              </div>
                            </div>
                            <div class="widget-body">
                              <div class="widget-main">
                                <code class="pull-right" id="dt-list-code">&lt;dl&gt;</code>
                                <dl id="dt-list-1">
                                  <dt>Description lists</dt>
                                  <dd>A description list is perfect for defining terms.</dd>
                                  <dt>Euismod</dt>
                                  <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                  <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                  <dt>Malesuada porta</dt>
                                  <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                  <dt>Felis euismod semper eget lacinia</dt>
                                  <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                                </dl>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="space-6"></div>
                      <div class="row">
                        <div class="col-xs-12">
                          <div class="widget-box">
                            <div class="widget-header widget-header-flat">
                              <h4 class="smaller">
                                <i class="ace-icon fa fa-code"></i>
                                Code view
                              </h4>
                            </div>
                            <div class="widget-body">
                              <div class="widget-main">
                                <pre class="prettyprint linenums">&lt;p class="muted"&gt;Fusce dapibus, tellus ac cursus commodo.&lt;/p&gt;
                                  &lt;p class="text-warning"&gt;Etiam porta sem malesuada.&lt;/p&gt;
                                  &lt;p class="text-error"&gt;Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
                                  &lt;p class="text-info"&gt;Aenean eu leo quam.&lt;/p&gt;
                                  &lt;p class="text-success"&gt;Duis mollis.&lt;/p&gt;</pre>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
      </div>

    </div>
	</div> -->

<!-- PAGE CONTENT ENDS -->
<!-- membuat isi dari konten -->

<div class="row">
  <div class="space-6"></div>

  <div class="col-sm-7 infobox-container">

    <div class="infobox infobox-blue">
      <div class="infobox-icon">
        <i class="ace-icon fa fa-building"></i>
      </div>

      <div class="infobox-data">
        <span class="infobox-data-number">{{ $total }}</span>
        <div class="infobox-content">Jumlah Produk</div>
      </div>

      <!-- <div class="stat stat-success">8%</div> -->
    </div>
    <!-- produk -->
    <!-- <div class="infobox infobox-blue">
      <div class="infobox-icon">
        <i class="ace-icon fa fa-twitter"></i>
      </div>

      <div class="infobox-data">
        <span class="infobox-data-number">11</span>
        <div class="infobox-content">new followers</div>
      </div>

      <div class="badge badge-success">
        +32%
        <i class="ace-icon fa fa-arrow-up"></i>
      </div>
    </div> -->
    <!-- <div class="infobox infobox-pink">
      <div class="infobox-icon">
        <i class="ace-icon fa fa-shopping-cart"></i>
      </div>

      <div class="infobox-data">
        <span class="infobox-data-number">8</span>
        <div class="infobox-content">new orders</div>
      </div>
      <div class="stat stat-important">4%</div>
    </div>

    <div class="infobox infobox-red">
      <div class="infobox-icon">
        <i class="ace-icon fa fa-flask"></i>
      </div>

      <div class="infobox-data">
        <span class="infobox-data-number">7</span>
        <div class="infobox-content">experiments</div>
      </div>
    </div>

    <div class="infobox infobox-orange2">
      <div class="infobox-chart">
        <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
      </div>

      <div class="infobox-data">
        <span class="infobox-data-number">6,251</span>
        <div class="infobox-content">pageviews</div>
      </div>

      <div class="badge badge-success">
        7.2%
        <i class="ace-icon fa fa-arrow-up"></i>
      </div>
    </div>

    <div class="infobox infobox-blue2">
      <div class="infobox-progress">
        <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
          <span class="percent">42</span>%
        </div>
      </div>

      <div class="infobox-data">
        <span class="infobox-text">traffic used</span>

        <div class="infobox-content">
          <span class="bigger-110">~</span>
          58GB remaining
        </div>
      </div>
    </div>

    <div class="space-6"></div>

    <div class="infobox infobox-green infobox-small infobox-dark">
      <div class="infobox-progress">
        <div class="easy-pie-chart percentage" data-percent="61" data-size="39">
          <span class="percent">61</span>%
        </div>
      </div>

      <div class="infobox-data">
        <div class="infobox-content">Task</div>
        <div class="infobox-content">Completion</div>
      </div>
    </div>

    <div class="infobox infobox-blue infobox-small infobox-dark">
      <div class="infobox-chart">
        <span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
      </div>

      <div class="infobox-data">
        <div class="infobox-content">Earnings</div>
        <div class="infobox-content">$32,000</div>
      </div>
    </div>

    <div class="infobox infobox-grey infobox-small infobox-dark">
      <div class="infobox-icon">
        <i class="ace-icon fa fa-download"></i>
      </div>

      <div class="infobox-data">
        <div class="infobox-content">Downloads</div>
        <div class="infobox-content">1,205</div>
      </div>
    </div> -->
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
          <div id="piechart-placeholder"></div>

          <div class="hr hr8 hr-double"></div>

          <!-- <div class="clearfix">
            <div class="grid3">
              <span class="grey">
                <i class="ace-icon fa fa-facebook-square fa-2x blue"></i>
                &nbsp; likes
              </span>
              <h4 class="bigger pull-right">1,255</h4>
            </div>

            <div class="grid3">
              <span class="grey">
                <i class="ace-icon fa fa-twitter-square fa-2x purple"></i>
                &nbsp; tweets
              </span>
              <h4 class="bigger pull-right">941</h4>
            </div>

            <div class="grid3">
              <span class="grey">
                <i class="ace-icon fa fa-pinterest-square fa-2x red"></i>
                &nbsp; pins
              </span>
              <h4 class="bigger pull-right">1,050</h4>
            </div>
          </div> -->
        </div><!-- /.widget-main -->
      </div><!-- /.widget-body -->
    </div><!-- /.widget-box -->
  </div><!-- /.col -->
</div><!-- /.row -->

<!-- <form action="{{ route('produk.gambar.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="gambar">Gambar</label>
    <input type="file" class="form-control-file" id="gambar" name="gambar">
    @error('gambar')
    <span class="text-danger">{{ $message }}</span>
    @enderror
  </div>
  <button type="submit" class="btn btn-primary">Upload Gambar</button>
</form> -->

<!-- <img src="{{ asset('produk/1687480398_foto-dumy.jpg') }}" alt="Gambar"> -->

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