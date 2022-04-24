@extends('front.main')

@section('isi')
<section id="about" class="about mt-5">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Potensi Wisata</h2>
        <p>Potensi Wisata yang terdapat di seluruh kecamatan di Kabupaten Malang</p>
      </div>

      <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-5">
          <div class="about-img">
            <img src="img/about.jpg" class="img-fluid" alt="">
          </div>
        </div>

        <div class="col-lg-7">
          <h3 class="pt-0 pt-lg-5">Potensi Wisata di Kabupaten Malang berdasarkan kategori-kategori berikut.</h3>

          <!-- Tabs -->
          <ul class="nav nav-pills mb-3">
            <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Pantai</a></li>
            <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Candi</a></li>
            <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Desa Wisata</a></li>
            <li><a class="nav-link" data-bs-toggle="pill" href="#tab4">Lainnya</a></li>
          </ul><!-- End Tabs -->

          <!-- Tab Content -->
          <div class="tab-content">

            <div class="tab-pane fade show active" id="tab1">

              <p class="fst-italic">Berikut adalah daftar pantai yang ada di Kabupaten Malang</p>

              @foreach ($data1 as $d1)
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>{{ $d1->nama }}</h4>
              </div>
              <p>{{ $d1->deskripsi }}</p>
              @endforeach
            </div>
              <!-- End Tab 1 Content -->

            <div class="tab-pane fade show" id="tab2">
              <p class="fst-italic">Berikut adalah daftar candi yang ada di Kabupaten Malang</p>
              @foreach ($data2 as $d2)
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>{{ $d2->nama }}</h4>
              </div>
              <p>{{ $d2->deskripsi }}</p>
              @endforeach
            </div><!-- End Tab 2 Content -->

            <div class="tab-pane fade show" id="tab3">

              <p class="fst-italic">Berikut adalah daftar desa wisata yang ada di Kabupaten Malang</p>
              @foreach ($data3 as $d3)
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>{{ $d3->nama }}</h4>
              </div>
              <p>{{ $d3->deskripsi }}</p>
              @endforeach
            </div><!-- End Tab 2 Content -->

            <div class="tab-pane fade show" id="tab4">

              <p class="fst-italic">Berikut adalah potensi wisata lain yang ada di Kabupaten Malang</p>
              @foreach ($data5 as $d5)
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>{{ $d5->nama }}</h4>
              </div>
              <p>{{ $d5->deskripsi }}</p>
              @endforeach
            </div><!-- End Tab 2 Content -->

          </div>

        </div>

      </div>

    </div>
  </section>
@endsection
