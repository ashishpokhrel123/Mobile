 @extends('layouts.layout')  <!-- INCLUDES  EXTENDS IS USED-->
@section('change')
<div  class="content-sidebar">
		    		<h4>Admin dashboard</h4>
						<ul>
							<li><a  href="{!! url('pages/producttype') !!}">Product Types</a></li>
							<li><a onclick="myFunction()" href="#">Add Product</a></li>
							<li><a onclick="myFunction1()" href="#">Product List</a></li>
							<li><a  href="#">Order</li>	
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
						<div class="card-header">{{ __('Add product') }}</div>
						<div class="card-body bg-light" >
							
								@if(session()->has('success'))
					<div class="alert-success">
						<h1> {!! session()->get('success') !!}</h1>
					</div>
				@endif

				@if($errors->any())
					<div class="alert alert-danger">
						<ul class="list-unstyled">
							@foreach($errors->all() as $error)
								<li> {{ $error  }}</li>
							@endforeach
						</ul>
					</div>
				@endif



							@if(count($errors)>0)
								<div class="alert alert-danger">
									<ul>
								@foreach($errors->all() as $error)
									<li>{{$error}}</li>
								@endforeach
										</ul>
									</div>
							@endif
								@if(Session::has('success'))
									<div class="alert alert-success">
									<p>{{\Session::get('success')}}</p>
									</div>
								@endif
								@if(Session::has('imageNameExits'))
									<div class="alert alert-success">
									<p>{{\Session::get('imageNameExits')}}</p>
									</div>
								@endif
				<form method="POST" class="add-event-form" action="{{url ('/adminpanel')}}" enctype="multipart/form-data" >
                        @csrf
						{{method_field ('put')}}
						
				
						<select class="form-control" placeholder="Choose your product type" id="producttypeid" name="producttypeid" required> 
						<option class="" values="">Select product type</option>
						@foreach($producttypes as $producttypes)
							<option value="{{  $producttypes->producttypeid }}">{{$producttypes->producttypename}}</option>
						@endforeach
						</select>
						<input type="text" class="form-control " id="productname" name="productname" placeholder="Product Name">
						<input type="text" class="form-control " id="model" name="model" placeholder="Model">
						<input type="text" class="form-control " id="Price" name="Price" placeholder="Price">
						<textarea class="form-control" name="description" id="description" cols="30" rows="5" placeholder="Short Description about product"></textarea>
						<input type="file" class="img-fluid " id="image" name="image"/>
						<br>
						<input class="btn" type="submit" name="submit">
						<span id="event-err-msg" style="color: #f00; display: none;">Please fill the blanks!</span>
					</form>    
                </div>
            </div>
        </div>
    </div>
</div>


<div class= "container mt-5">
							<table  id="456" style=" display:none " class ="table table-bordered" border="1">
							<thead>
							<tr>
							<th>SN</th>
							<th>Product Type Name</th>
							<th>Product Name</th>
							<th>Model</th>
							<th>Price</th>
							<th>Description</th>
							<th>Image</th>
							<th>Actions</th>
							</tr>
						

					<tbody >
					@if($products->count())
						@foreach($products as $key=>$products)
					<tr>	
							<td >{!! $key + 1 !!}</td>
							<td > {!! $products->producttypename !!}</td>
							<td > {!! $products->productname !!}</td>
							<td > {!! $products->model !!}</td>
							<td > {!! $products->Price !!}</td>
							<td > {!! $products->description !!}</td>
							<td><img src="/{{$products->image}}" class="img-fluid image-thumbnail" style="height: 150px; width:200px;"></td>
						<td>
					
							<a href="{!! url('Productsedit', [$products->productid]) !!}">
						<button type="submit" class="btn btn-info btn-sm" name="edit">Edit</button>	
					</a>

					<form action="{!! url('/admin',[$products->productid]) !!}" method ="POST">
						@csrf 
						{!!method_field ('DELETE')!!}

					<button id="deletebtn" type="submit" class="btn btn-danger btn-sm" name="delete">Delete</button>
					<style>
					#deletebtn {
  color: blue;
}	
</style>
					</form>
					</td>

				  @endforeach
			  @endif
		       </tr>
							</thead>
						    </table>
			</div>

				 
  
@endsection