<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
		<li class="nav-item d-none d-sm-inline-block">
			<a href="<?php echo base_url() ?>" class="nav-link text-uppercase"><strong>Client Page</strong></a>
		</li>
	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<li class="nav-item dropdown user-menu">
			<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
				<?php $gambar = $this->session->userdata('gambar');?>
				<img src="<?php echo base_url('assets/upload/image/thumbs/'.$gambar) ?>"
					class="user-image img-circle elevation-2" alt="User Image">
				<strong class="d-none d-md-inline"><?php echo $this->session->userdata('nama'); ?></strong>
			</a>
			<ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
				<!-- User image -->
				<li class="user-header bg-primary">
					<img src="<?php echo base_url('assets/upload/image/thumbs/'.$gambar) ?>"
						class="img-circle elevation-2" alt="User Image">
					<p>
						<strong><?php echo $this->session->userdata('username'); ?></strong>
						<?php
							$level = $this->session->userdata('level');
							if ($level == "admin") {
						?>
						<span class="badge badge-success"><?php echo $this->session->userdata('level'); ?></span>
						<?php 
							}elseif ($level == "user") {
						?>
						<span class="badge badge-warning"><?php echo $this->session->userdata('level'); ?></span>
						<?php }?>
						<br>
						<small>Terakhir Login <?php echo date('d M Y') ?></small>
					</p>
				</li>
				<!-- Menu Footer-->
				<li class="user-footer">
					<?php $id_user = $this->session->userdata('id_user'); ?>
					<a href="<?php echo base_url('admin/user/edit/'.$id_user) ?>" class="btn btn-default btn-flat"><i
							class="far fa-id-card"></i> Profile</a>
					<a href="<?php echo base_url('root/logout')?>" class="btn btn-default btn-flat float-right"><i
							class="fas fa-sign-out-alt"></i> Log
						out</a>
				</li>
			</ul>
		</li>
	</ul>
</nav>
<!-- /.navbar -->
<!-- Main Sidebar Container -->
