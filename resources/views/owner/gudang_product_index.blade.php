<!-- import-template -->
@extends('layouts.ace')

<!-- main -->
@push('header')
	<!-- none -->
@endpush

@section('breadcrumbs')
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="{{ route('main') }}">Dashboard</a>
			</li>
			<li class="active">Barang Gudang</li>
		</ul><!-- /.breadcrumb -->
	</div>
@endsection

@section('page-header')
	<div class="page-header">
		<h1>
			Index Barang Gudang 
			<small>
				<i class="ace-icon fa fa-angle-double-right"></i>
				Halaman yang berisikan ringkasan informasi yang ada diprogram.
			</small>
		</h1>
	</div><!-- /.page-header -->
@endsection

@section('main')
	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<!-- <div class="alert alert-block alert-success">
				<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>
				<i class="ace-icon fa fa-check green"></i>
				Selamat Anda Berhasil Login
			</div> -->

			<!-- baris -->
			<div class="row">
				<div class="space-6"></div>
				<div class="col-sm-12 infobox-container">

					<div class="infobox infobox-green">
						<div class="infobox-icon">
							<i class="ace-icon fa fa-book"></i>
						</div>
						<div class="infobox-data">
							<span class="infobox-data-number">{{ $barang->jumlah() }}</span>
							<div class="infobox-content">Jumlah Barang</div>
						</div>
						<!-- <div class="stat stat-success">8%</div> -->
					</div>

					<div class="infobox infobox-blue">
						<div class="infobox-icon">
							<i class="ace-icon fa fa-arrow-up"></i>
						</div>
						<div class="infobox-data">
							<span class="infobox-data-number">00</span>
							<div class="infobox-content">Barang Masuk</div>
						</div>
					</div>

					<div class="infobox infobox-red">
						<div class="infobox-icon">
							<i class="ace-icon fa fa-arrow-down"></i>
						</div>
						<div class="infobox-data">
							<span class="infobox-data-number">00</span>
							<div class="infobox-content">Barang Keluar</div>
						</div>
						<!-- <div class="stat stat-important">4%</div> -->
					</div>
				</div>
				<div class="vspace-12-sm"></div>
			</div>
			<!-- /.row -->
			
			<div class="space-12"></div>
			<!-- tabel data barang 5 terbaru -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 widget-container-col">
					<div class="widget-box widget-color-blue" id="widget-box-2">
						<div class="widget-header">
							<h5 class="widget-title bigger lighter">
								<i class="ace-icon fa fa-table"></i>
								Data Tabel Barang
							</h5>
							<div class="widget-toolbar widget-toolbar-light no-border">
								<!-- <select id="simple-colorpicker-1" class="hide">
								</select> -->
								<a href="{{ route('owner.product.index','master') }}">Detail</a>
							</div>
						</div>
						<div class="widget-body">
							<div class="widget-main no-padding">
								<table class="table table-striped table-bordered table-hover">
									<thead class="thin-border-bottom">
										<tr>
											<th>
												<i class="ace-icon fa fa-user"></i>
												KODE
											</th>
											<th>Nama</th>
											<th>Harga Beli</th>
											<th>Harga Jual</th>
											<th class="hidden-480">Status</th>
										</tr>
									</thead>
									<tbody>
										@if(!empty($coba))
											@foreach($coba as $data)
												<tr>
													<td class="">{{ $data->id }}</td>
													<td>{{ $data->name }}</td>
													<td>Rp. {{ number_format ($data->buy_price) }}</td>
													<td>Rp. {{ number_format ($data->sell_price) }}</td>
													<td class="hidden-480">
														<span class="label label-success">Tersedia</span>
													</td>
												</tr>
											@endforeach
										@else
											<tr>
												<td class="">null</td>
												<td>
													<a href="#">null</a>
												</td>
												<td class="hidden-480">
													<span class="label label-warning">Pending</span>
												</td>
											</tr>
										@endif
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->

			<div class="space-12"></div>
			
			<!-- tombol-fitur -->
			<div class="row">
				<div class="col-xs-6 col-sm-6 pricing-box">
					<div class="widget-box widget-color-dark">
						<div class="widget-header">
							<h5 class="widget-title bigger lighter">Barang Gudang</h5>
						</div>
						<div class="widget-body">
							<div>
								<a href="{{ route('owner.product.create','gudang') }}" class="btn btn-block btn-inverse">
									<i class="ace-icon fa fa-book bigger-110"></i>
									<span>Tambah Stok</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xs-6 col-sm-6 pricing-box">
					<div class="widget-box widget-color-dark">
						<div class="widget-header">
							<h5 class="widget-title bigger lighter">Buat Nota Barang Gudang</h5>
						</div>
						<div class="widget-body">
							<div>
								<a href="{{ route('owner.product.create','nota') }}" class="btn btn-block btn-inverse">
									<i class="ace-icon fa fa-book bigger-110"></i>
									<span>Tambah Nota DO</span>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /.row -->

			<div class="space-24"></div>

			<!-- Data Laporan Barang Keluar Harian -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 widget-container-col">
					<div class="widget-box widget-color-blue" id="widget-box-2">
						<div class="widget-header">
							<h5 class="widget-title bigger lighter">
								<i class="ace-icon fa fa-table"></i>
								Data Laporan Barang Keluar Harian
							</h5>
							<div class="widget-toolbar widget-toolbar-light no-border">
								<a href="{{ route('barang.owner.daily.index') }}">Detail</a>
							</div>
						</div>
						<div class="widget-body">
							<div class="widget-main no-padding">
								<table class="table table-striped table-bordered table-hover">
									<thead class="thin-border-bottom">
										<tr>
											<th>No</th>
											<th>Tanggal</th>
											<th>Jumlah Barang</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										@php
											$no=0;
											$total=0;
										@endphp

										@while (strtotime($awal) >= strtotime($akhir))
										@php
											$no++;
											$date = $awal;
											$awal = date('Y-m-d', strtotime("-1 day", strtotime($awal)));
										@endphp
                                        <tr>
											<td>{{ $no }}</td>
											<td>{{ date('d M Y', strtotime($date)) }}</td>
											<td>0</td>
                                            <td class="hidden-480">
												<a href="#" class="label label-warning">Details</a>
										    </td>
                                        </tr>

										@endwhile
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->

			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
