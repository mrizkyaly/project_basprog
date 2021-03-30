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
			echo form_open_multipart(base_url('admin/artikel/edit/'.$artikel->id_artikel), 'class="form-horizontal"');
		?>
		<div class="row">
			<div class="col-12">
				<h6 class="font-weight-bold mr-5">
					Status :
					<?php if ($artikel->status == "publish") {?>
					<span class="badge badge-primary"><?php echo $artikel->status ?></span>
					<?php 
					}elseif ($artikel->status == "draft") {?>
					<span class="badge badge-secondary"><?php echo $artikel->status ?></span>
					<?php }?>
					<a href="<?php echo base_url('berita/detail/'.$artikel->slug)?>"><span
							class="badge badge-success"><i class="fas fa-eye"></i> Lihat Artikel</span></a>
				</h6>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="control-label">Judul Artikel</label>
					<div class="">
						<input type="text" name="judul" class="form-control" placeholder=""
							value="<?php echo $artikel->judul ?>" required>
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
							<option value="pemrograman terstruktur"
								<?php if ($artikel->kategori=="pemrograman terstruktur") { echo "selected";} ?>>
								Pemrograman Terstruktur</option>
							<option value="struktur data"
								<?php if ($artikel->kategori=="struktur data") { echo "selected";} ?>>
								Struktur Data</option>
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
							<option value="draft" <?php if ($artikel->status=="draft") { echo "selected";} ?>>draft
							</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="control-label">Deskripsi</label>
					<textarea class="form-control" rows="3" name="deskripsi"
						placeholder=""><?php echo $artikel->deskripsi ?></textarea>
				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					<label class="control-label">Isi Artikel</label>
					<textarea id="full-featured-non-premium" rows=" 35" name="artikel"
						value=""><?php echo $artikel->artikel ?></textarea>
				</div>
			</div>
			<div class="col-12 mt-2">
				<button class="btn btn-success btn-md px-5 btn-block" name="submit" type="submit">
					<i class="fa fa-save"></i> Simpan
				</button>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>
