@include('front.section.head') <body>
	<section class="vh-100">
		<div class="container-fluid h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-md-9 col-lg-6 col-xl-5">
					<img src="img/login.svg" class="img-fluid" alt="Sample image">
				</div>
				<div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1"> @if(session()->has('success')) <div class="alert alert-success alert-dismissible fade show" role="alert"> Data Anda berhasil disimpan <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div> @endif <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign In</p>
					<form action="./login" method="POST"> @csrf
						<!-- Email input -->
						<div class="form-outline mb-3 ">
							<input type="text" id="form3Example3" name="username" class="form-control form-control-md" placeholder="Masukkan username" />
							<label class="form-label" for="form3Example3">Username</label>
						</div>
						<!-- Password input -->
						<div class="form-outline mb-3">
							<input type="password" id="form3Example4" name="password" class="form-control form-control-md" placeholder="Enter password" />
							<label class="form-label" for="form3Example4">Password</label>
						</div>
						<div class="text-center text-lg-start mt-4 pt-2">
							<a type="submit" class="btn btn-primary btn-md" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</a>
							<p class="small fw-bold mt-3 pt-1 mb-0">Don't have an account? <a href="./register" class="link-danger">Register</a>
							</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- ======= Footer ======= --> @include('front.section.foot')
</body>
</html>