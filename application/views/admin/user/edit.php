<div class="card card-primary card-outline">
	<!-- /.card-header -->
	<div class="card-body">
		<?php
			//Errro upload
			if (isset($error)) {
			echo '<p class="alert-warning">';
				echo $error;
				echo '</p>';
			}
			// Notifikasi Eror
			echo validation_errors('<div class="alert alert-warning">','</div>');
			// Form Open
			echo form_open_multipart(base_url('admin/user/edit/'.$user->id_user), 'class="form-horizontal"');
		?>
		<div class="row d-flex">
			<div class="col-lg-8 col-12">
				<div class="form-group">
					<label class="control-label">Nama Aslab</label>
					<div class="">
						<input type="text" name="nama" class="form-control" placeholder=""
							value="<?php echo $user->nama ?>" required>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="form-group">
					<label class="control-label">NPM</label>
					<div class="">
						<input type="text" name="npm" class="form-control" placeholder=""
							value="<?php echo $user->npm ?>" required>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="form-group">
					<label class="control-label">Nomor</label>
					<div class="">
						<input type="text" name="nomor" class="form-control" placeholder=""
							value="<?php echo $user->nomor ?>">
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="form-group">
					<label class="control-label">Link WhatsApp</label>
					<div class="">
						<input type="text" name="whatsapp" class="form-control" placeholder=""
							value="<?php echo $user->whatsapp ?>" required>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-8">
				<div class="form-group">
					<label class="control-label">Jabatan</label>
					<div class="">
						<select name="jabatan" class="form-control">
							<option value="Koordinator Laboratorium">Koordinator Laboratorium</option>
							<option value="Asisten Laboratorium"
								<?php if ($user->jabatan=="Asisten Laboratorium") { echo "selected";} ?>>
								Asisten Laboratorium</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-4">
				<div class="form-group">
					<label class="control-label">Level Hak Akses</label>
					<div class="">
						<select name="level" class="form-control">
							<option value="aktif">aktif</option>
							<option value="pensiun" <?php if ($user->level=="pensiun") { echo "selected";} ?>>pensiun
							</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-12">
				<div class="form-group">
					<label class="control-label">Username</label>
					<div class="">
						<input type="username" name="username" class="form-control" placeholder=""
							value="<?php echo $user->username ?>" required>
					</div>
				</div>
			</div>
			<div class="col-lg-5 col-12">
				<div class="form-group">
					<label class="control-label">Password</label>
					<div class="">
						<input type="password" name="password" class="form-control" placeholder=""
							value="<?php echo base64_decode($user->password) ?>" required>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="control-label">Foto Aslab</label>
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
