<!-- Tools Laboratorium -->
<section id="tools">
	<div class="container p-4 text-capitalize">
		<div class="">
			<h1 class="text-center">Alat & Berkas</h1>
		</div>
		<div class="mt-3">
			<div class="garis d-block mx-auto"></div>
		</div>
		<div class="my-4">
			<p class="text-center">Berikut adalah daftar Berkas dan alat yang akan kalian gunakan pada saat
				praktikum berlangsung</p>
		</div>
		<div class="alat row mt-5 justify-content-start">
			<div class="mb-3">
				<h3>Peralatan Praktikum</h3>
			</div>
			<?php foreach ($alat as $alat) {?>
			<?php if ($alat->status == "publish") {?>
			<div class="col-lg-3 col-6 text-center">
				<div class="card pt-4 my-2 w-100">
					<img src="<?php echo base_url('assets/upload/image/thumbs/'.$alat->logo) ?>"
						class="img-fluid mx-auto d-block w-25" alt="<?php echo $alat->nama?>">
					<div class="card-body">
						<h6 class="card-title"><?php echo $alat->nama ?> </h6>
						<div class="mt-3">
							<a href="<?php echo $alat->link ?>" class="text-lowercase"></i>Download</a>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
			<?php }?>
		</div>
		<div class="row mt-5">
			<div class="mb-4">
				<h3>Berkas Praktikum</h3>
			</div>
			<div class="row">
				<div class="card card-table card-body element-item petruk w-100 rounded-3">
					<table class="table table-responsive table-borderless table-striped">
						<thead>
							<tr>
								<th>BERKAS</th>
								<th>KATEGORI</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($berkas as $berkas) {?>
							<?php if ($berkas->status == "publish") {?>
							<?php if ($berkas->kategori == "pemrograman terstruktur") {?>
							<tr>
								<td><a href="<?php echo $berkas->link?>"><?php echo $berkas->nama ?></a></td>
								<td>
									<span class="badge badge-pt">
										<i class="fa fa-code"></i> <?php echo $berkas->kategori ?>
									</span>
								</td>
							</tr>
							<?php }elseif ($berkas->kategori == "struktur data") {?>
							<tr>
								<td><a href="<?php echo $berkas->link?>"><?php echo $berkas->nama ?></a></td>
								<td>
									<span class="badge badge-sd">
										<i class="fa fa-tasks"></i> <?php echo $berkas->kategori ?>
									</span>
								</td>
							</tr>
							<?php }?>
							<?php }?>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
