@extends('site.admin.layouts.app')
@section('content')
<div class="container-fluid">
	<div class="top-bar clearfix">
		<div class="row gutter">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				<a href="{{route('site.admin.post.index')}}" class="btn btn-danger btn-sm ">BACK</a>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
				@if($post->is_approved == false)
					<button class="btn btn-success btn-sm float-right text-white" disabled>
						<i class="icon-check2"></i> <span>Approve</span>
					</button>
				@else
					<button class="btn btn-success btn-sm float-right text-white" >
						<i class="icon-check2"></i> <span>Approved</span>
					</button>
				@endif
			</div>
		</div>
	</div>
	<div class="row gutter">
		<div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
			<div class="panel">
				<div class="panel-heading">
					<h3 class="text-left">{{$post->title}}</h3>
					<small>Posted by <strong><a href="">{{$post->user->name}}</a></strong> on {{$post->created_at->toFormattedDateString()}}</small>
				</div>
				<div class="panel-body">
					{!! $post->body !!}
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
			<div class="row gutter">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="text-left text-red task-name">Category</h3>
						</div>
						<div class="panel-body">
							<div class="row gutter">
								<div class="col-lg-12">
									@foreach($post->categories as $category)
										<span class="btn btn-danger btn-sm">{{$category->name}}</span>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="text-left text-blue task-name">Tags</h3>
						</div>
						<div class="panel-body">
							<div class="row gutter">
								<div class="col-lg-12">
									@foreach($post->tags as $tag)
										<span class="btn btn-info btn-sm">{{$tag->name}}</span>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="text-left text-green task-name">Featured Image</h3>
						</div>
						<div class="panel-body">
							<div class="row gutter">
								<div class="col-lg-12">
									<img class="img-fluid img-thumbnail" src="{{ asset('storage/post') }}/{{$post->image}}">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection