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
					<h3>Post Manage</h3>
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
					<span class="text-red">
						ALL POSTS
						<span class="text-green">{{$posts->count()}}</span>
					</span>
					<a href="{{route('site.admin.post.create')}}" class="btn btn-success btn-transparent float-right">Add new Post</a>
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table id="copy-print-csv" class="display table table-striped table-bordered no-margin text-center">
						  	<thead>
							    <tr>
									 <th>ID</th>
								     <th>Title</th>
								     <th>Author</th>
								     <th>Visibility</th>
								     <th>Is Approved</th>
								     <th>Status</th>
								     <th>Created_at</th>
								     <th>Update_at</th>
								     <th>Action</th>
							    </tr>
						  	</thead>
						  	<tbody>
							  	@foreach($posts as $post)
							    <tr>
							    	<td>{{ ++$i }}</td>
							        <td>{{ str_limit($post->title,'10')}}</td>
							        <td>{{$post->user->name}}</td>
							        <td>{{$post->view_count}}</td>
							        <td>
							        	@if($post->is_approved == true)

							        		<span class="">Approved</span>
							        	@else
							        		<span class="">Pending</span>
							        	@endif
							        </td>
							        <td>
							        	@if($post->status == true)

							        		<span class="">Published</span>
							        	@else
							        		<span class="">Pending</span>
							        	@endif
							        </td>
							      	<td>{{$post->created_at}}</td>
							      	<td>{{$post->updated_at}}</td>
							      	<td class="text-center">
							      		<a href="{{route('site.admin.post.show',$post->id)}}" class="btn btn-info btn-sm"><i class="icon-eye3"></i> Show</a>
							      		<a href="{{route('site.admin.post.edit',$post->id)}}" class="btn btn-success btn-sm"><i class="icon-edit"></i> Edit</a>
							      		<button type="button" class="btn btn-danger btn-sm" onclick="deletePost({{$post->id}})" ><i class="icon-cross2"></i> Delete</button>
							      		<form id="delete-form-{{$post->id}}" action="{{route('site.admin.post.destroy',$post->id)}}" method="POST" class="d-none">
							      			@csrf
							      			@method('DELETE')
							      		</form>
							      	</td>
							    </tr>	
							    @endforeach					  
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
	<script src="{{asset('/plugins/js/sweetalert2.all.min.js')}}"></script>
	<script type="text/javascript">
		function deletePost(id){
			swal({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  	if (result.value) {
			  		event.preventDefault();
			  		document.getElementById('delete-form-'+id).submit();
				    swal(
				      'Deleted!',
				      'Your file has been deleted.',
				      'success'
				    )
				}
			});
		}
	</script>
@endpush