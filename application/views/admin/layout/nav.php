<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?php echo base_url() ?>admin/dashboard" class="brand-link">
		<img src="<?php echo base_url() ?>assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
			class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Admin Page</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
		with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?php echo base_url('admin/dashboard') ?>" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>
				<li class="nav-header">ARTIKEL</li>
				<li class="nav-item">
					<a href="<?php echo base_url('admin/artikel') ?>" class="nav-link">
						<i class="nav-icon far fa-newspaper"></i>
						<p>Daftar Artikel</p>
					</a>
				</li>
				<li class="nav-header">USER</li>
				<li class="nav-item">
					<a href="<?php echo base_url('admin/user') ?>" class="nav-link">
						<i class="nav-icon fas fa-users"></i>
						<p>Asisten Laboratorium</p>
					</a>
				</li>
				<li class="nav-header">SETTING</li>
				<li class="nav-item">
					<a href="<?php echo base_url('admin/konfigurasi') ?>" class="nav-link">
						<i class="nav-icon fas fa-wrench"></i>
						<p>Konfigurasi Website</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('admin/tools') ?>" class="nav-link">
						<i class="nav-icon fas fa-toolbox"></i>
						<p>Konfigurasi Peralatan</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?php echo base_url('admin/berkas') ?>" class="nav-link">
						<i class="nav-icon far fa-file-alt"></i>
						<p>Konfigurasi Berkas</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><?php echo $title ?></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin/dasbor') ?>">Admin</a></li>
						<li class="breadcrumb-item active"><?php echo $title ?></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
