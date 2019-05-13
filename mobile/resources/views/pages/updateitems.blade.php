@extends('layouts.layout1')
@section('change')
<div class="content-sidebar "  >
		    		<h4>Member Area</h4>
						<ul>
							<li><a href="{!! url('pages/additems') !!}">Post new ads</a></li>
							<li><a href="#">My ads</a></li>
							<li><a href="{!! url('pages/editprofile') !!}">Change info</a></li>
							<li><a href="#">Change password</a></li>
						</ul>
		    	</div>
		   
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="hh">
                <div class="card-header text-center">{{ __('Update Item') }}</div>

                <div class="card-body">

                  <form method="POST" action="{!! url('Itemsupdate', $items->itemid) !!}"  enctype="multipart/form-data">
                        @csrf
                        {{method_field ('put')}}

                          Add Title<br>
                        <input type="text" class="form-control "   id="add_title" name="add_title" value="{{ $items->add_title }}">

                        Product Name
                        <input type="text" class="form-control " id="product_name" name="product_name" value="{{ $items->product_name }}">

                        Model
					            	<input type="text" class="form-control " id="model" name="model" value="{{ $items->model }}">
		

                         Description<br>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="5" placeholder="Short Description about product">{{  $items->description }}</textarea>
                        
                          Price
			  		          	<input type="text" class="form-control " id="price" name="price" value="{{  $items->price }}">

                         <h2>Price negotiable</h2>
                        
                        <input type="radio" name="price_negotiation" value="{{  $items->price_negotiation }}" checked> Yes
                        <input type="radio" name="price_negotiation" value="{{  $items->price_negotiation }}"> No<br>
                       <br>

                        <h2>Conditon</h2>
                        
                        <input type="radio" name="condition" value="{{  $items->condition }}"> Brand New(not used) 
                        <input type="radio" name="condition" value="{{  $items->condition }}"> Like New (used few times)
                        <input type="radio" name="condition" value="{{  $items->condition }}">Excellent 
                        <input type="radio" name="condition" value="{{  $items->condition }}">Good/Fair 
                        <input type="radio" name="condition"  value="{{ $items->condition }}">Not Working<br><br>

                         
                        Used for<br>
                       <input type="text" class="form-control " id="used_for" name="used_for" placeholder="eg.3 months" value="{{  $items->used_for }}">
                       
                         Add image<br>
					            	<input type="file" class="form-control" id="image" name="image" value="{{  $items->image }}"/><br>
						

                        <h3>Ownership Document Provided</h3>
                        <input type="checkbox" name="documentation"  value="{{  $items->documentation }}">Sales bill of my shop<br>
                        <input type="checkbox" name="documentation"  value="{{  $items->documentation }}">Stamped warranty card<br>
                        <input type="checkbox" name="documentation"  value="{{   $items->documentation }}">IMEI matching box<br>
                        <input type="checkbox" name="documentation"  value="{{  $items->documentation }}">Original purchase bill (for used phone)<br>
                        <input type="checkbox" name="documentation"  value="{{  $items->documentation }}">I do not have any document<br><br>
                        

                        Sim Slot
                        <select class="form-control " >
                        <option name="sim_slot" value=""></option>
                        <option name="sim_slot" value="{{  $items->sim_slot }}">Single Sim - 3G</option>
                        <option name="sim_slot" value="{{  $items->sim_slot }}">Single Sim - CDMA</option>
                        <option name="sim_slot" value="{{  $items->sim_slot }}">Single Sim - 4G(LTE)</option> 
                        <option name="sim_slot" value="{{  $items->sim_slot }}">Dual Sim - 2/3G + 4G</option>
                        <option name="sim_slot" value="{{  $items->sim_slot }}">Dual Sim -GSM + CDMA</option>
                        </select> <br>

                      Screen Size
                        <select class="form-control " >
                        <option  name="screen_size" value=""></option>
                        <option  name="screen_size" value="{{  $items->screen_size }}">4.0 to 4.4 inch</option>
                        <option  name="screen_size" value="{{  $items->screen_size }}">4.5 to 4.9 inch </option>
                        <option  name="screen_size" value="{{  $items->screen_size }}">5.0 to 5.4 inch </option> 
                        <option  name="screen_size" value="{{  $items->screen_size }}">5.5 to 5.9 inch </option>
                        <option  name="screen_size" value="{{  $items->screen_size }}">6.0 inch or more</option>
                        </select> <br>
                        
                        Smartphone OS
                        <select class="form-control " >
                        <option  name="smatphone_os" value=""></option>
                        <option  name="smatphone_os" value="{{  $items->smatphone_os }}">Not a smartphone</option>
                        <option  name="smatphone_os" value="{{  $items->smatphone_os }}">Android 5.0(Lollipop) </option>
                        <option  name="smatphone_os" value="{{  $items->smatphone_os }}">Android 6.0(Marshmellow) </option> 
                        <option  name="smatphone_os" value="{{  $items->smatphone_os }}">Android 7.0(Nougat)</option>
                        <option  name="smatphone_os" value="{{  $items->smatphone_os }}">Android 8.0(Oreo)</option>
                        <option  name="smatphone_os" value="{{  $items->smatphone_os }}">Android 9.0(Pie)</option>
                        <option  name="smatphone_os" value="{{  $items->smatphone_os }}">Apple IOS 9.0 or below</option>
                        <option  name="smatphone_os" value="{{  $items->smatphone_os }}">Apple IOS 9.0 or below</option>
                        <option  name="smatphone_os" value="{{  $items->smatphone_os }}">Apple IOS 10</option>
                        <option  name="smatphone_os" value="{{  $items->smatphone_os }}">Apple IOS 11</option>
                        <option  name="smatphone_os" value="{{  $items->smatphone_os }}">Apple IOS 12</option>
                        </select> <br>

                        Back Camera
                        <select class="form-control " >
                        <option name="back_camera"  value=""></option>
                        <option name="back_camera"  value="{{  $items->back_camera }}">No</option>
                        <option name="back_camera"  value="{{  $items->back_camera }}">5 MP - 7.9 MP </option>
                        <option name="back_camera"  value="{{  $items->back_camera }}">8 MP - 12.9 MP</option> 
                        <option name="back_camera"  value="{{  $items->back_camera }}">13 MP - 19.9 MP</option>
                        <option name="back_camera"  value="{{  $items->back_camera }}">20 MP or more</option>
                        </select><br>

                        Font Camera
                        <select class="form-control " >
                        <option name="font_camera" value=""></option>
                        <option name="font_camera"  value="{{  $items->font_camera }}">No</option>
                        <option name="font_camera" value="{{  $items->font_camera }}">VGA </option>
                        <option name="font_camera" value="{{  $items->font_camera }}">5 MP</option> 
                        <option name="font_camera" value="{{  $items->font_camera }}">8 MP/option>
                        <option name="font_camera" value="{{  $items->font_camera }}">20 MP or more</option>
                        </select><br>
                        
                        Internal Storage
                        <select name="internal_storage" class="form-control " >
                        <option name="internal_storage" value=""></option>
                        <option name="internal_storage" value="{{  $items->internal_storage }}">8 GB</option>
                        <option name="internal_storage" value="{{  $items->internal_storage }}">16 GB </option>
                        <option name="internal_storage" value="{{  $items->internal_storage }}">64 GB</option> 
                        <option name="internal_storage" value="{{  $items->internal_storage }}">128 MP</option>
                        <option name="internal_storage" value="{{  $items->internal_storage }}">128 GB or more</option>
                        </select><br>

                        <h2>Home delivery</h2>
                        
                        <input type="radio" name="home_delivery" value="{{  $items->home_delivery }}" checked> Yes
                        <input type="radio" name="home_delivery" value="{{  $items->home_delivery }}"> No<br>
                       <br>

                          <h2>Delivery Area</h2>
                         
                        <input type="radio" name="delivery_area" value="{{  $items->delivery_area }}" checked>Within my Area
                        <input type="radio" name="delivery_area" value="{{  $items->delivery_area }}" >Within my City
                        <input type="radio" name="delivery_area" value="{{  $items->delivery_area }}" >Almost anywhere in Nepal<br>
                       <br>

                        Delivery Charges<br>
                        <input type="text" class="form-control"   id=" delivery_charges" name="delivery_charges" value="{{  $items->delivery_charges }}">


                        <h2>Warrenty Type</h2>
                         
                        <input type="radio" name="warrenty_types" value="{{  $items->warrenty_types }}" checked>Dealer/Shop   
                        <input type="radio" name="warrenty_types" value="{{  $items->warrenty_types }}">Manufacturer/Importer
                        <input type="radio" name="warrenty_types" value="{{  $items->warrenty_types }}">No Warranty<br>
                        <br>

                        Warrenty Period<br>
                        <input type="text" class="form-control "   id=" warrenty_period" name="warrenty_period" value="{{  $items->warrenty_period }}">

                        Warrenty Includes<br>
                        <input type="text" class="form-control "   id=" warrenty_includes" name="warrenty_includes" value="{{  $items->warrenty_includes }}"> 

                        <input class="btn" type="submit" name="Update">
					          	<span id="event-err-msg" style="color: #f00; display: none;">Please fill the blanks!</span>

                                      </form>
                              </div>
                       </div>         
                  </div>
              </div>
         </div>
@endsection