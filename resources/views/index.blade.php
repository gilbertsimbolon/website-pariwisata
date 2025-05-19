<!doctype html>
<html lang="en" style="scroll-behavior: smooth">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('tour/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('tour/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('tour/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('tour/css/jquery.fancybox.min.css') }}">
	<link rel="stylesheet" href="{{ asset('tour/fonts/icomoon/style.css') }}">
	<link rel="stylesheet" href="{{ asset('tour/fonts/flaticon/font/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('tour/css/daterangepicker.css') }}">
	<link rel="stylesheet" href="{{ asset('tour/css/aos.css') }}">
	<link rel="stylesheet" href="{{ asset('tour/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<title>Dinas Kebudayaan dan Pariwisata Kabupaten Minahasa</title>



</head>

<body style="">


	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="site-navigation">
				<a href="index.html" class="logo m-0">DiKePa Minahasa<span class="text-primary">.</span></a>

				<ul class="js-clone-nav d-none d-lg-inline-block text-left site-menu float-right">
					<li class="active"><a href="/">Home</a></li>
					<li><a href="#tempat-wisata">Destinasi</a></li>
					<li><a href="#about">Tentang Kami</a></li>
					<li><a href="#contact">Hubungi Kami</a></li>
				</ul>

				<a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
					<span></span>
				</a>

			</div>
		</div>
	</nav>


	<div class="hero">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="intro-wrap">
						<h1 class="mb-5"><span class="d-block">Nikmati Liburanmu</span> Di <span class="typed-words"></span></h1>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="slides">
						<img src="{{ asset('img/gunung klabat.webp') }}" alt="Image" class="img-fluid active">
						<img src="{{ asset('img/pantai pulsan.webp') }}" alt="Image" class="img-fluid">
						<img src="{{ asset('img/pantai paal.jpg') }}" alt="Image" class="img-fluid">
						<img src="{{ asset('img/gunung klabat.webp') }}" alt="Image" class="img-fluid">
						<img src="{{ asset('img/pantai pulisan.webp') }}" alt="Image" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="about" class="untree_co-section">
		<div class="container">
			<div class="row mb-5 justify-content-center">
				<div class="col-lg-6 text-center">
					<h2 class="section-title text-center mb-3">Pelayanan Kami</h2>
					<p>Dinas Kebudayaan dan Pariwisata Kabupaten Minahasa bertugas mengelola, mempromosikan, dan melestarikan warisan budaya
                    serta pengembangan destinasi pariwisata di 25 kecamatan yang ada.</p>
				</div>
			</div>
			<div class="row align-items-stretch">
				<div class="col-lg-4 order-lg-1">
					<div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('{{ asset('img/kawasaran.jpg') }}');"></div></div></div>
				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="fas fa-bullhorn display-4 text-primary"></span>
							<h3 class="mt-2">Promosi Destinasi Wisata</h3>
							<p class="mb-0">Kami aktif mempromosikan destinasi unggulan Minahasa melalui media digital, event pariwisata, dan kerja sama antar
                            daerah.</p>
						</div>
					</div>

					<div class="feature-1 ">
						<div class="align-self-center">
							<span class="fas fa-users display-4 text-primary"></span>
							<h3 class="mt-2">Pemberdayaan Komunitas Wisata</h3>
							<p class="mb-0">Pelatihan dan dukungan terhadap masyarakat lokal dalam mengelola potensi pariwisata berbasis budaya.</p>
						</div>
					</div>

				</div>

				<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="fas fa-landmark display-4 text-primary"></span>
							<h3 class="mt-2">Pelestarian Warisan Budaya</h3>
							<p class="mb-0">Melindungi, mendata, dan memfasilitasi pelestarian budaya lokal seperti rumah adat, tarian, dan situs sejarah.</p>
						</div>
					</div>

					<div class="feature-1 d-md-flex">
						<div class="align-self-center">
							<span class="fas fa-phone display-4 text-primary"></span>
							<h3 class="mt-2">Layanan Informasi Publik</h3>
							<p class="mb-0">Memberikan informasi terkait destinasi, acara, dan layanan pariwisata di Minahasa melalui sambungan telepon.</p>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>


	<div id="tempat-wisata" class="untree_co-section">
		<div class="container">
			<div class="row text-center justify-content-center mb-5">
				<div class="col-lg-7"><h2 class="section-title text-center">Destinasi Populer</h2></div>
			</div>

            <div class="owl-carousel owl-3-slider">
                @foreach ($destinasi as $item)
                <div class="item">
                    <a class="media-thumb" href="{{ asset('storage/' . $item->gambar) }}" data-fancybox="gallery">
                        <div class="media-text">
                            <h3>{{ $item->nama_tempat }}</h3>
                            <span class="location">{{ $item->lokasi }}</span>
                        </div>
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="Image" class="img-fluid">
                    </a>
                </div>
                @endforeach
            </div>

		</div>
	</div>


	<div class="untree_co-section testimonial-section mt-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7 text-center">
					<h2 class="section-title text-center mb-5">Testimoni</h2>

					<div class="owl-single owl-carousel no-nav">
						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="{{asset('img/yulius.webp')}}" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Adam Aderson</h3>
							<blockquote>
								<p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="{{ asset('tour/images/person_3.jpg') }}" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Lukas Devlin</h3>
							<blockquote>
								<p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
						</div>

						<div class="testimonial mx-auto">
							<figure class="img-wrap">
								<img src="{{ asset('tour/images/person_4.jpg') }}" alt="Image" class="img-fluid">
							</figure>
							<h3 class="name">Kayla Bryant</h3>
							<blockquote>
								<p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>


	{{-- <div class="untree_co-section">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-6">
					<h2 class="section-title text-center mb-3">Special Offers &amp; Discounts</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<a href="#" class="d-block mb-3"><img src="images/hero-slider-1.jpg" alt="Image" class="img-fluid"></a>
						<span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3"></span>
							<span>Italy</span>
						</span>
						<div class="d-flex align-items-center">
							<div>
								<h3><a href="#">Rialto Mountains</a></h3>
								<div class="price ml-auto">
									<span>$520.00</span>
								</div>
							</div>

						</div>

					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<a href="#" class="d-block mb-3"><img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid"></a>
						<span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3"></span>
							<span>United States</span>
						</span>
						<div class="d-flex align-items-center">
							<div>
								<h3><a href="#">San Francisco</a></h3>
								<div class="price ml-auto">
									<span>$520.00</span>
								</div>
							</div>

						</div>

					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<a href="#" class="d-block mb-3"><img src="images/hero-slider-3.jpg" alt="Image" class="img-fluid"></a>
						<span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3"></span>
							<span>Malaysia</span>
						</span>
						<div class="d-flex align-items-center">
							<div>
								<h3><a href="#">Perhentian Islands</a></h3>
								<div class="price ml-auto">
									<span>$750.00</span>
								</div>
							</div>

						</div>

					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
					<div class="media-1">
						<a href="#" class="d-block mb-3"><img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid"></a>

						<span class="d-flex align-items-center loc mb-2">
							<span class="icon-room mr-3"></span>
							<span>Switzerland</span>
						</span>

						<div class="d-flex align-items-center">
							<div>
								<h3><a href="#">Lake Thun</a></h3>
								<div class="price ml-auto">
									<span>$520.00</span>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div> --}}

	{{-- <div class="untree_co-section">
		<div class="container">
			<div class="row justify-content-between align-items-center">

				<div class="col-lg-6">
					<figure class="img-play-video">
						<a id="play-video" class="video-play-button" href="https://www.youtube.com/watch?v=mwtbEGNABWU" data-fancybox>
							<span></span>
						</a>
						<img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid rounded-20">
					</figure>
				</div>

				<div class="col-lg-5">
					<h2 class="section-title text-left mb-4">Take a look at Tour Video</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

					<p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>

					<ul class="list-unstyled two-col clearfix">
						<li>Outdoor recreation activities</li>
						<li>Airlines</li>
						<li>Car Rentals</li>
						<li>Cruise Lines</li>
						<li>Hotels</li>
						<li>Railways</li>
						<li>Travel Insurance</li>
						<li>Package Tours</li>
						<li>Insurance</li>
						<li>Guide Books</li>
					</ul>

					<p><a href="#" class="btn btn-primary">Get Started</a></p>


				</div>
			</div>
		</div>
	</div> --}}



	{{-- <div class="py-5 cta-section">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<h2 class="mb-2 text-white">Lets you Explore the Best. Contact Us Now</h2>
					<p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, fugit?</p>
					<p class="mb-0"><a href="booking.html" class="btn btn-outline-white text-white btn-md font-weight-bold">Get in touch</a></p>
				</div>
			</div>
		</div>
	</div> --}}

	<div id="contact" class="site-footer" style="background-color: #E52020">
		<div class="inner first">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">Tentang Perjalanan</h3>
							<p>Dinas Pariwisata Daerah Provinsi Sulawesi Utara memiliki tugas membantu Gubernur dalam melaksanakan urusan pemerintahan
                            dan tugas pembantuan di bidang pariwisata. Mereka juga bertanggung jawab untuk mempromosikan potensi pariwisata di
                            wilayah Sulawesi Utara, termasuk di Kabupaten Minahasa.</p>
						</div>
						<div class="widget">
							<ul class="list-unstyled social">
								<li><a href="#"><span class="icon-twitter"></span></a></li>
								<li><a href="#"><span class="icon-instagram"></span></a></li>
								<li><a href="#"><span class="icon-facebook"></span></a></li>
								<li><a href="#"><span class="icon-linkedin"></span></a></li>
								<li><a href="#"><span class="icon-dribbble"></span></a></li>
								<li><a href="#"><span class="icon-pinterest"></span></a></li>
								<li><a href="#"><span class="icon-apple"></span></a></li>
								<li><a href="#"><span class="icon-google"></span></a></li>
							</ul>
						</div>
					</div>
					{{-- <div class="col-md-6 col-lg-2 pl-lg-5">
						<div class="widget">
							<h3 class="heading">Pages</h3>
							<ul class="links list-unstyled">
								<li><a href="#">Blog</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-2">
						<div class="widget">
							<h3 class="heading">Resources</h3>
							<ul class="links list-unstyled">
								<li><a href="#">Blog</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
					</div> --}}
					<div class="col-md-6 col-lg-4">
						<div class="widget">
							<h3 class="heading">Kontak</h3>
							<ul class="list-unstyled quick-info links">
								<li class="phone"><a href="#">Jam Buka : 08.:00 WITA - 16:30 WITA</a></li>
								<li class="address"><a href="#">8W77+G96, Kembuan, Kec. Tondano Utara, Kabupaten Minahasa, Sulawesi Utara</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>



		<div class="inner dark">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 mb-3 mb-md-0 mx-auto">
						<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Made by<a href="https://instagram.com/gilbertsmbln" class="link-highlight"> JGAS2005</a>
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>

	{{-- <div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div> --}}

	<script src="{{ asset('tour/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('tour/js/popper.min.js') }}"></script>
	<script src="{{ asset('tour/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('tour/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('tour/js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('tour/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('tour/js/jquery.fancybox.min.js') }}"></script>
	<script src="{{ asset('tour/js/aos.js') }}"></script>
	<script src="{{ asset('tour/js/moment.min.js') }}"></script>
	<script src="{{ asset('tour/js/daterangepicker.js') }}"></script>

	<script src="{{ asset('tour/js/typed.js') }}"></script>
	<script>
		$(function() {
			var slides = $('.slides'),
			images = slides.find('img');

			images.each(function(i) {
				$(this).attr('data-id', i + 1);
			})

			var typed = new Typed('.typed-words', {
				strings: ["Minahasa."," Minahasa Selatan."," Minahasa Utara.", " Minahasa Tenggara."],
				typeSpeed: 80,
				backSpeed: 80,
				backDelay: 4000,
				startDelay: 1000,
				loop: true,
				showCursor: true,
				preStringTyped: (arrayPos, self) => {
					arrayPos++;
					console.log(arrayPos);
					$('.slides img').removeClass('active');
					$('.slides img[data-id="'+arrayPos+'"]').addClass('active');
				}

			});
		})
	</script>


    <script src="{{ asset('tour/js/custom.js') }}"></script>

</body>

</html>
