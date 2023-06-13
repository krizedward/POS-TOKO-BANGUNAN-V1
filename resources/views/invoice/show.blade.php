@extends('layouts.ace')

@section('breadcrumbs')
    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
        <ul class="breadcrumb">
            <li>
                <i class="ace-icon fa fa-home home-icon"></i>
                <a href="{{ route('main') }}">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('barang.owner.index') }}">Barang</a>
            </li>
            <li>
                <a href="{{ route('barang.owner.daily.index') }}">Laporan Harian</a>
            </li>
            <li>
                <a href="{{ route('barang.owner.daily.show',[11]) }}">Detail Laporan</a>
            </li>
            <li class="active">Nota</li>
        </ul><!-- /.breadcrumb -->
    </div>
@endsection

@section('page-header')
    <div class="page-header">
        <h1>
            Nota
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
								<div class="space-6"></div>
								<div class="row">
									<div class="col-sm-10 col-sm-offset-1">
										<div class="widget-box transparent">
											<div class="widget-header widget-header-large">
												<h3 class="widget-title grey lighter">
													Detail Nota Gudang
												</h3>
												<div class="widget-toolbar no-border invoice-info">
													<span class="invoice-info-label">No DO :</span>
													<span class="red">01203</span>
													<br />
													<span class="invoice-info-label">Date:</span>
													<span class="blue">01/07/2021</span>
												</div>
												<!-- <div class="widget-toolbar hidden-480">
													<a href="#">
														<i class="ace-icon fa fa-print"></i>
													</a>
												</div> -->
											</div>
											<div class="widget-body">
												<div class="widget-main padding-24">
													<div class="row">
														<div class="col-sm-6">
															<div class="row">
																<div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
																	<b>Toko Bangunan Jaya Lestari</b>
																</div>
															</div>
															<div>
																<ul class="list-unstyled spaced">
																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i> Jl. Raya Ngijo Karangploso No.653
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>65152
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>Kota Malang, Jawa Timur
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>
                                                                        Phone:
																		<b class="red">(0341) 461251</b>
																	</li>
																	<li class="divider"></li>
																	<li>
																		<i class="ace-icon fa fa-caret-right blue"></i>
																		Nota Pengiriman
																	</li>
																</ul>
															</div>
														</div><!-- /.col -->
														<div class="col-sm-6">
															<div class="row">
																<div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
																	<b>Customer Info</b>
																</div>
															</div>
															<div>
																<ul class="list-unstyled  spaced">
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Bpk. Edo
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Pembeli Baru
																	</li>
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>Batu
																	</li>
																	<li class="divider"></li>
																	<li>
																		<i class="ace-icon fa fa-caret-right green"></i>
																		No Handphone : -
																	</li>
																</ul>
															</div>
														</div><!-- /.col -->
													</div><!-- /.row -->
													<div class="space"></div>
													<div>
														<table class="table table-striped table-bordered">
															<thead>
																<tr>
																	<th class="center">#</th>
																	<th>Product</th>
																	<th class="hidden-xs">Description</th>
																	<th class="hidden-480">Discount</th>
																	<th>Total</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="center">1</td>
																	<td>
																		<a href="#">google.com</a>
																	</td>
																	<td class="hidden-xs">
																		1 year domain registration
																	</td>
																	<td class="hidden-480"> --- </td>
																	<td>Rp. 100.000</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="hr hr8 hr-double hr-dotted"></div>
													<div class="row">
														<div class="col-sm-5 pull-right">
															<h4 class="pull-right">
																Total amount :
																<span class="red">Rp. 100.000</span>
															</h4>
														</div>
													</div>
													<div class="space-6"></div>
													<!-- <div class="well">
														Thank you for choosing Ace Company products.
				                                        We believe you will be satisfied by our services.
													</div> -->
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
@endsection

@section('script')	
    <!-- basic scripts -->
	<!--[if !IE]> -->
	<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
	<!-- <![endif]-->
	<!--[if IE]>
    <script src="assets/js/jquery-1.11.3.min.js"></script>
    <![endif]-->
	<script type="text/javascript">
		if('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('assets/js/jquery.mobile.custom.min.js') }}'>"+"<"+"/script>");
	</script>
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- page specific plugin scripts -->
	<!-- ace scripts -->
	<script src="{{ asset('assets/js/ace-elements.min.js') }}"></script>
	<script src="{{ asset('assets/js/ace.min.js') }}"></script>
	<!-- inline scripts related to this page -->
@endsection