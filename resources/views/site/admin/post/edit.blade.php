@extends('site.admin.layouts.app')
@section('content')
<div class="container-fluid">
	<!-- Row starts -->
	<form action="{{route('site.admin.post.update',$post->id)}}" method="post" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="row gutter">
			<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
				<div class="panel">
					<div class="panel-heading">
						<span class="text-red">Edit Post</span>
					</div>
					<div class="panel-body">
						<div class="row gutter">
							<div class="col-lg-12">
								<div class="form-group">
									<div class="row gutter">
										<div class="col-md-12">
											<input type="text" class="form-control" placeholder="Title name" name="title" value="{{$post->title}}">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row gutter">
										<div class="col-md-8">
											<input type="file" class="file-upload-info" name="image" value="{{$post->image}}">
										</div>
										<div class="col-md-4">
											<img src="{{ asset('storage/post') }}/{{$post->image}}" width="100%" height="87">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row gutter">
										<div class="col-md-12">
											<input class="filled-in" type="checkbox" id="publish" name="status" value="1" {{$post->status == true ? 'checked' : '' }}>
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
								<div class="form-group form-float">
									<div class="form-line {{ $errors->has('categories') ? 'focused error' : '' }}">
										<label for="category">Select Category</label>
										<select name="categories[]" id="category" class="form-control" >
											@foreach($categories as $category)
												<option 
													@foreach($post->categories as $postCategory)
														{{$postCategory->id == $category->id ? 'selected' : '' }}
													@endforeach

													value="{{ $category->id }}">{{ $category->name }}

												</option>
											@endforeach
										</select>
									</div>
								</div>

								<div class="form-group form-float">
									<div class="form-line {{ $errors->has('tags') ? 'focused error' : '' }}">
										<label for="tag">Select Tags</label>
										<select name="tags" id="tag" class="form-control">
											@foreach($tags as $tag)
											<option 
												@foreach($post->tags as $postTags)
													{{$postTags->id == $tag->id ? 'selected' : '' }}
												@endforeach

												value="{{ $tag->id }}">{{ $tag->name }}

											</option>
											@endforeach
										</select>
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
											<textarea name="body" id="editor">{{$post->body}}</textarea>
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
	<script src="{{asset('/plugins/js/ckeditor/ckeditor.js')}}"></script>
	<script> 
		CKEDITOR.replace('editor',{
			filebrowserBrowseUrl: '{{ asset('plugins/js/ckfinder/ckfinder.html') }}',
	        filebrowserImageBrowseUrl: '{{ asset('plugins/js/ckfinder/ckfinder.html?type=Images') }}',
	        filebrowserFlashBrowseUrl: '{{ asset('plugins/js/ckfinder/ckfinder.html?type=Flash') }}',
	        filebrowserUploadUrl: '{{ asset('plugins/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
	        filebrowserImageUploadUrl: '{{ asset('plugins/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
	        filebrowserFlashUploadUrl: '{{ asset('plugins/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
		}); 
	</script>
@endpush