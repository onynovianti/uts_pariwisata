@extends('front.main')

@section('isi')
<section id="hero-animated" class="hero-animated d-flex align-items-center">
	<div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
		<img src="img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated">
		<h2>{{ $hero->judul }}<span> WisataMalang</span>
		</h2>
		<p>{{ $hero->subjudul }}</p>
		<div class="d-flex">
			<a href="{{ route('login') }}"  class="btn-get-started scrollto">Login</a>
			<a href="https://youtu.be/XETw-wM3eCU" class="glightbox btn-watch-video d-flex align-items-center">
				<i class="bi bi-play-circle"></i>
				<span>Lihat Video</span>
			</a>
		</div>
	</div>
</section>
@endsection