<div class="card card-primary card-outline">
	<!-- /.card-header -->
	<div class="card-body">
		<p>
			<a href="<?php echo base_url('admin/artikel/tambah') ?>" class="btn btn-success btn-md">
				<i class="nav-icon fa fa-plus"></i>
				Tambah artikel
			</a>
		</p>

		<?php 
			// Notifikasi sukses
			if ($this->session->flashdata('sukses')) {
				echo '<p class="alert alert-success">';
				echo $this->session->flashdata('sukses');
			}
		?>

		<table id="example2" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>JUDUL ARTIKEL</th>
					<th>KATEGORI</th>
					<th>PENULIS</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($artikel as $artikel) { ?>
				<tr>
					<td>
						<?php
							if ($artikel->status == "publish") {
						?>
						<span class="badge badge-success"><?php echo $artikel->status ?></span>
						<?php 
							}elseif ($artikel->status == "draft") {
						?>
						<span class="badge badge-warning"><?php echo $artikel->status ?></span>
						<?php }?>
						<?php echo $artikel->judul ?>
					</td>
					<td>
						<?php echo $artikel->kategori  ?>
					</td>
					<td><?php echo $artikel->nama ?></td>
					<td>
						<a href="<?php echo base_url('admin/artikel/edit/'.$artikel->id_artikel) ?>"
							class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
						<?php include('delete.php') ?>
					</td>
				</tr>
				<?php $no++; } ?>
			</tbody>
		</table>
	</div>
</div>