@endsection

@push('script')
	<!-- none -->
@endpush

@push('inline_scripts')
		<script type="text/javascript">
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],
					
					
					//"bProcessing": true,
			        //"bServerSide": true,
			        //"sAjaxSource": "http://127.0.0.1/table.php"	,
			
					//,
					//"sScrollY": "200px",
					//"bPaginate": false,
			
					//"sScrollX": "100%",
					//"sScrollXInner": "120%",
					//"bScrollCollapse": true,
					//Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
					//you may want to wrap the table inside a "div.dataTables_borderWrap" element
			
					//"iDisplayLength": 50
			
			
					select: {
						style: 'multi'
					}
			    } );
			
				
				
				$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					//   {
					// 	"extend": "colvis",
					// 	"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
					// 	"className": "btn btn-white btn-primary btn-bold",
					// 	columns: ':not(:first):not(:last)'
					//   },
					//   {
					// 	"extend": "copy",
					// 	"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
					// 	"className": "btn btn-white btn-primary btn-bold"
					//   },
					//   {
					// 	"extend": "csv",
					// 	"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
					// 	"className": "btn btn-white btn-primary btn-bold"
					//   },
					//   {
					// 	"extend": "excel",
					// 	"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
					// 	"className": "btn btn-white btn-primary btn-bold"
					//   },
					//   {
					// 	"extend": "pdf",
					// 	"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
					// 	"className": "btn btn-white btn-primary btn-bold"
					//   },
					//   {
					// 	"extend": "print",
					// 	"text": "<i class='fa fa-print bigger-110 green'></i> <span class='hidden'>Print</span>",
					// 	"className": "btn btn-white btn-primary btn-bold",
					// 	autoPrint: false,
					// 	message: 'This print was produced using the Print button for DataTables'
					//   },
					//   {
					// 	"extend": "add",
					// 	"text": "<i class='fa fa-print bigger-110 green'></i> <span class='hidden'>Add Data</span>",
					// 	"className": "btn btn-white btn-primary btn-bold",
					//   }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
			
			})
		</script>
@endpush

<!-- part-dokumentasi -->

@push('header-old')
	<link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.custom.min.css') }}" />
@endpush

