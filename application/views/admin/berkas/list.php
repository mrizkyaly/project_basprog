<div class="card card-primary card-outline">
	<!-- /.card-header -->
	<div class="card-body">
		<p>
			<a href="<?php echo base_url('admin/berkas/tambah') ?>" class="btn btn-success btn-md">
				<i class="nav-icon fa fa-plus"></i>
				Tambah Berkas
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
					<th>NO</th>
					<th>NAMA</th>
					<th>KATEGORI</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($berkas as $berkas) { ?>
				<tr>
					<td><?php echo $no ?></td>
					<td>
						<a href="<?php echo $berkas->link ?>">
							<?php echo $berkas->nama ?>
						</a>
						<?php if ($berkas->status == "publish") {?>
						<span class="badge badge-primary"><?php echo $berkas->status ?></span>
						<?php }elseif ($berkas->status == "draft") {?>
						<span class="badge badge-secondary"><?php echo $berkas->status ?></span>
						<?php }?>
					</td>
					<td>
						<?php if ($berkas->kategori == "pemrograman terstruktur") {?>
						<span class="badge badge-info"><?php echo $berkas->kategori ?></span>
						<?php }elseif ($berkas->kategori == "struktur data") {?>
						<span class="badge badge-danger"><?php echo $berkas->kategori ?></span>
						<?php }?></td>
					<td>
						<a href="<?php echo base_url('admin/berkas/edit/'.$berkas->id_berkas) ?>"
							class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
						<?php include('delete.php') ?>
					</td>
				</tr>
				<?php $no++; } ?>
			</tbody>
		</table>
	</div>
</div>
