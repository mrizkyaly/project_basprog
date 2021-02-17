<div class="card card-primary card-outline">
	<!-- /.card-header -->
	<div class="card-body">
		<?php
			//Errro upload
			if (isset($error)) {
			echo '<div class="alert alert-warning">';
				echo $error;
				echo '</div>';
			}
			// Notifikasi Eror
			echo validation_errors('<div class="alert alert-warning">','</div>');
			// Form Open
			echo form_open_multipart(base_url('admin/user/tambah'), 'class="form-horizontal"');
		?>
		<div class="row d-flex">
			<div class="col-8">
				<div class="form-group">
					<label class="control-label">Nama User</label>
					<div class="">
						<input type="text" name="nama" class="form-control" placeholder=""
							value="<?php echo set_value('nama') ?>" required>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label class="control-label">Level Hak Akses</label>
					<div class="">
						<select name="level" class="form-control">
							<option value="admin">admin</option>
							<option value="user">user</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-7">
				<div class="form-group">
					<label class="control-label">Username</label>
					<div class="">
						<input type="username" name="username" class="form-control" placeholder=""
							value="<?php echo set_value('username') ?>" required>
					</div>
				</div>
			</div>
			<div class="col-5">
				<div class="form-group">
					<label class="control-label">Password</label>
					<div class="">
						<input type="password" name="password" class="form-control" placeholder=""
							value="<?php echo set_value('password') ?>" required>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="control-label">Foto User</label>
					<div class="custom-file">
						<input type="file" name="gambar" class="custom-file-input" id="exampleInputFile">
						<label class="custom-file-label" for="exampleInputFile">Pilih file</label>
					</div>
				</div>
			</div>
			<div class="col-12 mt-2">
				<button class="btn btn-success btn-md px-5" name="submit" type="submit">
					<i class="fa fa-save"></i> Simpan
				</button>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
