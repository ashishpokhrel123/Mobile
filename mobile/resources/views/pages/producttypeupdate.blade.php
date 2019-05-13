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
						<div class="card-header text-center">{{ __('Update Product Type') }}</div>
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


						<form method="POST" class="add-event-form" action="{!! url('Producttypesupdate', $producttypes->producttypeid) !!}"  enctype="multipart/form-data" >

                        @csrf
						{{method_field ('put')}}

						<div class="icon-holder text-center">
						</div>
						<input type="text" class="form-control " id="producttypename" name="producttypename"  placeholder="Product Type Name" values="{{ $producttypes->producttypename }}">
						<input class="btn" type="submit" name="submit">
						<span id="event-err-msg" style="color: #f00; display: none;">Please fill the blanks!</span>
					</form>

				</div>
					</div>
						</div>
							</div>
							</div>
							</div>


          @endsection