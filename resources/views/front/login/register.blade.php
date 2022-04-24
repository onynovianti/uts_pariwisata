@include('front.section.head') <body>
	<section class="vh-100">
		<div class="container h-100">
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-lg-12 col-xl-11">
					<div class="row justify-content-center">
						<div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
							<p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign Up</p>
							<form class="mx-1 mx-md-4" action="{{ route('register') }}" method="POST"> @csrf <div class="d-flex flex-row align-items-center mb-2">
									<i class="fas fa-user fa-lg me-3 fa-fw"></i>
									<div class="form-outline flex-fill mb-0">
										<input type="text" id="form3Example1c" name="nama" class="form-control" value="{{ old('nama') }}" />
										<label class="form-label" for="form3Example1c">Your Name</label> @error('nama') <div class="error">Nama harus diisi</div> @enderror
									</div>
								</div>
								<div class="d-flex flex-row align-items-center mb-2">
									<i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
									<div class="form-outline flex-fill mb-0">
										<input type="text" id="form3Example3c" name="username" class="form-control" value="{{ old('username') }}" />
										<label class="form-label" for="form3Example3c">Your Username</label> @error('username') <div class="error">Username minimal 5 huruf</div> @enderror
									</div>
								</div>
								<div class="d-flex flex-row align-items-center mb-2">
									<i class="fas fa-lock fa-lg me-3 fa-fw"></i>
									<div class="form-outline flex-fill mb-0">
										<input type="password" id="form3Example4c" name="password" class="form-control" value="{{ old('password') }}" />
										<input type="hidden" name="level" class="form-control" value="0" />
										<label class="form-label" for="form3Example4c">Password</label> @error('password') <div class="error">Password minimal 5 karakter</div> @enderror
									</div>
								</div>
								<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
									<button type="submit" class="btn btn-primary btn-md">Register</button>
								</div>
								<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
									<p class="small fw-bold mt-3 pt-1 mb-0">Already have account? <a href="./" class="link-danger">Login</a>
									</p>
								</div>
							</form>
						</div>
						<div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
							<img src="img/register.svg" class="img-fluid" alt="Sample image">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ======= Footer ======= --> @include('front.section.foot')
</body>
</html>