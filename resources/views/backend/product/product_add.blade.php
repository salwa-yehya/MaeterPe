@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Add New Product</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add New Product</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->

<div class="card">
  <div class="card-body p-4">
	  <h5 class="card-title">Add New Product</h5>
	  <hr/>
	  <form id="myForm" method="post" action="{{ route('store.product') }}" enctype="multipart/form-data"  >
		@csrf
       <div class="form-body mt-4">
	    <div class="row">
		   <div class="col-lg-8">
           <div class="border border-3 p-4 rounded">


			<div class="form-group mb-3">
				<label for="inputProductTitle" class="form-label">Product Name</label>
				<input type="text" name="product_name" class="form-control" id="inputProductTitle" placeholder="Enter product title">
			  </div>

			  <div class="form-group mb-3">
				<label for="inputProductTitle" class="form-label">Product Size</label>
				<input type="text" name="product_size" class="form-control"  >
			  </div>

			  <div class="form-group mb-3">
				<label for="inputProductTitle" class="form-label">Product Color</label>
				<input type="text" name="product_color" class="form-control visually-hidden" data-role="tagsinput" value="Gold,Black">
			  </div>


			  <div class="form-group mb-3">
				<label for="inputProductDescription" class="form-label">Short Description</label>
				<textarea name="short_descp" class="form-control" id="inputProductDescription" rows="3"></textarea>
			  </div>

			   <div class="form-group mb-3">
				<label for="inputProductDescription" class="form-label">Long Description</label>
				<textarea id="mytextarea" name="long_descp">Write Product Description Here ..!</textarea>
			  </div>



            <div class="form-group mb-3">
				<label for="inputProductTitle" class="form-label">Product Image</label>
				<input name="product_image" class="form-control" type="file" id="formFile" onChange="mainThamUrl(this)">
			  </div>

              <img src="" id="mainThmb" />
     



            </div>
		   </div>
		   <div class="col-lg-4">
			<div class="border border-3 p-4 rounded">
              <div class="row g-3">
				<div class="col-md-6">
					<label for="inputPrice" class="form-label">Product Price</label>
					<input type="text" name="selling_price" class="form-control" id="inputPrice" >
				  </div>
				  <div class="col-md-6">
					<label for="inputCompareatprice" class="form-label">Discount Price</label>
					<input type="text" name="discount_price" class="form-control" id="inputCompareatprice" >
				  </div>

				  <div class="col-md-6">
					<label for="inputCostPerPrice" class="form-label">Product Quantity</label>
					<input type="text" name="product_qty" class="form-control" id="inputCostPerPrice" >
				  </div>


				
				  <div class="col-12">
					<label for="inputProductType" class="form-label">Product Category</label>
					<select name="category_id" class="form-select" id="inputProductType">
						<option></option>
						@foreach ($categories as $category)
							<option value="{{$category->id}}">{{$category->category_name }}</option>

						@endforeach

					  </select>
				  </div>

				  <div class="row g-3">

                    <div class="col-md-6">	
              
               
               
               
               
               
               <div class="col-md-6">	
                   <div class="form-check">
                           <input class="form-check-input" name="offer" type="checkbox" value="1" id="flexCheckDefault">
                           <label class="form-check-label" for="flexCheckDefault">On sale</label>
                       </div>
                   </div>
               
               
                 
               
               
               
                       </div> <!-- // end row  -->
				 
				  <div class="col-12">
					  <div class="d-grid">
						<input type="submit" class="btn btn-primary px-4" value="Save Changes" />
					</div>
				  </div>
			  </div> 
		  </div>
		  </div>
	   </div><!--end row-->
	</div>
  </div>

</form>
</div>
</div>


<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                product_name: {
                    required : true,
                }, 
                 short_descp: {
                    required : true,
                }, 
                 product_image: {
                    required : true,
                }, 
                
                 selling_price: {
                    required : true,
                },                   
               
                 product_qty: {
                    required : true,
                }, 
              
                 category_id: {
                    required : true,
                }, 
                
            },
            messages :{
                product_name: {
                    required : 'Please Enter Product Name',
                },
                short_descp: {
                    required : 'Please Enter Short Description',
                },
                product_image: {
                    required : 'Please Select Product Thambnail Image',
                },
               
                selling_price: {
                    required : 'Please Enter Selling Price',
                }, 
              
                 product_qty: {
                    required : 'Please Enter Product Quantity',
                },
				category_id: {
                    required : 'Please Enter Product Category',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>


<script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(150).height(150);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>

@endsection

