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
						<?php echo $artikel->judul ?>
						<?php
							if ($artikel->status == "publish") {
						?>
						<span class="badge badge-primary"><?php echo $artikel->status ?></span>
						<?php 
							}elseif ($artikel->status == "draft") {
						?>
						<span class="badge badge-secondary"><?php echo $artikel->status ?></span>
						<?php }?>
					</td>
					<td>
						<?php if ($artikel->kategori == "berita") {?>
						<span class="badge badge-success"><?php echo $artikel->kategori ?></span>
						<?php }elseif ($artikel->kategori == "pemrograman terstruktur") {?>
						<span class="badge badge-info"><?php echo $artikel->kategori ?></span>
						<?php }elseif ($artikel->kategori == "struktur data") {?>
						<span class="badge badge-danger"><?php echo $artikel->kategori ?></span>
						<?php }?>
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
