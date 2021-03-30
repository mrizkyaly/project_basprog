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
			echo form_open_multipart(base_url('admin/artikel/tambah'), 'class="form-horizontal"');
		?>
		<div class="row d-flex">
			<div class="col-12">
				<div class="form-group">
					<label class="control-label">Judul Artikel</label>
					<div class="">
						<input type="text" name="judul" class="form-control" placeholder=""
							value="<?php echo set_value('judul') ?>" required>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="form-group">
					<label class="control-label">Gambar Thumbnail</label>
					<div class="custom-file">
						<input type="file" name="gambar_artikel" class="custom-file-input" id="exampleInputFile">
						<label class="custom-file-label" for="exampleInputFile">Pilih file</label>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-8">
				<div class="form-group">
					<label class="control-label">Kategori</label>
					<div class="">
						<select name="kategori" class="form-control">
							<option value="berita">Berita</option>
							<option value="pemrograman terstruktur">Pemrograman Terstruktur</option>
							<option value="struktur data">Struktur Data</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-4">
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
			<div class="col-12">
				<div class="form-group">
					<label class="control-label">Deskripsi</label>
					<textarea class="form-control" rows="3" name="deskripsi" placeholder=""></textarea>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="control-label">Isi Artikel</label>
					<textarea id="full-featured-non-premium" rows="35" name="artikel"></textarea>
				</div>
			</div>
			<div class="col-12 mt-2">
				<button class="btn btn-success btn-md btn-block px-5" name="submit" type="submit">
					<i class="fa fa-save"></i> Simpan
				</button>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
