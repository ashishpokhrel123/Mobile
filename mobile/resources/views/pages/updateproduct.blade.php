@extends('layouts.layout')
@section('change')
				<div  class="content-sidebar">
		    			<h4>Admin dashboard</h4>
							<ul>
									<li><a  href="#">Product Types</a></li>
								<li><a onclick="myFunction()" href="#">Add product</a></li>	
								<li><a onclick="myFunction1()" href="#">Product List</a></li>
								<li><a  href="#">Order</a></li>
							</ul>
				</div>

			<!-- javascript for div hiding -->
				<script> function myFunction() {
							var x = document.getElementById("123");
							var y = document.getElementById("456").style.display ="none";
							
								if (x.style.display === "none") 
								{
								x.style.display = "block";
								}
							else 
								{
								x.style.display = "none";
								y.style.display = "block";
								}
							} </script>
										<script> function myFunction1() {
							var x = document.getElementById("123").style.display ="none";
							var y = document.getElementById("456");
							
								if (y.style.display === "none") {
								y.style.display = "block";
							} else {
								y.style.display = "none";
								x.style.display = "block";
							}
				} </script>

		<div  id="123"  class="container mt-5" >
    	    <div class="row justify-content-center">
                  <div class="col-md-8">
                      <div class="card">
                          <div class="card-header">{{ __('Update product') }}</div>
                              <div class="card-body bg-light" >

				<form method="POST" action="{!! url('Productsupdate', $product->productid) !!}" enctype="multipart/form-data">
                        @csrf 
						{{method_field ('put')}}
						<div class="icon-holder text-center">
						</div>
						<input type="text" class="form-control " id="productname" name="productname" placeholder="Product Name" value="{{ $product->productname }}">
						<input type="text" class="form-control " id="model" name="model" placeholder="Model"  value="{{ $product->model }}">
						<input type="text" class="form-control " id="Price" name="Price" placeholder="Price"   value="{{  $product->Price }}">
						<textarea class="form-control" name="description" id="description" cols="30" rows="5" placeholder="Short Description about product"  >{{  $product->description }}</textarea>
						<input type="file" class="img-fluid img-thumbnail" id="image" name="image" value="{{  $product->image }}"> 
						<br>
						<div class="form-group">
       				      <img src=" /{{$product->image}} "  style="height:200px;width:280px;" class="img-fluid img-thumbnail" style="max-width:100%">
       				    </div>
						<input class="btn" type="submit" name="Update">
						<span id="event-err-msg" style="color: #f00; display: none;">Please fill the blanks!</span>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection