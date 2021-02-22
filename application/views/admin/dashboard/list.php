<div class="row justify-content-center">
	<div class="col-lg-6 col-6">
		<!-- small box -->
		<div class="small-box bg-gradient-info">
			<div class="inner">
				<h3><?php echo $jumlah_user ?></h3>
				<p>User</p>
			</div>
			<div class="icon">
				<i class="fas fa-users"></i>
			</div>
			<a href="<?php echo base_url('admin/user')?>" class="small-box-footer">More info <i
					class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-6 col-6">
		<!-- small box -->
		<div class="small-box bg-gradient-success">
			<div class="inner">
				<h3><?php echo $jumlah_artikel ?></h3>
				<p>Artikel</p>
			</div>
			<div class="icon">
				<i class="far fa-newspaper"></i>
			</div>
			<a href="<?php echo base_url('admin/artikel')?>" class="small-box-footer">More info <i
					class="fas fa-arrow-circle-right"></i></a>
		</div>
	</div>
</div>
<!-- /.row -->
