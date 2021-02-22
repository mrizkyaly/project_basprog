<!-- Jumbotron -->
<section id="jumbotron">
	<div class="container">
		<div class="row px-2">
			<div class="col-lg-6 py-3">
				<div class="card p-4">
					<div class="card-body text-capitalize">
						<div class="mb-3">
							<h5>#BelajarPemrograman</h5>
						</div>
						<div class="mb-3">
							<h2 class="">Selamat datang di laboratorium bahasa
								pemrogramn</h2>
						</div>
						<div class="mb-3">
							<p><?php echo $deskripsi?></p>
						</div>
						<div class="mt-4">
							<a href="<?php echo base_url('berita') ?>"><button type="button"
									class="btn btn-learn px-5">Belajar
									Sekarang</button></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 py-3">
				<img src="<?php echo base_url() ?>assets/client/assets/img/ilustration-jumbotorn.jpg"
					class="mx-auto d-block w-100" alt="...">
			</div>
		</div>
	</div>
</section>

<section id="course">
	<div class="container text-capitalize">
		<div class="mt-5">
			<h3 class="text-center te">Apa yang akan kalian pelajari</h3>
		</div>
		<div class="mt-4 mb-5">
			<div class="garis d-block mx-auto"></div>
		</div>
		<div class="row p-3 justify-content-center">
			<div class="card m-3">
				<div class="card-body p-4 codec">
					<img src="<?php echo base_url() ?>assets/client/assets/img/svg/code_yellow.svg"
						class="img-fluid mb-3" alt="...">
					<h5 class="card-title">C++</h5>
					<p class="card-text">Kalian akan belajar mengenai pemrograman C++ dari awal</p>
				</div>
			</div>
			<div class="card m-3">
				<div class="card-body p-4 petruk">
					<img src="<?php echo base_url() ?>assets/client/assets/img/svg/c++_yellow.svg"
						class="img-fluid mb-3" alt="...">
					<h5 class="card-title">Pemrograman Terstruktur</h5>
					<p class="card-text">Kalian akan belajar mengenai pemrograman yan terstruktur menggunakan bahaasa
						c++</p>
				</div>
			</div>
			<div class="card m-3">
				<div class="card-body p-4 strukdat">
					<img src="<?php echo base_url() ?>assets/client/assets/img/svg/sd_yellow.svg" class="img-fluid mb-3"
						alt="...">
					<h5 class="card-title">Struktur Data</h5>
					<p class="card-text">Kalian akan belajar mengenai struktur data menggunakan bahaasa c++</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- teamwork -->
<section id="teamwork">
	<div class="container">
		<div class="row text-capitalize">
			<div class="col-lg-6 ">
				<img src="<?php echo base_url() ?>assets/client/assets/img/gambar2.png" class="mx-auto d-block w-100"
					alt="...">
			</div>
			<div class="col-lg-6">
				<div class="card p-4">
					<div class="card-body">
						<div class="mb-3">
							<h5>#kerjasamatim</h5>
						</div>
						<div class="mb-3">
							<h2>Kita bekerja sama sebagai tim</h2>
						</div>
						<div class="mb-3">
							<p>Kita disini bekerja sebagai tim untuk mengajari kalian tentang bahasa pemrograman C++</p>
						</div>
						<div class="mt-4">
							<a href="<?php echo base_url('berita') ?>"><button type="button"
									class="btn btn-learn px-5">Belajar
									Sekarang</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Join Us -->
<section id="joinus">
	<div class="container px-5">
		<div class="row justify-content-center">
			<div class="card mb-5  p-3">
				<div class="card-body text-center text-capitalize">
					<h5 class="card-title mb-3">Mau jadi asisten lab basprog ?</h5>
					<div class="mb-4">
						<div class="garis d-block mx-auto"></div>
					</div>
					<p class="card-text mb-4 px-4">klik tombol dibawah ini yak untuk info mengenai pendaftaran
						asisten
						lab bahasa pemrograman lebih lanjut ya</p>
					<a href="<?php echo $daftarAslab ?>" class="btn btn-join px-5 py-2">Join yuk</a>
				</div>
			</div>
		</div>
	</div>
</section>