@section('main dev')
	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<!-- <div class="alert alert-block alert-success">
				<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>
				<i class="ace-icon fa fa-check green"></i>
				Selamat Anda Berhasil Login
			</div> -->

			<!-- baris -->
			<div class="row">
				<div class="space-6"></div>
				<div class="col-sm-12 infobox-container">

					<div class="infobox infobox-green">
						<div class="infobox-icon">
							<i class="ace-icon fa fa-book"></i>
						</div>
						<div class="infobox-data">
							<span class="infobox-data-number">{{ $barang->jumlah() }}</span>
							<div class="infobox-content">Jumlah Barang</div>
						</div>
						<!-- <div class="stat stat-success">8%</div> -->
					</div>

					<div class="infobox infobox-blue">
						<div class="infobox-icon">
							<i class="ace-icon fa fa-arrow-up"></i>
						</div>
						<div class="infobox-data">
							<span class="infobox-data-number">00</span>
							<div class="infobox-content">Barang Masuk</div>
						</div>
					</div>

					<div class="infobox infobox-red">
						<div class="infobox-icon">
							<i class="ace-icon fa fa-arrow-down"></i>
						</div>
						<div class="infobox-data">
							<span class="infobox-data-number">00</span>
							<div class="infobox-content">Barang Keluar</div>
						</div>
						<!-- <div class="stat stat-important">4%</div> -->
					</div>
				</div>
				<div class="vspace-12-sm"></div>
			</div>
			<!-- /.row -->
			
			<div class="space-12"></div>
			<!-- tabel data barang 5 terbaru -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 widget-container-col">
					<div class="widget-box widget-color-blue" id="widget-box-2">
						<div class="widget-header">
							<h5 class="widget-title bigger lighter">
								<i class="ace-icon fa fa-table"></i>
								Data Tabel Barang
							</h5>
							<div class="widget-toolbar widget-toolbar-light no-border">
								<!-- <select id="simple-colorpicker-1" class="hide">
								</select> -->
								<a href="{{ route('owner.product.index','master') }}">Detail</a>
							</div>
						</div>
						<div class="widget-body">
							<div class="widget-main no-padding">
								<table class="table table-striped table-bordered table-hover">
									<thead class="thin-border-bottom">
										<tr>
											<th>
												<i class="ace-icon fa fa-user"></i>
												KODE
											</th>
											<th>Nama</th>
											<th>Harga Beli</th>
											<th>Harga Jual</th>
											<th class="hidden-480">Status</th>
										</tr>
									</thead>
									<tbody>
										@if(!empty($coba))
											@foreach($coba as $data)
												<tr>
													<td class="">{{ $data->id }}</td>
													<td>{{ $data->name }}</td>
													<td>Rp. {{ number_format ($data->buy_price) }}</td>
													<td>Rp. {{ number_format ($data->sell_price) }}</td>
													<td class="hidden-480">
														<span class="label label-success">Tersedia</span>
													</td>
												</tr>
											@endforeach
										@else
											<tr>
												<td class="">null</td>
												<td>
													<a href="#">null</a>
												</td>
												<td class="hidden-480">
													<span class="label label-warning">Pending</span>
												</td>
											</tr>
										@endif
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->

			<div class="space-12"></div>
			
			<!-- tombol-fitur -->
			<div class="row">
				<div class="col-xs-6 col-sm-3 pricing-box">
					<div class="widget-box widget-color-dark">
						<div class="widget-header">
							<h5 class="widget-title bigger lighter">Barang Gudang</h5>
						</div>
						<div class="widget-body">
							<div>
								<a href="{{ route('owner.product.create','gudang') }}" class="btn btn-block btn-inverse">
									<i class="ace-icon fa fa-book bigger-110"></i>
									<span>Tambah Stok</span>
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!-- /.row -->

			<div class="space-24"></div>

			<!-- untuk menampilkan pengelompokan -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 widget-container-col">
					<div class="widget-box widget-color-blue" id="widget-box-2">
						<div class="widget-header">
							<h5 class="widget-title bigger lighter">
								<i class="ace-icon fa fa-table"></i>
								Data Tabel Kelompok
							</h5>
							<div class="widget-toolbar widget-toolbar-light no-border">
								<a href="{{ route('barang.owner.daily.index') }}">Detail</a>
							</div>
						</div>
						<div class="widget-body">
							<div class="widget-main no-padding">
								<table class="table table-striped table-bordered table-hover">
									<thead class="thin-border-bottom">
										<tr>
											<th>No</th>
											<th>Tanggal</th>
											<th>Jumlah Barang</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										@php
											$no=0;
											$total=0;
										@endphp

										@while (strtotime($awal) >= strtotime($akhir))
										@php
											$no++;
											$date = $awal;
											$awal = date('Y-m-d', strtotime("-1 day", strtotime($awal)));
										@endphp
                                        <tr>
											<td>{{ $no }}</td>
											<td>{{ date('d M Y', strtotime($date)) }}</td>
											<td>none</td>
                                            <td class="hidden-480">
												<a href="#" class="label label-warning">Details</a>
										    </td>
                                        </tr>

										@endwhile
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->

			<div class="space-24"></div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 widget-container-col">
					<div class="widget-box widget-color-blue" id="widget-box-2">
						<div class="widget-header">
							<h5 class="widget-title bigger lighter">
								<i class="ace-icon fa fa-table"></i>
								Data Tabel Dengan Unix Apoch
							</h5>
							<div class="widget-toolbar widget-toolbar-light no-border">
								<a href="{{ route('barang.owner.daily.index') }}">Detail</a>
							</div>
						</div>
						<div class="widget-body">
							<div class="widget-main no-padding">
								<table class="table table-striped table-bordered table-hover">
									<thead class="thin-border-bottom">
										<tr>
											<th>No</th>
											<th>Tanggal</th>
											<th>Jumlah Barang</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->

			<div class="space-24"></div>
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 widget-container-col">
					<div class="widget-box widget-color-blue" id="widget-box-2">
						<div class="widget-header">
							<h5 class="widget-title bigger lighter">
								<i class="ace-icon fa fa-table"></i>
								Data Tabel Laporan Harian Barang Menurun
							</h5>
							<div class="widget-toolbar widget-toolbar-light no-border">
								<a href="{{ route('barang.owner.daily.index') }}">Detail</a>
							</div>
						</div>
						<div class="widget-body">
							<div class="widget-main no-padding">
								<table class="table table-striped table-bordered table-hover">
									<thead class="thin-border-bottom">
										<tr>
											<th>No</th>
											<th>Tanggal</th>
											<th>Jumlah Nota DO</th>
											<th>Aksi</th>
										</tr>
									</thead>
									<tbody>
										@php
                                            $no=0;
                                            $total=0;
                                        @endphp
                                        @while (strtotime($awal) >= strtotime($akhir))
                                        @php
                                            $no++;
                                            $date = $awal;
                                            $awal = date('Y-m-d', strtotime("-1 day", strtotime($awal)));
                                        @endphp
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ date('d M Y', strtotime($date)) }}</td>
                                            <td>0</td>
                                            <td class="hidden-480">
												<a href="{{ route('nota.show',[$date]) }}" class="label label-warning">Details</a>
										    </td>
                                        </tr>
                                        @endwhile
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.row -->

			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
