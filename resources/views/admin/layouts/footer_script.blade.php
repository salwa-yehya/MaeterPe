	<!-- Bootstrap JS --> 
	<script src="{{asset('AdminBackend/assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('AdminBackend/assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('AdminBackend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('AdminBackend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('AdminBackend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('AdminBackend/assets/plugins/chartjs/js/Chart.min.js')}}"></script>
	<script src="{{asset('AdminBackend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('AdminBackend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('AdminBackend/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
	<script src="{{asset('AdminBackend/assets/plugins/sparkline-charts/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('AdminBackend/assets/plugins/jquery-knob/excanvas.js')}}"></script>
	<script src="{{asset('AdminBackend/assets/plugins/jquery-knob/jquery.knob.js')}}"></script>
	  <script>
		  $(function() {
			  $(".knob").knob();
		  });
	  </script>
	  <script src="{{asset('AdminBackend/assets/js/index.js')}}"></script>
	<!--app JS-->
	<script src="{{asset('AdminBackend/assets/js/app.js')}}"></script>


	<!--toaster JS-->

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

	<script>
	@if(Session::has('message'))
	var type = "{{ Session::get('alert-type','info') }}"
	switch(type){
		case 'info':
		toastr.info(" {{ Session::get('message') }} ");
		break;

		case 'success':
		toastr.success(" {{ Session::get('message') }} ");
		break;

		case 'warning':
		toastr.warning(" {{ Session::get('message') }} ");
		break;

		case 'error':
		toastr.error(" {{ Session::get('message') }} ");
		break; 
	}
	@endif 
	</script>


	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	{{-- ?????confirm delete  --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	
	<script type="text/javascript">
		$('.show-alert-delete-box').click(function(event){
			var form =  $(this).closest("form");
			var name = $(this).data("name");
			event.preventDefault();
			swal({
				title: "Are you sure you want to delete this record?",
				text: "If you delete this, it will be gone forever.",
				icon: "warning",
				type: "warning",
				buttons: ["Cancel","Yes!"],
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((willDelete) => {
				if (willDelete) {
					form.submit();
				}
			});
		});
	</script>
	{{-- ?????confirm delete  --}}

   <script src="{{ asset('Adminbackend/assets/js/code.js') }}"></script>

	<script src="{{ asset('Adminbackend/assets/plugins/input-tags/js/tagsinput.js') }}"></script>

	<script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
	</script>

	<script>
		tinymce.init({
		  selector: '#mytextarea'
		});
	</script>

	</script>