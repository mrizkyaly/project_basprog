<div class="row justify-content-center">
	<div class="col-lg-6 col-6">
		<!-- small box -->
		<div class="small-box bg-gradient-info">
			<div class="inner text-uppercase">
				<h3><?php echo $jumlah_user ?></h3>
				<p>User</p>
			</div>
			<div class="icon">
				<i class="fas fa-users"></i>
			</div>
			<a href="<?php echo base_url('admin/user')?>" class="small-box-footer">Lihat User <i
					class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-6 col-6">
		<!-- small box -->
		<div class="small-box bg-gradient-success">
			<div class="inner text-uppercase">
				<h3><?php echo $jumlah_artikel ?></h3>
				<p>Artikel</p>
			</div>
			<div class="icon">
				<i class="far fa-newspaper"></i>
			</div>
			<a href="<?php echo base_url('admin/artikel')?>" class="small-box-footer">Lihat Artikel <i
					class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<div class="col-lg-6 col-6">
		<!-- small box -->
		<div class="small-box bg-gradient-danger">
			<div class="inner text-uppercase">
				<h3><?php echo $jumlah_tools ?></h3>
				<p>Tools</p>
			</div>
			<div class="icon">
				<i class="fas fa-toolbox"></i>
			</div>
			<a href="<?php echo base_url('admin/tools')?>" class="small-box-footer">Lihat Tools <i
					class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<div class="col-lg-6 col-6">
		<!-- small box -->
		<div class="small-box bg-gradient-secondary">
			<div class="inner text-uppercase">
				<h3><?php echo $jumlah_berkas ?></h3>
				<p>Berkas</p>
			</div>
			<div class="icon">
				<i class="fas far fa-file-alt"></i>
			</div>
			<a href="<?php echo base_url('admin/berkas')?>" class="small-box-footer">Lihat Berkas <i
					class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
</div>
<!-- /.row -->