@endsection

@section('main_old')
    <div class="row">
		<div class="col-xs-12">
			<div class="clearfix">
				<div class="pull-left tableTools-container"></div>
			</div>
			<div class="table-header">
				Data Barang Gudang
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
					<th>Harga Jual</th>
					<th>Stok Awal</th>
					<th>Stok Akhir</th>
					<th>Update</th>
				</tr>
			</thead>
			
            <tbody>
				@foreach($list_barang as $data)
				<tr>
					<td class="center">
			    		<label class="pos-rel">
			    			<input type="checkbox" class="ace" />
			    			<span class="lbl"></span>
			    		</label>
			    	</td>
					<td>{{ $data->id }}</td>
					<td>{{ $data->name_product }}</td>
					<td>Rp. {{ number_format ($data->sell_price) }}</td>
					<td>{{ $data->first_stock }}
						<!-- <div class="hidden-sm hidden-xs action-buttons">
							<a href="{{ route('barang.edit',[$data->id]) }}">
								<span class="label label-sm label-success">Details</span>
							</a>
					    </div> -->
					</td>
					<td>{{ $data->last_stock }}
						<!-- <div class="hidden-sm hidden-xs action-buttons">
							<a href="{{ route('barang.edit',[$data->id]) }}">
								<span class="label label-sm label-warning">Edit</span>
							</a> -->
							<!-- <a class="blue" href="#">
								<i class="ace-icon fa fa-search-plus bigger-130" onclick="successAlert()"></i>
							</a>
					    	<a class="red" href="#">
					    		<i class="ace-icon fa fa-trash-o bigger-130" onclick="deleteAlert()"></i>
					    	</a> -->
					    <!-- </div> -->
						<!-- <div class="hidden-md hidden-lg">
							<div class="inline pos-rel">
								<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
									<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
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
						</div> -->
					</td>
					<td>
						<!-- <div class="hidden-sm hidden-xs action-buttons">
							<a href="#" onclick="deleteAlert()">
								<span class="label label-sm label-danger">Delete</span>
							</a>
					    </div> -->
						<div class="hidden-sm hidden-xs action-buttons">
							<a href="{{ route('barang.edit',[$data->id]) }}">
								<span class="label label-sm label-warning">Edit</span>
							</a>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection

