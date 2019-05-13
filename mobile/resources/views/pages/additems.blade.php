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
		   
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="hh">
                <div class="card-header text-center">{{ __('Add item') }}</div>

                <div class="card-body">
                
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
                
                  <form method="POST" action="{{url('pages/additems')}}"  enctype="multipart/form-data">
                        @csrf
                        {{method_field ('put')}}
                              Add Title<br>
                                <input type="text" class="form-control "   id="add_title" name="add_title" required>

                             Product Name
                                 <input type="text" class="form-control " id="product_name" name="product_name" required>

                             Model
					                     	<input type="text" class="form-control " id="model" name="model"required>
		

                             Description<br>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="5" placeholder="Short Description about product" required></textarea>
                        
                            Price
			  		                  	<input type="text" class="form-control " id="price" name="price" required>

                                <h2>Price negotiable</h2>
                                <input type="radio"  id="price_negotiation" name="price_negotiation" value="Yes" checked> Yes
                                <input type="radio"  id="price_negotiation" name="price_negotiation" value="No"> No<br>
                       <br>

                        <h2>Conditon</h2>
                        <input type="radio"  id="condition" name="condition" value="Brand New(not used)" checked>Brand New(not used) 
                        <input type="radio" id="condition" name="condition" value="Like New (used few times)">Like New (used few times)
                        <input type="radio" id="condition" name="condition" value="Excellent">Excellent 
                        <input type="radio" id="condition" name="condition" value="Good/Fair ">Good/Fair 
                        <input type="radio"  id="condition" name="condition" value="Not Working">Not Working<br><br>

                         
                        Used for<br>
                       <input type="text" class="form-control " id="used_for" name="used_for" placeholder="eg.3 months">
                       
                         Add image<br>
					            	<input type="file" class="form-control" id="image" name="image"/><br>
						

                        <h3>Ownership Document Provided</h3>
                        <input type="checkbox" id="documentation" name="documentation" value="Sales bill of my shop">Sales bill of my shop<br>
                        <input type="checkbox" id="documentation" name="documentation" value="Stamped warranty card">Stamped warranty card<br>
                        <input type="checkbox" id="documentation" name="documentation" value="IMEI matching box">IMEI matching box<br>
                        <input type="checkbox" id="documentation" name="documentation" value="Original purchase bill (for used phone)">Original purchase bill (for used phone)<br>
                        <input type="checkbox" id="documentation" name="documentation" value="I do not have any document">I do not have any document<br><br>
                        

                        Sim Slot
                        <select class="form-control " >
                        <option  id="sim_slot" name="sim_slot" value=""></option>
                        <option  id="sim_slot" name="sim_slot" value="Single Sim - 3G ">Single Sim - 3G</option>
                        <option id="sim_slot"  name="sim_slot" value="Single Sim - CDMA ">Single Sim - CDMA</option>
                        <option  id="sim_slot" name="sim_slot" value="Single Sim - 4G(LTE)">Single Sim - 4G(LTE)</option> 
                        <option  id="sim_slot" name="sim_slot" value="Dual Sim - 2/3G + 4G">Dual Sim - 2/3G + 4G</option>
                        <option id="sim_slot" name="sim_slot" value="Dual Sim -GSM + CDMA">Dual Sim -GSM + CDMA</option>
                        </select> <br>

                      Screen Size
                        <select class="form-control " >
                        <option id="screen_size" name="screen_size" value=""></option>
                        <option id="screen_size" name="screen_size" value="4.0 to 4.4 inch">4.0 to 4.4 inch</option>
                        <option id="screen_size" name="screen_size" value="4.5 to 4.9 inch ">4.5 to 4.9 inch </option>
                        <option id="screen_size" name="screen_size" value="5.0 to 5.4 inch">5.0 to 5.4 inch </option> 
                        <option id="screen_size" name="screen_size" value="5.5 to 5.9 inch">5.5 to 5.9 inch </option>
                        <option id="screen_size" name="screen_size" value="6.0 inch or more">6.0 inch or more</option>
                        </select> <br>
                        
                        Smartphone OS
                        <select class="form-control " >
                        <option  id="smatphone_os" name="smatphone_os" value=""></option>
                        <option id="smatphone_os" name="smatphone_os" value="Not a smartphone">Not a smartphone</option>
                        <option id="smatphone_os" name="smatphone_os" value="Android 5.0(Lollipop)">Android 5.0(Lollipop) </option>
                        <option id="smatphone_os" name="smatphone_os" value="Android 6.0(Marshmellow)">Android 6.0(Marshmellow) </option> 
                        <option id="smatphone_os" name="smatphone_os" value="Android 7.0(Nougat)">Android 7.0(Nougat)</option>
                        <option id="smatphone_os" name="smatphone_os" value="Android 8.0(Oreo)">Android 8.0(Oreo)</option>
                        <option id="smatphone_os" name="smatphone_os" value="Android 9.0(Pie)">Android 9.0(Pie)</option>
                        <option id="smatphone_os" name="smatphone_os" value="Apple IOS 9.0 or below">Apple IOS 9.0 or below</option>
                        <option id="smatphone_os" name="smatphone_os" value="Apple IOS 9.0 or below">Apple IOS 9.0 or below</option>
                        <option id="smatphone_os" name="smatphone_os" value="Apple IOS 10">Apple IOS 10</option>
                        <option id="smatphone_os" name="smatphone_os" value="Apple IOS 11">Apple IOS 11</option>
                        <option id="smatphone_os" name="smatphone_os" value="Apple IOS 12">Apple IOS 12</option>
                        </select> <br>

                        Back Camera
                        <select class="form-control " >
                        <option id="back_camera" name="back_camera" value=""></option>
                        <option id="back_camera" name="back_camera" value="No">No</option>
                        <option id="back_camera" name="back_camera" value="5 MP - 7.9 MP">5 MP - 7.9 MP </option>
                        <option  id="back_camera" name="back_camera" value="8 MP - 12.9 MP">8 MP - 12.9 MP</option> 
                        <option id="back_camera" name="back_camera" value="13 MP - 19.9 MP">13 MP - 19.9 MP</option>
                        <option id="back_camera" name="back_camera" value="20 MP or more">20 MP or more</option>
                        </select><br>

                        Font Camera
                        <select class="form-control " >
                        <option id="font_camera" name="font_camera" value=""></option>
                        <option id="font_camera" name="font_camera" value="No">No</option>
                        <option id="font_camera" name="font_camera" value="VGA">VGA </option>
                        <option id="font_camera" name="font_camera" value="5 MP">5 MP</option> 
                        <option id="font_camera" name="font_camera" value="8 MP">8 MP/option>
                        <option id="font_camera" name="font_camera" value="20 MP or more">20 MP or more</option>
                        </select><br>
                        
                        Internal Storage
                        <select id="internal_storage" name="internal_storage" class="form-control " >
                        <option id="internal_storage" name="internal_storage" value=""></option>
                        <option id="internal_storage" name="internal_storage" value="8 GB">8 GB</option>
                        <option id="internal_storage" name="internal_storage" value="16 GB">16 GB </option>
                        <option id="internal_storage" name="internal_storage" value="64 GB">64 GB</option> 
                        <option id="internal_storage" name="internal_storage" value="128 GB">128 MP</option>
                        <option id="internal_storage" name="internal_storage" value="128 GB or more">128 GB or more</option>
                        </select><br>

                        <h2>Home delivery</h2>
                        
                        <input type="radio" id="home_delivery" name="home_delivery" value="Yes" checked> Yes
                        <input type="radio" id="home_delivery" name="home_delivery" value="No"> No<br>
                       <br>

                          <h2>Delivery Area</h2>
                         
                        <input type="radio" id="delivery_area" name="delivery_area" value="Within my Area" checked>Within my Area
                        <input type="radio" id="delivery_area" name="delivery_area" value="Within my City">Within my City
                        <input type="radio" id="delivery_area" name="delivery_area" value="Almost anywhere in Nepal">Almost anywhere in Nepal<br>
                       <br>

                        Delivery Charges<br>
                        <input type="text" class="form-control"   id=" delivery_charges" name="delivery_charges">


                        <h2>Warrenty Type</h2>
                         
                        <input type="radio" name="warrenty_types" value="Dealer" checked>Dealer/Shop   
                        <input type="radio" name="warrenty_types" value="Manufacturer/Importer">Manufacturer/Importer
                        <input type="radio" name="warrenty_types" value="No Warranty">No Warranty<br>
                       <br>

                        Warrenty Period<br>
                        <input type="text" class="form-control "   id=" warrenty_period" name="<warrenty_period">

                        Warrenty Includes<br>
                        <input type="text" class="form-control "   id=" warrenty_includes" name="<warrenty_includes">

                        <input class="btn" type="submit" name="submit">
						<span id="event-err-msg" style="color: #f00; display: none;">Please fill the blanks!</span>

                                      </form>
                              </div>
                       </div>         
                  </div>
              </div>
         </div>



@endsection
     
