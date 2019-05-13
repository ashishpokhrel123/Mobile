@extends('layouts.layout1')
@section('change')

		    	<div class="content-sidebar">
		    		<h4>Member Area</h4>
						<ul>
							<li><a href="{!! url('/welcome') !!}">Home</a></li>
							<li><a href="{!! url('pages/additems') !!}">Post new ads</a></li>
							<li><a href="{!! url('pages/itemslist') !!}">My ads</a></li>
							<li><a href="{!! url('pages/editprofile') !!}">Change info</a></li>
							<li><a href="#">Change password</a></li>
						</ul>
		    	</div>
		    </div>
		    <div class="clear"> </div>
		    </div>
@endsection
