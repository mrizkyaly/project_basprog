<!-- User Laboratorium -->
<section id="user">
	<div class="container p-4 text-capitalize">
		<div class="">
			<h1 class="text-center">Asisten Laboratorium</h1>
		</div>
		<div class="mt-3">
			<div class="garis d-block mx-auto"></div>
		</div>
		<div class="my-4">
			<p class="text-center">Berikut adalah daftar asisten laboratorium yang akan membimbing kalian selama
				praktiku berlangsung</p>
		</div>
		<div class="d-flex justify-content-center">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-learn" data-bs-toggle="modal" data-bs-target="#exampleModal">
				<i class="fa fa-phone"></i> Etika Menhubungi
			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content py-2">
						<div class="modal-header p-4">
							<h5 class="modal-title" id="exampleModalLabel">Etika menghubungi Asisten lab</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body p-4">
							<article>
								<ul>
									<li>Praktikan diharap melihat waktu sebelum menghubungi Asisten atau Dosen</li>
									<li>Wajib mengucapkan Salam</li>
									<li>Menggunakan Bahasa Indonesia yang baik dan benar</li>
									<li>Diharapkan tidak menghubungi Asisten dan Dosen via Telepon</li>
									<li>Format penulisan WhatsApp</li>
									<ul>
										<li>Salam</li>
										<li>Nama dan NPM</li>
										<li>Maksud dan Tujuan yang Jelas</li>
										<li>Penutup dan terima kasih</li>
									</ul>
								</ul>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5 p-1 justify-content-center">
			<?php foreach ($user as $user) {?>
			<div class="col-lg-3 col-6 text-center">
				<div class="card pt-4 m-2">
					<img src="<?php echo base_url('assets/upload/image/thumbs/'.$user->gambar) ?>"
						class="img-fluid img-thumbnail rounded-circle mx-auto d-block w-50" alt="...">
					<div class="card-body">
						<h6 class="card-title"><?php echo $user->nama ?></h6>
						<span class="card-subtitle text-muted"><?php echo $user->jabatan ?></span>
						<div class="mt-3">
							<a href="<?php echo $user->whatsapp?>"><i class="fa fa-whatsapp"></i></a>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
	</div>
</section>
