<header id="header" class="header fixed-top" data-scrollto-offset="0">
	<div class="container-fluid d-flex align-items-center justify-content-between">
		<a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
			<!-- Uncomment the line below if you also wish to use an image logo -->
			<!-- <img src="assets/img/logo.png" alt=""> -->
			<h1>Wisata <span>Malang</span>
			</h1>
		</a>
		<nav id="navbar" class="navbar">
			<ul>
				<li>
					<a href="./" @if($title =='Home') class="active" @endif>Home</a>
				</li>
				<li>
					<a href="./potensiwisata" @if($title =='Potensi Wisata') class="active" @endif>Potensi Wisata</a>
				</li>
				<li>
					<a href="./wisataolahraga" @if($title =='Wisata Olahraga') class="active" @endif>Wisata Olahraga</a>
				</li>
				<li>
					<a href="./petapariwisata" @if($title =='Peta Pariwisata') class="active" @endif>Peta Pariwisata</a>
				</li>
				{{-- <li class="dropdown">
					<a href="#">
						<span>Daftar Data</span>
						<i class="bi bi-chevron-down dropdown-indicator"></i>
					</a>
					<ul>
						<li class="disabled">
							<a href="./daftarhotel">Daftar Hotel</a>
						</li>
						<li>
							<a href="index-2.html">Daftar Money Changer </a>
						</li>
						<li>
							<a href="index-4.html">Daftar Transportasi</a>
						</li>
						<li>
							<a href="index-4.html">Kalender Event</a>
						</li>
					</ul>
				</li> --}}
			</ul>
			<i class="bi bi-list mobile-nav-toggle d-none"></i>
		</nav>
		<!-- .navbar -->
		@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
						<a href="{{ route('login') }}"  class="btn-get-started scrollto">Login</a>
                        |
                        @if (Route::has('register'))
						<a href="{{ route('register') }}"  class="btn-get-started scrollto">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
	</div>
</header>