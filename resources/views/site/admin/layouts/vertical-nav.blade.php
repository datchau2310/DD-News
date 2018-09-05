<div class="vertical-nav vertical-nav-sm">
<button class="collapse-menu">
	<i class="icon-menu2"></i>
</button>
<div class="user-details clearfix">
	<a href="profile.html" class="user-img">
		<img src="{{asset('images/thumbs')}}/{{Auth::user()->image}}" alt="User Info">
			<span class="likes-info">9</span>
		</a>
		<h5 class="user-name">{{Auth::user()->username}}</h5>
	</div>
	<ul class="menu clearfix">
		<li class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}">
			<a href="{{route('site.admin.dashboard')}}">
				<i class="icon-air-play"></i>
				<span class="menu-item">Dashboard</span>
			</a>
		</li>
		<li class="{{ Request::is('admin/tag*') ? 'active' : '' }}">
			<a href="{{route('site.admin.tag.index')}}">
				<i class="icon-tag3"></i>
				<span class="menu-item">Tags</span>
			</a>
		</li>
		<li class="{{ Request::is('admin/user*') ? 'active' : '' }}">
			<a href="{{route('site.admin.user.index')}}">
				<i class="icon-head"></i>
				<span class="menu-item">User</span>
			</a>
		</li>
		<li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
			<a href="{{route('site.admin.category.index')}}">
				<i class="icon-notebook"></i>
				<span class="menu-item">Category</span>
			</a>
		</li>
		<li class="{{ Request::is('admin/post*') ? 'active' : '' }}">
			<a href="{{route('site.admin.post.index')}}">
				<i class="icon-news"></i>
				<span class="menu-item">Post</span>
			</a>
		</li>
	</ul>
</div>