@section('main-v1')
	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<!-- <div class="alert alert-block alert-success">
				<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>
				</button>
				<i class="ace-icon fa fa-check green"></i>
				Selamat Anda Berhasil Login
			</div> -->
			<!-- baris -->
			<div class="row">
				<div class="space-6"></div>
				<div class="col-sm-12 infobox-container">

					<div class="infobox infobox-green">
						<div class="infobox-icon">
							<i class="ace-icon fa fa-book"></i>
						</div>
						<div class="infobox-data">
							<span class="infobox-data-number">{{ $barang->jumlah() }}</span>
							<div class="infobox-content">Jumlah Barang</div>
						</div>
						<!-- <div class="stat stat-success">8%</div> -->
					</div>

					<div class="infobox infobox-blue">
						<div class="infobox-icon">
							<i class="ace-icon fa fa-arrow-up"></i>
						</div>
						<div class="infobox-data">
							<span class="infobox-data-number">00</span>
							<div class="infobox-content">Barang Masuk</div>
						</div>
					</div>

					<div class="infobox infobox-red">
						<div class="infobox-icon">
							<i class="ace-icon fa fa-arrow-down"></i>
						</div>
						<div class="infobox-data">
							<span class="infobox-data-number">00</span>
							<div class="infobox-content">Barang Keluar</div>
						</div>
						<!-- <div class="stat stat-important">4%</div> -->
					</div>
				</div>
				<div class="vspace-12-sm"></div>
			</div><!-- /.row -->
			<div class="space-24"></div>
			<div class="row">
				<!-- Tabel Nota DO -->
				<div class="col-xs-12 col-sm-6 widget-container-col">
					<div class="widget-box widget-color-blue">
						<div class="widget-header">
							<h5 class="widget-title bigger lighter">
								<i class="ace-icon fa fa-arrow-down"></i>
								Barang Masuk
							</h5>
							<div class="widget-toolbar widget-toolbar-light no-border">
								<!-- <select id="simple-colorpicker-1" class="hide">
								</select> -->
								<a href="{{ route('barang.owner.in') }}">Tambah</a>
							</div>
						</div>
						<div class="widget-body">
							<div class="widget-main no-padding">
								<table class="table table-striped table-bordered table-hover">
									<thead class="thin-border-bottom">
										<tr>
											<th>Tanggal</th>
											<th>Nomor DO</th>
											<th class="hidden-480">Status</th>
										</tr>
									</thead>
									<tbody>
										@php
											$date = $startDate;
										@endphp
										@if(!empty($coba))
											@foreach($coba as $data)
												<tr>
													<td>{{ $date }}</td>
													<td>
														<a href="#">DO {{ $data->id }}</a>
													</td>
													<td class="hidden-480">
														<a href="#" class="label label-warning">Details</a>
													</td>
												</tr>
											@endforeach
										@else
											<tr>
												<td class="">null</td>
												<td>
													<a href="#">null</a>
												</td>
												<td class="hidden-480">
													<span class="label label-warning">Pending</span>
												</td>
											</tr>
										@endif
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!-- /.span -->
				<!-- Tabel Barang Gudang -->
				<div class="col-xs-12 col-sm-6 widget-container-col">
					<div class="widget-box widget-color-blue">
						<div class="widget-header">
							<h5 class="widget-title bigger lighter">
								<i class="ace-icon fa fa-arrow-up"></i>
								Barang Keluar
							</h5>
							<div class="widget-toolbar widget-toolbar-light no-border">
								<!-- <select id="simple-colorpicker-1" class="hide">
								</select> -->
								<a href="{{ route('barang.owner.out') }}">Tambah</a>
							</div>
						</div>
						<div class="widget-body">
							<div class="widget-main no-padding">
								<table class="table table-striped table-bordered table-hover">
									<thead class="thin-border-bottom">
										<tr>
											<th>Tanggal</th>
											<th>Nomor DO</th>
											<th class="hidden-480">Status</th>
										</tr>
									</thead>
									<tbody>
										@if(!empty($coba))
											@foreach($coba as $data)
												<tr>
													<td class="">{{ $date }}</td>
													<td>
														<a href="#">DO {{ $data->id }}</a>
													</td>
													<td class="hidden-480">
														<a href="#" class="label label-warning">Details</a>
													</td>
												</tr>
											@endforeach
										@else
											<tr>
												<td class="">null</td>
												<td>
													<a href="#">null</a>
												</td>
												<td class="hidden-480">
													<span class="label label-warning">Pending</span>
												</td>
											</tr>
										@endif
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div><!-- /.span -->
			</div><!-- /.row -->
			<div class="space-12"></div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 widget-container-col">
					<div class="widget-box widget-color-blue" id="widget-box-2">
						<div class="widget-header">
							<h5 class="widget-title bigger lighter">
								<i class="ace-icon fa fa-table"></i>
								Data Tabel Barang
							</h5>
							<div class="widget-toolbar widget-toolbar-light no-border">
								<!-- <select id="simple-colorpicker-1" class="hide">
								</select> -->
								<a href="{{ route('barang.master.index') }}">Detail</a>
							</div>
						</div>
						<div class="widget-body">
							<div class="widget-main no-padding">
								<table class="table table-striped table-bordered table-hover">
									<thead class="thin-border-bottom">
										<tr>
											<th>
												<i class="ace-icon fa fa-user"></i>
												KODE
											</th>
											<th>Nama</th>
											<th>Harga Beli</th>
											<th>Harga Jual</th>
											<th class="hidden-480">Status</th>
										</tr>
									</thead>
									<tbody>
										@if(!empty($coba))
											@foreach($coba as $data)
												<tr>
													<td class="">{{ $data->id }}</td>
													<td>{{ $data->name_product }}</td>
													<td>Rp. {{ number_format ($data->buy_price) }}</td>
													<td>Rp. {{ number_format ($data->sell_price) }}</td>
													<td class="hidden-480">
														<span class="label label-success">Tersedia</span>
													</td>
												</tr>
											@endforeach
										@else
											<tr>
												<td class="">null</td>
												<td>
													<a href="#">null</a>
												</td>
												<td class="hidden-480">
													<span class="label label-warning">Pending</span>
												</td>
											</tr>
										@endif
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /.row -->
			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
