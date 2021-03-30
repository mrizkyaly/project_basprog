<div class="card card-primary card-outline">
	<!-- /.card-header -->
	<div class="card-body">
		<?php
			// Notifikasi Eror
			echo validation_errors('<div class="alert alert-warning">','</div>');
			// Form Open
			echo form_open_multipart(base_url('admin/konfigurasi'), 'class="form-horizontal"');
		?>
		<div class="row d-flex">
			<div class="col-12">
				<div class="form-group">
					<label class="control-label">Deskripsi Laboratorium Bahsa Pemrograman</label>
					<div class="">
						<input type="text" name="deskripsi_basprog" class="form-control" placeholder=""
							value="<?php echo $konfigurasi->deskripsi_basprog ?>" required>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="form-group">
					<label class="control-label">Link Youtube</label>
					<div class="">
						<input type="text" name="youtube" class="form-control" placeholder=""
							value="<?php echo $konfigurasi->youtube?>" required>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="form-group">
					<label class="control-label">Link Instagram</label>
					<div class="">
						<input type="text" name="instagram" class="form-control" placeholder=""
							value="<?php echo $konfigurasi->instagram?>" required>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="form-group">
					<label class="control-label">Link Pendaftaran Aslab</label>
					<div class="">
						<input type="text" name="pendaftaran_aslab" class="form-control" placeholder=""
							value="<?php echo $konfigurasi->pendaftaran_aslab ?>" required>
					</div>
				</div>
			</div>
			<div class="col-12 mt-2">
				<button class="btn btn-success btn-block btn-md px-5" name="submit" type="submit">
					<i class="fa fa-save"></i> Simpan
				</button>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
