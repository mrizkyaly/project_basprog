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
			echo form_open_multipart(base_url('admin/tools/edit/'.$tools->id_tool), 'class="form-horizontal"');
		?>
		<div class="row d-flex">
			<div class="col-lg-6 col-12">
				<div class="form-group">
					<label class="control-label">Nama</label>
					<div class="">
						<input type="text" name="nama" class="form-control" placeholder=""
							value="<?php echo $tools->nama ?>" required>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="form-group">
					<label class="control-label">Link</label>
					<div class="">
						<input type="text" name="link" class="form-control" placeholder=""
							value="<?php echo $tools->link ?>" required>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="form-group">
					<label class="control-label">Status</label>
					<div class="">
						<select name="status" class="form-control">
							<option value="publish">publish</option>
							<option value="draft" <?php if ($tools->status=="draft") { echo "selected";} ?>>draft
							</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="form-group">
					<label class="control-label">logo</label>
					<div class="custom-file">
						<input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
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
