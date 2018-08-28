@extends('site.admin.layouts.app')
@push('css')
	<link rel="stylesheet" href="{{asset('/plugins/css/datatables/dataTables.bs.min.css')}}">
	<link rel="stylesheet" href="{{asset('/plugins/css/datatables/autoFill.bs.min.css')}}">
	<link rel="stylesheet" href="{{asset('/plugins/css/datatables/fixedHeader.bs.css')}}">
	<link rel="stylesheet" href="{{asset('/plugins/css/datatables/buttons.bs.css')}}">
@endpush
@section('content')

<div class="container-fluid">
	<!-- Top Bar Starts -->
	<div class="top-bar clearfix">
		<div class="row gutter">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="page-title">
					<h3>Tags Manage</h3>
				</div>
			</div>
		</div>
	</div>
	<!-- Top Bar Ends -->

	<!-- Row starts -->
	<div class="row gutter">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="panel panel-light no-margin">
				<div class="panel-heading">
					<a href="{{route('site.admin.tag.create')}}" class="btn btn-success btn-transparent">Add new tag</a>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table id="copy-print-csv" class="display table table-striped table-bordered no-margin">
						  <thead>
						    <tr>
						      <th>Name</th>
						      <th>Position</th>
						      <th>Office</th>
						      <th>Age</th>
						      <th>Start date</th>
						      <th>Salary</th>
						    </tr>
						  </thead>
						  <tfoot>
						    <tr>
						      <th>Name</th>
						      <th>Position</th>
						      <th>Office</th>
						      <th>Age</th>
						      <th>Start date</th>
						      <th>Salary</th>
						    </tr>
						  </tfoot>
						  <tbody>
						    <tr>
						      <td>Tiger Nixon</td>
						      <td>System Architect</td>
						      <td>Edinburgh</td>
						      <td>61</td>
						      <td>2011/04/25</td>
						      <td>$320,800</td>
						    </tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Row ends -->			
</div>
@endsection
@push('js')
		<!-- DataBars JS -->
	<script src="{{asset('/plugins/js/databars/custom-databars.js')}}"></script>
	<script src="{{asset('/plugins/js/databars/jquery.databar.js')}}"></script>

		<!-- Data Tables -->
	<script src="{{asset('/plugins/js/datatables/dataTables.min.js')}}"></script>
	<script src="{{asset('/plugins/js/datatables/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{asset('/plugins/js/datatables/autoFill.min.js')}}"></script>
	<script src="{{asset('/plugins/js/datatables/autoFill.bootstrap.min.js')}}"></script>
	<script src="{{asset('/plugins/js/datatables/fixedHeader.min.js')}}"></script>
	<script src="{{asset('/plugins/js/datatables/custom-datatables.js')}}"></script>

		<!-- Download / CSV / Copy / Print -->
	<script src="{{asset('/plugins/js/datatables/buttons.min.js')}}"></script>
	<script src="{{asset('/plugins/js/datatables/flash.min.js')}}"></script>
	<script src="{{asset('/plugins/js/datatables/jszip.min.js')}}"></script>
	<script src="{{asset('/plugins/js/datatables/pdfmake.min.js')}}"></script>
	<script src="{{asset('/plugins/js/datatables/vfs_fonts.js')}}"></script>
	<script src="{{asset('/plugins/js/datatables/html5.min.js')}}"></script>
	<script src="{{asset('/plugins/js/datatables/buttons.print.min.js')}}"></script>	
@endpush