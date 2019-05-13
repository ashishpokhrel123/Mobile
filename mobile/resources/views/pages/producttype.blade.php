 @extends('layouts.layout')  <!-- INCLUDES  EXTENDS IS USED-->
 @section('change')
 <div  class="content-sidebar">
		    		<h4>Admin dashboard</h4>
						<ul>
							<li><a  href="#">Product Types</a></li>
							<li><a  href="{{url ('/adminpanel')}}">Add Product</a></li>
							<li><a  href="#">Product List</a></li>
							<li><a  href="#">Order</li>	
						</ul>
						</div>


						<div class="container" style='margin-left:10%'>
					<div  id="123"  class="container mt-5" >
					<div class="row justify-content-center">
					<div class="col-md-8">
					<div class="card">
						<div class="card-header text-center">{{ __('Add Product Type') }}</div>
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


						<form method="POST" class="add-event-form" action="{{url ('pages/producttype')}}"  enctype="multipart/form-data" >

                        @csrf
						{{method_field ('put')}}

						<div class="icon-holder text-center">
						</div>
						<input type="text" class="form-control " id="producttypename" name="producttypename" placeholder="Product Type Name">
					
					
						<input class="btn" type="submit" name="submit">
						<span id="event-err-msg" style="color: #f00; display: none;">Please fill the blanks!</span>
					</form>

				</div>
					</div>
						</div>
							</div>
							</div>
							</div>

				<!-- 	listing of product types -->

				<div class= "container mt-5">
							<table  id="456" style=" display:none margin-left:14%;" class ="table table-bordered" border="1">
							<thead>
							<tr>
							<th>SN</th>
							<th>productname</th>
							<th>Created at</th>
							<th>Actions</th>
							</tr>
						

					<tbody >
					@if($producttypes->count())
						@foreach($producttypes as $key=>$producttypes)
					<tr>	
							<td >{!! $key + 1 !!}</td>
							<td style="bg-info"> {!! $producttypes->producttypename !!}</td>
							<td style="bg-info"> {!! $producttypes->created_at !!}</td>
							<td>   

					<a href="{!! url('Producttypesedit', [$producttypes->producttypeid]) !!}">
						<button type="submit" class="btn btn-info btn-sm" name="edit">Edit</button>	
					</a>

					<form action="{!! url('pages/producttype',[$producttypes->producttypeid]) !!}" method ="POST">
						@csrf 
						{!!method_field ('DELETE')!!}

					<button type="submit" class="btn btn-danger btn-sm" name="delete">Delete</button>	
					</form>
					</td>

				  @endforeach
			  @endif
		       </tr>
							</thead>
						    </table>
			</div>
@endsection