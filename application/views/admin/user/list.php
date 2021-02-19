<div class="card card-primary card-outline">
	<!-- /.card-header -->
	<div class="card-body">
		<p>
			<a href="<?php echo base_url('admin/user/tambah') ?>" class="btn btn-success btn-md">
				<i class="nav-icon fa fa-plus"></i>
				Tambah User
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
					<th>FOTO</th>
					<th>NAMA</th>
					<th>NPM</th>
					<th>NOMOR</th>
					<th>JABATAN</th>
					<th>USERNAME</th>
					<th>ROLE</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($user as $user) { ?>
				<tr>
					<td><?php echo $no ?></td>
					<td>
						<img src="<?php echo base_url('assets/upload/image/thumbs/'.$user->gambar) ?>"
							class="img img-responsive img-thumbnail rounded-3" width="50">
					</td>
					<td><?php echo $user->nama ?></td>
					<td><?php echo $user->npm ?></td>
					<td><?php echo $user->nomor ?></td>
					<td><span class="badge badge-secondary"><?php echo $user->jabatan ?></span></td>
					<td><?php echo $user->username ?></td>
					<?php 
						if ($user->level == "admin") {
					?>
					<td><span class="badge badge-success"><?php echo $user->level ?></span></td>
					<?php 
					}elseif ($user->level == "user") {
					?>
					<td><span class="badge badge-warning"><?php echo $user->level ?></span></td>
					<?php }?>
					<td>
						<a href="<?php echo base_url('admin/user/edit/'.$user->id_user) ?>"
							class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
						<?php include('delete.php') ?>
						<a href="<?php echo $user->whatsapp ?>" class="btn btn-success btn-xs"><i
								class="fab fa-whatsapp"></i> WhatsApp</a>
					</td>
				</tr>
				<?php $no++; } ?>
			</tbody>
		</table>
	</div>
</div>
