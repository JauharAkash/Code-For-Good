<body id="page-top">

	<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

		<a class="navbar-brand mr-1" href="<?php echo base_url()?>dashboard/index">Teacher Dashboard</a>

		<button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
			<i class="fas fa-bars"></i>
		</button>

		<!-- Navbar Search -->
		<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button class="btn btn-primary" type="button">
						<i class="fas fa-search"></i>
					</button>
				</div>
			</div>
		</form>

		<!-- Navbar -->
		<ul class="navbar-nav ml-auto ml-md-0">
			<li class="nav-item dropdown no-arrow mx-1">
				<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-bell fa-fw"></i>
					<span class="badge badge-danger">9+</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
					<a class="dropdown-item" href="#">Jump to</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Postpone 1 hour</a>
				</div>
			</li>
			<li class="nav-item dropdown no-arrow mx-1">
				<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-envelope fa-fw"></i>
					<span class="badge badge-danger">7</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
					<a class="dropdown-item" href="#">Mark as read</a>
				</div>
			</li>
			<li class="nav-item dropdown no-arrow">
				<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-user-circle fa-fw"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
					<a class="dropdown-item" href="#">Students</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo base_url()?>auth/logout" data-toggle="modal" data-target="#logoutModal">Logout</a>
				</div>
			</li>
		</ul>

	</nav>

	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="sidebar navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fas fa-fw fa-folder"></i>
					<span>Worksheets</span>
				</a>
				<div class="dropdown-menu" aria-labelledby="pagesDropdown">
					<h6 class="dropdown-header">Components</h6>
					<a class="dropdown-item" href="<?php echo base_url()?>dashboard/topics">Topics</a>
					<a class="dropdown-item" href="<?php echo base_url()?>dashboard/level">Level of Education</a>
					<a class="dropdown-item" href="<?php echo base_url()?>dashboard/questions">Questions</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo base_url()?>dashboard/worksheets">List of Worksheets</a>
				</div>
			</li>
		</ul>
