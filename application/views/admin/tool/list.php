<div class="card card-primary card-outline">
	<!-- /.card-header -->
	<div class="card-body">
		<p>
			<a href="<?php echo base_url('admin/tools/tambah') ?>" class="btn btn-success btn-md">
				<i class="nav-icon fa fa-plus"></i>
				Tambah Data
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
					<th>LOGO</th>
					<th>NAMA</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1; foreach ($tools as $tools) { ?>
				<tr>
					<td><?php echo $no ?></td>
					<td>
						<img src="<?php echo base_url('assets/upload/image/thumbs/'.$tools->logo) ?>"
							class="img img-responsive rounded-3" width="50">
					</td>
					<td>
						<a href="<?php echo $tools->link ?>">
							<?php echo $tools->nama ?>
						</a>
						<?php if ($tools->status == "publish") {?>
						<span class="badge badge-primary"><?php echo $tools->status ?></span>
						<?php }elseif ($tools->status == "draft") {?>
						<span class="badge badge-secondary"><?php echo $tools->status ?></span>
						<?php }?>
					</td>
					<td>
						<a href="<?php echo base_url('admin/tools/edit/'.$tools->id_tool) ?>"
							class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
						<?php include('delete.php') ?>
					</td>
				</tr>
				<?php $no++; } ?>
			</tbody>
		</table>
	</div>
</div>
