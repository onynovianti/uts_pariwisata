@extends('back.main') @section('isi') <div class="main-panel">
	<div class="content-wrapper">
		<div class="card">
			<div class="card-body">
        {{-- MODAL  --}}
				<table class="table table-hover">
					<thead>
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Name</th>
							<th scope="col">Email</th>
							<th scope="col">Password</th>
						</tr>
					</thead>
					<tbody> 
						@foreach ($data as $d) 
						<tr>
							<th scope="row">{{ $d->id }}</th>
							<td>{{ $d->name }}</td>
							<td>{{ $d->email }}</td>
							<td>{{ $d->password }}</td>
						</tr> 
						@endforeach 
					</tbody>
				</table>
				<!-- content-wrapper ends -->
				<!-- partial:partials/_footer.html -->
			</div>
		</div>
		<footer class="footer">
			<div class="d-sm-flex justify-content-center justify-content-sm-between">
				<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022>Ony Novianti </a> All rights reserved. </span>
			</div>
		</footer>
		<!-- partial -->
	</div> @endsection