@endsection

@section('script-widget')
	<!--[if !IE]> -->
	<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>

	<!-- <![endif]-->

	<!--[if IE]>
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<![endif]-->
	<script type="text/javascript">
		if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
	</script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

	<!-- page specific plugin scripts -->
	<script src="{{ asset('assets/js/jquery-ui.custom.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.ui.touch-punch.min.js') }}"></script>

	<!-- ace scripts -->
	<script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
	<script src="{{ asset('assets/js/ace.min.js') }}"></script>

	<!-- inline scripts related to this page -->
	<script type="text/javascript">
		jQuery(function($) {
		
			$('#simple-colorpicker-1').ace_colorpicker({pull_right:true}).on('change', function(){
				var color_class = $(this).find('option:selected').data('class');
				var new_class = 'widget-box';
				if(color_class != 'default')  new_class += ' widget-color-'+color_class;
				$(this).closest('.widget-box').attr('class', new_class);
			});
		
		
			// scrollables
			$('.scrollable').each(function () {
				var $this = $(this);
				$(this).ace_scroll({
					size: $this.attr('data-size') || 100,
					//styleClass: 'scroll-left scroll-margin scroll-thin scroll-dark scroll-light no-track scroll-visible'
				});
			});
			$('.scrollable-horizontal').each(function () {
				var $this = $(this);
				$(this).ace_scroll(
				{
					horizontal: true,
					styleClass: 'scroll-top',//show the scrollbars on top(default is bottom)
					size: $this.attr('data-size') || 500,
					mouseWheelLock: true
				}
				).css({'padding-top': 12});
			});
			
			$(window).on('resize.scroll_reset', function() {
				$('.scrollable-horizontal').ace_scroll('reset');
			});
		
			
			$('#id-checkbox-vertical').prop('checked', false).on('click', function() {
				$('#widget-toolbox-1').toggleClass('toolbox-vertical')
				.find('.btn-group').toggleClass('btn-group-vertical')
				.filter(':first').toggleClass('hidden')
				.parent().toggleClass('btn-toolbar')
			});
		
			/**
			//or use slimScroll plugin
			$('.slim-scrollable').each(function () {
				var $this = $(this);
				$this.slimScroll({
					height: $this.data('height') || 100,
					railVisible:true
				});
			});
			*/
			
		
			/**$('.widget-box').on('setting.ace.widget' , function(e) {
				e.preventDefault();
			});*/
		
			/**
			$('.widget-box').on('show.ace.widget', function(e) {
				//e.preventDefault();
				//this = the widget-box
			});
			$('.widget-box').on('reload.ace.widget', function(e) {
				//this = the widget-box
			});
			*/
		
			//$('#my-widget-box').widget_box('hide');
		
			
		
			// widget boxes
			// widget box drag & drop example
			$('.widget-container-col').sortable({
				connectWith: '.widget-container-col',
				items:'> .widget-box',
				handle: ace.vars['touch'] ? '.widget-title' : false,
				cancel: '.fullscreen',
				opacity:0.8,
				revert:true,
				forceHelperSize:true,
				placeholder: 'widget-placeholder',
				forcePlaceholderSize:true,
				tolerance:'pointer',
				start: function(event, ui) {
					//when an element is moved, it's parent becomes empty with almost zero height.
					//we set a min-height for it to be large enough so that later we can easily drop elements back onto it
					ui.item.parent().css({'min-height':ui.item.height()})
					//ui.sender.css({'min-height':ui.item.height() , 'background-color' : '#F5F5F5'})
				},
				update: function(event, ui) {
					ui.item.parent({'min-height':''})
					//p.style.removeProperty('background-color');
		
					
					//save widget positions
					var widget_order = {}
					$('.widget-container-col').each(function() {
						var container_id = $(this).attr('id');
						widget_order[container_id] = []
						
						
						$(this).find('> .widget-box').each(function() {
							var widget_id = $(this).attr('id');
							widget_order[container_id].push(widget_id);
							//now we know each container contains which widgets
						});
					});
					
					ace.data.set('demo', 'widget-order', widget_order, null, true);
				}
			});
			
			
			///////////////////////
		
			//when a widget is shown/hidden/closed, we save its state for later retrieval
			$(document).on('shown.ace.widget hidden.ace.widget closed.ace.widget', '.widget-box', function(event) {
				var widgets = ace.data.get('demo', 'widget-state', true);
				if(widgets == null) widgets = {}
		
				var id = $(this).attr('id');
				widgets[id] = event.type;
				ace.data.set('demo', 'widget-state', widgets, null, true);
			});
		
		
			(function() {
				//restore widget order
				var container_list = ace.data.get('demo', 'widget-order', true);
				if(container_list) {
					for(var container_id in container_list) if(container_list.hasOwnProperty(container_id)) {
		
						var widgets_inside_container = container_list[container_id];
						if(widgets_inside_container.length == 0) continue;
						
						for(var i = 0; i < widgets_inside_container.length; i++) {
							var widget = widgets_inside_container[i];
							$('#'+widget).appendTo('#'+container_id);
						}
		
					}
				}
				
				
				//restore widget state
				var widgets = ace.data.get('demo', 'widget-state', true);
				if(widgets != null) {
					for(var id in widgets) if(widgets.hasOwnProperty(id)) {
						var state = widgets[id];
						var widget = $('#'+id);
						if
						(
							(state == 'shown' && widget.hasClass('collapsed'))
							||
							(state == 'hidden' && !widget.hasClass('collapsed'))
						) 
						{
							widget.widget_box('toggleFast');
						}
						else if(state == 'closed') {
							widget.widget_box('closeFast');
						}
					}
				}
				
				
				$('#main-widget-container').removeClass('invisible');
				
				
				//reset saved positions and states
				$('#reset-widgets').on('click', function() {
					ace.data.remove('demo', 'widget-state');
					ace.data.remove('demo', 'widget-order');
					document.location.reload();
				});
			
			})();
		
		});
	</script>
@endsection

