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
		<li class="active selected">
			<a href="#">
				<i class="icon-air-play"></i>
				<span class="menu-item">Dashboard</span>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="icon-lab3"></i>
				<span class="menu-item">Projects</span>
				<span class="down-arrow"></span>
			</a>
			<ul>
				<li>
					<a href="tasks.html">Tasks</a>
				</li>
				<li>
					<a href="cards.html">Cards</a>
				</li>
				<li>
					<a href="users.html">Users</a>
				</li>
				<li>
					<a href="project-list.html">Project List</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="calendar.html">
				<i class="icon-calendar7"></i>
				<span class="menu-item">Calendar</span>
			</a>
		</li>
		<li>
			<a href="widgets.html">
				<i class="icon-colours"></i>
				<span class="menu-item">Widgets</span>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="icon-head"></i>
				<span class="menu-item">Pages</span>
				<span class="down-arrow"></span>
			</a>
			<ul>
				<li>
					<a href="profile.html">User Profile</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>
				<li>
					<a href="invoice.html">Invoice</a>
				</li>
				<li>
					<a href="timeline.html">Timeline</a>
				</li>
				<li>
					<a href="pricing.html">Pricing</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#">
				<i class="icon-line-graph"></i>
				<span class="menu-item">Graphs</span>
				<span class="down-arrow"></span>
			</a>
			<ul>
				<li>
					<a href="c3-graphs.html">C3 Graphs</a>
				</li>
				<li>
					<a href="small-graphs.html">Small Graphs</a>
				</li>
				<li>
					<a href="maps.html">Vector Maps</a>
				</li>
				<li>
					<a href="flot.html">Flot</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#">
				<i class="icon-layout5"></i>
				<span class="menu-item">Forms</span>
				<span class="down-arrow"></span>
			</a>
			<ul>
				<li>
					<a href="styled-inputs.html">Styled Inputs</a>
				</li>
				<li>
					<a href="check-radio.html">Check &amp; Radios</a>
				</li>
				<li>
					<a href="form-inputs.html">Form Inputs</a>
				</li>
				<li>
					<a href="editor.html">WYSIWYG Editor</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="gallery.html">
				<i class="icon-camera5"></i>
				<span class="menu-item">Gallery</span>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="icon-drop"></i>
				<span class="menu-item">UI Elements</span>
				<span class="down-arrow"></span>
			</a>
			<ul>
				<li>
					<a href="components.html">Components</a>
				</li>
				<li>
					<a href="progressbars.html">Progress Bars</a>
				</li>
				<li>
					<a href="notifications.html">Notifications</a>
				</li>
				<li>
					<a href="buttons.html">Buttons</a>
				</li>
				<li>
					<a href="typography.html">Typography</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#">
				<i class="icon-layers4"></i>
				<span class="menu-item">Layouts</span>
				<span class="down-arrow"></span>
			</a>
			<ul>
				<li>
					<a href="custom-drag.html">Drag &amp; Drop Panels</a>
				</li>
				<li>
					<a href="custom-panels.html">Custom Panels</a>
				</li>
				<li>
					<a href="layout-sidebar.html">Layout Sidebar</a>
				</li>
				<li>
					<a href="default.html">Basic Grid</a>
				</li>
				<li>
					<a href="custom-grid.html">Custom Grid</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#">
				<i class="icon-warning2"></i>
				<span class="menu-item">Error Pages</span>
				<span class="down-arrow"></span>
			</a>
			<ul>
				<li>
					<a href="login.html">Login</a>
				</li>
				<li>
					<a href="signup.html">SignUp</a>
				</li>
				<li>
					<a href="forgot-pwd.html">Forgot Password</a>
				</li>
				<li>
					<a href="maintenance.html">Maintenance</a>
				</li>
				<li>
					<a href="coming-soon.html">Coming Soon</a>
				</li>
				<li>
					<a href="error.html">Page not Found</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="#">
				<i class="icon-grid2"></i>
				<span class="menu-item">Tables</span>
				<span class="down-arrow"></span>
			</a>
			<ul>
				<li>
					<a href="tables.html">Tables</a>
				</li>
				<li>
					<a href="data-tables.html">Data Tables</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="icons.html">
				<i class="icon-bolt"></i>
				<span class="menu-item">Icons</span>
			</a>
		</li>
	</ul>
</div>