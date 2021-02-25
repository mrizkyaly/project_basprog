<button type="button" class="btn btn-danger btn-xs" data-toggle="modal"
	data-target="#delete-<?php echo $tools->id_tool ?>">
	<i class="fa fa-trash"></i>Delete
</button>
<div class="modal fade" id="delete-<?php echo $tools->id_tool ?>">
	<div class="modal-dialog">
		<div class="modal-content bg-danger">
			<div class="modal-header">
				<h4 class="modal-title">Hapus User <?php echo $tools->nama ?></h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p>Yakin Ingin Menghapus data ini&hellip;</p>
			</div>
			<div class="modal-footer justify-content-end">
				<a href="<?php echo base_url('admin/tools/delete/'.$tools->id_tool) ?>"
					class="btn btn-outline-light">Delete Data</a>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
