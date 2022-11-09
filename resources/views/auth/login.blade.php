

<!DOCTYPE html>

<html lang="en">
     

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Senyumin - Login </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/core/core.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/select2/select2.min.css')}}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <!-- End plugin css for this page -->

    <!-- inject:css --> 
    <link rel="stylesheet" href="{{asset('assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/demo1/style.css')}}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
</head>
<style>
        @media only screen and (max-width: 767px) {
            #logo {
            display: none;
        }
        }
    </style>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center">

				<div class="row w-100 mx-6 auth-page">
					<div class="col-md-8 col-xl-6 mx-auto">
						<div class="card container padding-32">
							<div class="row">
              <div class="col-md-4 pe-md-0 center">
                  <!-- <div class="">
                    <img id="logo" class="img-fluid" src="{{asset('assets/images/login-bg.png')}}" alt="">
                  </div> -->
                </div>
                <!--div class="col-md-8 ps-md-0"-->
                  <div class="auth-form-wrapper px-4 py-3 ">
                    <center><img class="img-fluid mb-2 flex " src="{{asset('assets/images/logo-senyumin.png')}}" alt="" srcset=""></center>
                    @if(Session::has('error'))
                        <div class="alert alert-warning">{{Session::get('error')}}</div>
                    @endif 
                    <h5 class="text-muted fw-normal mb-4 text-center">Selamat Datang! <br> Silahkan masuk untuk melanjutkan</h5>
                    <form class="forms-sample" action="{{route('login')}}" method="POST"> 
                        @csrf
                      <div class="mb-3">
                        <label for="userEmail" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" id="userEmail" placeholder="email@mail.com">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="userPassword" class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="userPassword" autocomplete="current-password" placeholder="Masukkan Kata Sandi">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <div class="form-check mb-2">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                          Lupa Kata Sandi?
                        </label>
                      </div>
                      <br>
                      <div>
                        <button type="submit" class="btn btn-primary me-2 mb-2 mb-md-0 text-white container">
                          Masuk
                        </button>
                      </div>
                      <a href="/register" class="d-block mt-3 text-muted">Belum punya akun? 
                        Daftar</a>
                    </form>
                  </div>
                  <div>
                 <!-- Add icon library -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                <!-- Add font awesome icons -->
                <a href="#" class="fa fa-facebook"></a>
                
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-twitter"></a>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{asset('assets/vendors/feather-icons/feather.min.js')}}"></script>
	<script src="{{asset('assets/js/template.js')}}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
	<!-- End custom js for this page -->
  <script type="text/javascript"> 
  	$(document).ready(function(){		
		$('#exampleCheck1').click(function(){
			if($(this).is(':checked')){
				$('#userPassword').attr('type','text');
			}else{
				$('#userPassword').attr('type','password');
			}
		});
  
    
	});
  </script>

</body>
</html> 