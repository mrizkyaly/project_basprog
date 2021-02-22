<!-- Detail News -->
<section id="detail">
	<div class="container px-4">
		<div class="dflex mb-3">
			<?php if ($artikel->kategori == "berita") {?>
			<a href="<?php base_url('berita')?>">
				<h5>
					<span class="badge badge-berita">
						<i class="fa fa-newspaper-o"></i> <?php echo $artikel->kategori ?>
					</span>
				</h5>
			</a>
			<?php }elseif ($artikel->kategori == "pemrograman terstruktur"){ ?>
			<a href="<?php base_url('berita')?>">
				<h5>
					<span class="badge badge-pt">
						<i class="fa fa-newspaper-o"></i> <?php echo $artikel->kategori ?>
					</span>
				</h5>
			</a>
			<?php }elseif ($artikel->kategori == "struktur data"){?>
			<a href="<?php base_url('berita')?>">
				<h5>
					<span class="badge badge-sd">
						<i class="fa fa-newspaper-o"></i> <?php echo $artikel->kategori ?>
					</span>
				</h5>
			</a>
			<?php }?>
		</div>
		<h1 class="mb-3"><?php echo $artikel->judul ?></h1>
		<div class="mb-4">
			<span class="tgl-terbit"><i class="fa fa-clock-o"></i> Diterbitkan <?php echo $artikel->tgl_update ?>,
				Diupdate
				<?php echo $artikel->tgl_update ?></span>
		</div>
		<img src="<?php echo base_url('assets/upload/image/'.$artikel->gambar_artikel) ?>"
			class="img-fluid rounded mx-auto d-block w-100" alt="" srcset="">
		<article class="py-3">
			<?php echo $artikel->artikel?>
		</article>
	</div>
</section>
