<div class="card card-primary card-outline">
	<!-- /.card-header -->
	<div class="card-body">
		<?php
			// Notifikasi Eror
			echo validation_errors('<div class="alert alert-warning">','</div>');
			// Form Open
			echo form_open_multipart(base_url('admin/berkas/tambah'), 'class="form-horizontal"');
		?>
		<div class="row d-flex">
			<div class="col-12">
				<div class="form-group">
					<label class="control-label">Nama Berkas</label>
					<div class="">
						<input type="text" name="nama" class="form-control" placeholder=""
							value="<?php echo set_value('nama')?>" required>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="form-group">
					<label class="control-label">Link Berkas</label>
					<div class="">
						<input type="text" name="link" class="form-control" placeholder=""
							value="<?php echo set_value('link')?>" required>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-8">
				<div class="form-group">
					<label class="control-label">Kategori</label>
					<div class="">
						<select name="kategori" class="form-control">
							<option value="pemrograman terstruktur">Pemrograman Terstruktur</option>
							<option value="struktur data">Struktur Data</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-4">
				<div class="form-group">
					<label class="control-label">Status</label>
					<div class="">
						<select name="status" class="form-control">
							<option value="publish">publish</option>
							<option value="draft">draft</option>
						</select>
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
