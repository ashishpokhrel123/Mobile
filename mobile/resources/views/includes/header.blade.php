<!----start-Header---->
      <div class="header">
		   	<div class="search-bar">
				<form>
					<input type="text"><input type="submit" value="Search" />
				</form>
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav">
				<ul>					
					<li><a href="#">Checkout</a></li>
				@if (auth::check())
					<li><a href="{!! url('pages/userprofile') !!}">{{ Auth::user()->name}}</a></li>
				@endif
				    <li><a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a></li>
			 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
            </form>
					<li><a href="#"><span>shopping cart&nbsp;&nbsp;: </span></a><label> &nbsp;noitems</label></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>

		<div class="clear"> </div>
		<div class="top-header">
			<div class="wrap">
		<!----start-logo---->
			<div class="logo">
				<a href="index.html"><img src="{{ URL::to('bootstrap/images/logo.png') }}" title="logo" /></a>
			</div>
		<!----end-logo---->
	
	