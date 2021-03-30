<!-- Detail News -->
<section id="detail">
	<div class="container px-4">
		<div class="row justify-content-center">
			<div class="col-lg-10 col-12">
				<div class="dflex mb-3">
					<?php if ($artikel->kategori == "berita") {?>
					<a href="<?php base_url('berita')?>">
						<h5>
							<span class="badge badge-berita">
								<i class="far fa-newspaper"></i> <?php echo $artikel->kategori ?>
							</span>
						</h5>
					</a>
					<?php }elseif ($artikel->kategori == "pemrograman terstruktur"){ ?>
					<a href="<?php base_url('berita')?>">
						<h5>
							<span class="badge badge-pt">
								<i class="fa fa-code"></i> <?php echo $artikel->kategori ?>
							</span>
						</h5>
					</a>
					<?php }elseif ($artikel->kategori == "struktur data"){?>
					<a href="<?php base_url('berita')?>">
						<h5>
							<span class="badge badge-sd">
								<i class="fas fa-server"></i> <?php echo $artikel->kategori ?>
							</span>
						</h5>
					</a>
					<?php }?>
				</div>
				<h1 class="mb-3"><?php echo $artikel->judul ?></h1>
				<div class="mb-4">
					<span class="tgl-terbit"><i class="far fa-clock"></i> Diterbitkan
						<?php echo $artikel->tgl_update ?>,
						Diupdate
						<?php echo $artikel->tgl_update ?></span>
				</div>
				<img src="<?php echo base_url('assets/upload/image/'.$artikel->gambar_artikel) ?>"
					class="img-fluid rounded mx-auto d-block w-100" alt="" srcset="">
				<article class="py-3">
					<?php echo $artikel->artikel?>
				</article>
				<div id="disqus_thread"></div>
			</div>
		</div>
	</div>
</section>

<!-- Disquss -->
<script>
	/**
	 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
	 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
	/*
	var disqus_config = function () {
	this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
	this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
	};
	*/
	(function () { // DON'T EDIT BELOW THIS LINE
		var d = document,
			s = d.createElement('script');
		s.src = 'https://lbp-itats.disqus.com/embed.js';
		s.setAttribute('data-timestamp', +new Date());
		(d.head || d.body).appendChild(s);
	})();

</script>

<noscript>Please enable JavaScript to view the
	<a href="https://disqus.com/?ref_noscript">
		comments powered by Disqus.
	</a>
</noscript>
