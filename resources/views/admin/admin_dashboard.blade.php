{{-- // Master Page --}}

<!doctype html>
<html lang="en">

         @include('admin.layouts.head_link')

<body>
	<!--wrapper-->
	<div class="wrapper">

		<!--sidebar wrapper -->
		  @include('admin.layouts.sidebar')<!--end sidebar wrapper -->
		

		<!--start header -->
          @include('admin.layouts.header')<!--end header -->
		


		<!--start page wrapper -->
		<div class="page-wrapper">
			@yield('admin')
		<div/><!--end page wrapper -->
		



		<!--start overlay-->
		<div class="overlay toggle-icon"></div><!--end overlay-->
		


		<!--Start Back To Top Button--> 
		<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a><!--End Back To Top Button-->
		

		
		<!--start footer -->
           @include('admin.layouts.footer')<!--end footer-->
		

	</div><!--end wrapper-->
	

	@include('admin.layouts.footer_script')


	


</body>

</html>