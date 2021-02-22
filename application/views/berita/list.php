<!-- News Section -->
<section id="news">
	<div class="container p-4">
		<h1 class="text-center">Berita</h1>
		<div class="mt-3">
			<div class="garis d-block mx-auto"></div>
		</div>
		<div class="my-4">
			<p class="text-center">Informasi Praktikum Pemrograman Terstruktur
				di Laboratorium Bahasa Pemrograman</p>
		</div>
		<div class="row px-3 mt-4">
			<div class="col-lg-12 p-1">
				<ul class="nav card-filter">
					<li class="nav-item me-1 p-1">
						<a class="nav-link" aria-current="page" href="#" data-filter=".news"><i
								class="fa fa-newspaper-o"></i> Berita</a>
					</li>
					<li class="nav-item me-1 p-1">
						<a class="nav-link" href="#" data-filter=".petruk"><i class="fa fa-code"></i> Pemrograman
							Terstruktur</a>
					</li>
					<li class="nav-item me-1 p-1">
						<a class="nav-link" href="#" data-filter=".strukdat"><i class="fa fa-tasks"></i> Struktur
							Data</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="list row mt-3 justify-content-beetween">
			<?php foreach ($artikel as $artikel) {?>
			<?php if ($artikel->status == "publish") {?>
			<?php if ($artikel->kategori == "berita") {?>
			<div class="col-lg-4 my-2 element-item news">
				<div class="card p-2 pb-0">
					<div class="card-body">
						<img src="<?php echo base_url('assets/upload/image/thumbs/'.$artikel->gambar_artikel) ?>"
							class="card-img-top" alt="...">
						<div class="dflex mt-3">
							<a href="news.html">
								<span class="badge badge-berita">
									<i class="fa fa-newspaper-o"></i> <?php echo $artikel->kategori?>
								</span>
							</a>
						</div>
						<div class="my-3">
							<a href="<?php echo base_url('berita/detail/'.$artikel->slug) ?>">
								<h5 class="card-title"><?php echo $artikel->judul ?></h5>
							</a>
						</div>
						<div class="mb-2">
							<h6 class="card-subtitle mb-2 text-muted"><i class="fa fa-clock-o"></i> Diupdate pada
								<?php echo $artikel->tgl_update ?></h6>
						</div>
						<div class="mb-5">
							<p class="card-text"><?php echo $artikel->deskripsi ?></p>
						</div>
						<hr>
						<div class="penulis mt-3">
							<nav class="nav align-content-center">
								<li class="nav-item me-3 p-0">
									<img src="<?php echo base_url('assets/upload/image/thumbs/'.$artikel->gambar) ?>"
										class="img-thumbnail rounded-circle" alt="" srcset="" width="50px">
								</li>
								<li class="nav-item pt-1">
									<h6 class="p-0"><?php echo $artikel->nama ?></h6>
									<p class="p-0"><?php echo $artikel->jabatan ?></p>
								</li>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<?php }elseif ($artikel->kategori == "pemrograman terstruktur") {?>
			<div class="col-lg-4 my-2 element-item petruk">
				<div class="card p-2 pb-0">
					<div class="card-body">
						<img src="<?php echo base_url('assets/upload/image/thumbs/'.$artikel->gambar_artikel) ?>"
							class="card-img-top" alt="...">
						<div class="dflex mt-3">
							<a href="news.html">
								<span class="badge badge-pt">
									<i class="fa fa-newspaper-o"></i> <?php echo $artikel->kategori?>
								</span>
							</a>
						</div>
						<div class="my-3">
							<a href="<?php echo base_url('berita/detail/'.$artikel->slug) ?>">
								<h5 class="card-title"><?php echo $artikel->judul ?></h5>
							</a>
						</div>
						<div class="mb-2">
							<h6 class="card-subtitle mb-2 text-muted"><i class="fa fa-clock-o"></i> Diupdate pada
								<?php echo $artikel->tgl_update ?></h6>
						</div>
						<div class="mb-5">
							<p class="card-text"><?php echo $artikel->deskripsi ?></p>
						</div>
						<hr>
						<div class="penulis mt-3">
							<nav class="nav align-content-center">
								<li class="nav-item me-3 p-0">
									<img src="<?php echo base_url('assets/upload/image/thumbs/'.$artikel->gambar) ?>"
										class="img-thumbnail rounded-circle" alt="" srcset="" width="50px">
								</li>
								<li class="nav-item pt-1">
									<h6 class="p-0"><?php echo $artikel->nama ?></h6>
									<p class="p-0"><?php echo $artikel->jabatan ?></p>
								</li>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<?php }elseif ($artikel->kategori == "struktur data") {?>
			<div class="col-lg-4 my-2 element-item strukdat">
				<div class="card p-2 pb-0">
					<div class="card-body">
						<img src="<?php echo base_url('assets/upload/image/thumbs/'.$artikel->gambar_artikel) ?>"
							class="card-img-top" alt="...">
						<div class="dflex mt-3">
							<a href="news.html">
								<span class="badge badge-sd">
									<i class="fa fa-newspaper-o"></i> <?php echo $artikel->kategori?>
								</span>
							</a>
						</div>
						<div class="my-3">
							<a href="<?php echo base_url('berita/detail/'.$artikel->slug) ?>">
								<h5 class="card-title"><?php echo $artikel->judul ?></h5>
							</a>
						</div>
						<div class="mb-2">
							<h6 class="card-subtitle mb-2 text-muted"><i class="fa fa-clock-o"></i> Diupdate pada
								<?php echo $artikel->tgl_update ?></h6>
						</div>
						<div class="mb-5">
							<p class="card-text"><?php echo $artikel->deskripsi ?></p>
						</div>
						<hr>
						<div class="penulis mt-3">
							<nav class="nav align-content-center">
								<li class="nav-item me-3 p-0">
									<img src="<?php echo base_url('assets/upload/image/thumbs/'.$artikel->gambar) ?>"
										class="img-thumbnail rounded-circle" alt="" srcset="" width="50px">
								</li>
								<li class="nav-item pt-1">
									<h6 class="p-0"><?php echo $artikel->nama ?></h6>
									<p class="p-0"><?php echo $artikel->jabatan ?></p>
								</li>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<?php }?>
			<?php }?>
			<?php }?>
		</div>
</section>
