@extends('back.main')

@section('isi')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
              <img src="img/hero.png" class="img-fluid" alt="Responsive image">
              <form class="mx-1 mx-md-4" action="./hero" method="POST"> @csrf 
                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Gambar</label>
                  <div class="col-sm-10">
                    <input type="text" id="form3Example1c" name="gambar" class="form-control" value="{{ $d->gambar }}" readonly />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Judul</label>
                  <div class="col-sm-10">
                    <input type="text" id="form3Example1c" name="judul" class="form-control" value="{{ $d->judul }}" />
                  </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Sub Judul</label>
                  <div class="col-sm-10">
                   <input type="text" name="subjudul" class="form-control" value="{{ $d->subjudul }}"/>
                    </div>
                </div>
                <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Status</label>
                  <div class="col-sm-10">
                    <input type="text" id="form3Example1c" name="status" class="form-control" value="{{ $d->status }} @if($d->status==1) (Ditampilkan) @else (Disembunyikan) @endif
                    " readonly/>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary float-end">Simpan</button>
              </form>
            </div>
          </div>
    <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022>Ony Novianti</a> All rights reserved.</span>
      </div>
    </footer> 
    <!-- partial -->
  </div>
@endsection