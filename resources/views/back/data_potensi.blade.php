@extends('back.main') @section('isi') <div class="main-panel">
	<div class="content-wrapper">
		<div class="card">
			<div class="card-body">
                @if(session()->has('success')) 
                <div class="alert alert-success alert-dismissible fade show" role="alert"> Data Anda berhasil disimpan <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div> @endif 
                @error('nama') <div class="alert alert-danger alert-dismissible fade show" role="alert"> Nama harus diisi <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div> @enderror 
                @error('deskripsi') <div class="alert alert-danger alert-dismissible fade show" role="alert"> Deskripsi minimal 5 huruf <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div> @enderror
                @error('kategori') <div class="alert alert-danger alert-dismissible fade show" role="alert"> Karakter harus diisi <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div> @enderror 
                {{-- MODAL CREATE --}}
                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
					<i class="icon-plus menu-icon"></i>
				</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Data Potensi Wisata</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form class="mx-1 mx-md-4" action="./datapotensi" method="POST"> @csrf 
                                    <div class="d-flex flex-row align-items-center mb-2">
										<i class="fas fa-user fa-lg me-3 fa-fw"></i>
										<div class="form-outline flex-fill mb-0">
											<input type="text" id="form3Example1c" name="nama" class="form-control"/>
											<label class="form-label" for="form3Example1c">Nama</label>
										</div>
									</div>
									<div class="d-flex flex-row align-items-center mb-2">
										<i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
										<div class="form-outline flex-fill mb-0">
											<input type="text" id="form3Example3c" name="deskripsi" class="form-control" value="{{ old('username') }}" />
											<label class="form-label" for="form3Example3c">Deskripsi</label>
										</div>
									</div>
									<div class="d-flex flex-row align-items-center mb-2">
										<i class="fas fa-lock fa-lg me-3 fa-fw"></i>
										<div class="form-outline flex-fill mb-0">
											<select class="form-select" aria-label="Default select example" name="kategori">
                                                <option selected>Pilih Kategori</option>
                                                <option value="1">Pantai</option>
                                                <option value="2">Candi</option>
                                                <option value="3">Desa Wisata</option>
                                                <option value="4">Wisata Olahraga</option>
                                                <option value="5">Kategori Lain</option>
                                              </select>
											<label class="form-label" for="form3Example4c">Kategori</label>
										</div>
									</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
								<button type="submit" class="btn btn-primary">Simpan</button>
								</form>
							</div>
						</div>
					</div>
				</div>
                <table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Nama</th>
							<th class="w-10">Deskripsi</th>
							<th scope="col">Kategori</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
                        @foreach ($data as $d) 
						<tr>
							<th scope="row">{{ $d->id }}</th>
							<td>{{ $d->nama }}</td>
							<td>{{ Str::limit($d->deskripsi, 60, '...') }}</td>
							<td>{{ $d->kategori }}</td>
							<td> 
								<a type="button" href="/edit/{{ $d->id }}" class="btn btn-success btn-sm">Edit</a>
								<a type="button" href="/hapus/{{ $d->id }}" class="btn btn-danger btn-sm">Delete</a>
							</td>
						</tr> 
						@endforeach 
					</tbody>
				</table>
            </div>
		</div>
		<footer class="footer">
			<div class="d-sm-flex justify-content-center justify-content-sm-between">
				<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022>Ony Novianti </a> All rights reserved. </span>
			</div>
		</footer>
		<!-- partial -->
	</div> @endsection