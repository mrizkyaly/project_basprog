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
					<label class="control-label">Judul</label>
					<div class="">
						<input type="text" name="judul" class="form-control" placeholder=""
							value="<?php echo set_value('judul') ?>" required>
					</div>
				</div>
			</div>
			<div class="col-10">
				<div class="form-group">
					<label class="control-label">Gambar Thumbnail</label>
					<div class="custom-file">
						<input type="file" name="gambar_artikel" class="custom-file-input" id="exampleInputFile">
						<label class="custom-file-label" for="exampleInputFile">Pilih file</label>
					</div>
				</div>
			</div>
			<div class="col-2">
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
			<div class="col-8">
				<div class="form-group">
					<label class="control-label">Deskripsi</label>
					<textarea class="form-control" rows="3" name="deskripsi" placeholder=""></textarea>
				</div>
			</div>
			<div class="col-4">
				<div class="form-group">
					<label for="exampleInputEmail1">Kategori </label><br>
					<div class="custom-control custom-checkbox">
						<input class="custom-control-input" name="kategori[]" type="checkbox" id="kategori-1"
							value="berita">
						<label for="kategori-1" class="custom-control-label">Berita</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input class="custom-control-input" name="kategori[]" type="checkbox" id="kategori-2"
							value="pemrograman terstruktur">
						<label for="kategori-2" class="custom-control-label">Pemrograman Terstruktur</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input class="custom-control-input" name="kategori[]" type="checkbox" id="kategori-3"
							value="Struktur Data">
						<label for="kategori-3" class="custom-control-label">Struktur Data</label>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="control-label">Isi Artikel</label>
					<textarea id="full-featured-non-premium" rows="35" name="artikel"></textarea>
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
