@extends('back.main2') 

@section('isi') 
<div class="main-panel">
	<div class="content-wrapper">
		<div class="card">
			<div class="card-body">
                <h2>Apakah Anda yakin?</h2>
                <form class="forms-sample mt-5" action="../delete/{{ $d->id }}"> @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Nama</label>
                      <input type="text" name="nama" class="form-control" id="exampleInputName1" placeholder="Nama" value="{{ $d->nama }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" id="exampleInputName1" placeholder="Nama" value="{{ $d->deskripsi }}" disabled>
                      </div>
                    <div class="form-group">
                      <label for="exampleSelectGender">Gender</label>
                      <select class="form-select" aria-label="Default select example" name="kategori" disabled>
                        <option value="1" @if($d->kategori==1) selected @endif>Pantai</option>
                        <option value="2" @if($d->kategori==2) selected @endif>Candi</option>
                        <option value="3" @if($d->kategori==3) selected @endif>Desa Wisata</option>
                        <option value="4" @if($d->kategori==4) selected @endif>Wisata Olahraga</option>
                        <option value="5" @if($d->kategori==5) selected @endif>Kategori Lain</option>
                      </select>
                      </div>
                      <button type="submit" class="btn btn-danger">Hapus</button>
                      <a class="btn btn-light">Cancel</a>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection