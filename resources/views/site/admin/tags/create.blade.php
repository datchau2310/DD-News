@extends('site.admin.layouts.app')

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
			<div class="panel">
				<div class="panel-heading">
					<h4>Add new tag</h4>
				</div>
				<div class="panel-body">
					<form action="{{route('site.admin.tag.store')}}" method="post">
						@csrf
						<div class="form-group">
							<div class="row gutter">
								<div class="col-md-12">
									<label class="control-label">Tag name</label>
									<input type="text" class="form-control" placeholder="Tag name" name="tag">
								</div>
							</div>
						</div>
						<div class="form-group no-margin">
							<div class="row gutter">
								<div class="col-md-12">
									<a href="{{route('site.admin.tag.index')}}" class="btn btn-danger">Back</a>
									<button type="button" class="btn btn-info">Submit</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Row ends -->	
@endsection