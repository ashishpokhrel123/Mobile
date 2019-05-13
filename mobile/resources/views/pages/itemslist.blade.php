@extends('layouts.layout1')
@section('change')

<div class="content-sidebar "  >
		    		<h4>Member Area</h4>
						<ul>
							<li><a href="{!! url('pages/additems') !!}">Post new ads</a></li>
							<li><a href="{!! url('pages/itemslist') !!}">My ads</a></li>
							<li><a href="{!! url('pages/editprofile') !!}">Change info</a></li>
							<li><a href="#">Change password</a></li>
						</ul>
		    	</div>
                
          <!-- Listing user product -->

          <div class= "container mt-5">
<table class ="table table-bordered" border="1">
<thead>
<tr>
<th>add_title</th>
<th>product_name</th>
<th>model</th>
<th>description</th>
<th>price</th>
<th>price_negotiation</th>
<th>condition</th>
<th>used_for</th>
<th>image</th>
<th>documentation</th>
<th>sim_slot</th>
<th>screen_size</th>
<th>smatphone_os</th>
<th>back_camera</th>
<th>font_camera</th>
<th>internal_storage</th>
<th>home_delivery</th>
<th>delivery_area</th>
<th>delivery_charges</th>
<th>warrenty_types</th>
<th>warrenty_period</th>
<th>warrenty_inludes</th>
</tr>
@foreach($item as $items)
<tbody>
<tr>
              <td> {{$items->add_title }}</td>
              <td> {{$items->product_name}}</td>
              <td> {{$items->model}}</td>
              <td> {{$items->description}}</td>
              <td> {{$items->price}}</td>
              <td> {{$items->price_negotiation}}</td>
              <td> {{$items->condition}}</td>
              <td> {{$items->used_for}}</td>
              <td> <img src="/{{$items->image}}" class="img-fluid img-thumbnail" style="height:150px; width:200px;"></td>
    	   	  <td> {{$items->documentation}}</td>
	    	  <td> {{$items->sim_slot}}</td>
			  <td> {{$items->screen_size}}</td>
              <td>  {{$items->smatphone_os}}</td>
	          <td> {{$items->back_camera}}</td>
	     	  <td> {{$items->font_camera}}</td>
		      <td> {{$items->internal_storage}}</td>
              <td> {{$items->home_delivery}}</td>
	          <td> {{$items->delivery_area}}</td>
		      <td> {{$items->warrenty_types}}</td>
		      <td> {{$items->warrenty_types}}</td>
	  	      <td> {{$items->delivery_charges}}</td>
		      <td> {{$items->warrenty_types}}</td>
              <td> {{$items->warrenty_period}}</td>
			  <td> {{$items->warrenty_types}}</td>
			<td>
			 <form action="{!! url('Itemsedit', [$items->itemid]) !!}">
			<button type="submit" class="btn btn-primary btn-sm" name="edit">Edit</button>	
			</form>

		
			<form action="{!! url('pages/itemslist',[$items->itemid]) !!}" method ="POST">
			@csrf 
			{!!method_field ('DELETE')!!}
			
			<button type="submit" class="btn btn-primary btn-sm" name="delete">Delete</button>	
			</form>
			</td>
			@endforeach		
			</tr>
			</thead>
			</table>
			</div>
  

@endsection