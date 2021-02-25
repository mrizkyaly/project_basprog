<body>
	<!-- Header Section -->
	<header>
		<nav class="navbar navbar-expand-lg navbar-light fixed-top p-2 text-capitalize">
			<div class="container">
				<a class="navbar-brand" href="<?php echo base_url() ?>">
					<img src="<?php echo base_url() ?>assets/client/assets/img/svg/lbp-blue.svg" alt="" width="70"
						height="60">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ms-4 me-auto">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="<?php echo base_url() ?>">Beranda</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="<?php echo base_url('berita')?>">Berita</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="news.html" id="navbarDropdown" role="button"
								data-bs-toggle="dropdown" aria-expanded="false">
								laboratorium
							</a>
							<ul class="dropdown-menu py-3" aria-labelledby="navbarDropdown">
								<li>
									<a class="dropdown-item px-4 py-3" href="<?php echo base_url('asistenlab')?>">
										<i class="fa fa-id-card"></i></i> Asisten Laboratorium
									</a>
								</li>
								<li>
									<a class="dropdown-item px-4 py-3" href="<?php echo base_url('tools')?>">
										<i class="fa fa-archive"></i></i> Alat & Berkas
									</a>
								</li>
							</ul>
						</li>
					</ul>
					<form class="d-flex">
						<a href="https://labinformatika.itats.ac.id/" class="btn btn-join-praktikum">Daftar Praktikum
							!</a>
					</form>
				</div>
			</div>
		</nav>
	</header>
