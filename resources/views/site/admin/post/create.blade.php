@extends('site.admin.layouts.app')

@section('content')
<div class="container-fluid">
	<!-- Row starts -->
	<form action="{{route('site.admin.tag.store')}}" method="post">
		@csrf
		<div class="row gutter">
			<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
				<div class="panel">
					<div class="panel-heading">
						<span class="text-red">Add new post</span>
					</div>
					<div class="panel-body">
						<div class="row gutter">
							<div class="col-lg-12">
								<div class="form-group">
									<div class="row gutter">
										<div class="col-md-12">
											<input type="text" class="form-control" placeholder="Title name" name="title">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row gutter">
										<div class="col-md-12">
											<input type="file" class="file-upload-info" name="image">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row gutter">
										<div class="col-md-12">
											<input class="filled-in" type="checkbox" id="publish" name="status" value="1">
											<label>Publish</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
				<div class="panel">
					<div class="panel-heading">
						<span class="text-red">Categories and tags</span>
					</div>
					<div class="panel-body">
						<div class="row gutter">
							<div class="col-lg-12">
								<div class="form-group">
									<div class="row gutter">
										<div class="col-md-12">
											<select class="form-control">
												@foreach($categories as $category)
												<option value="{{$category->id}}">{{$category->name}}</option>
												@endforeach
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row gutter">
										<div class="col-md-12">
											<select class="form-control">
												@foreach($tags as $tag)
												<option value="{{$tag->id}}">{{$tag->name}}</option>
												@endforeach
											</select>
										</div>
									</div>
								</div>
								<div class="form-group no-margin">
									<div class="row gutter">
										<div class="col-md-12">
											<a href="{{route('site.admin.post.index')}}" class="btn btn-danger">Back</a>
											<button type="submit" class="btn btn-info float-right">Submit</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row gutter">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="panel">
					<div class="panel-heading">
						<span class="text-red">Body</span>
					</div>
					<div class="panel-body">
						<div class="row gutter">
							<div class="col-lg-12">
								<div class="form-group">
									<div class="row gutter">
										<div class="col-md-12">
											<textarea name="content" id="editor"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<!-- Row ends -->
@endsection
@push('js')
	
@endpush