<div id="left-flyout-nav" class="layout-left-flyout visible-sm"></div>
<div class="layout-right-content">
	<header class="the-header">
		<div class="navbar container">
			
			<!-- Trigger -->
			<a class="btn-navbar btn-navbar-navtoggle btn-flyout-trigger" href="#">
				<span class="icon-bar btn-flyout-trigger"></span>
				<span class="icon-bar btn-flyout-trigger"></span>
				<span class="icon-bar btn-flyout-trigger"></span>
			</a>
			
			<!-- Structure -->
			<nav class="the-nav nav-collapse clearfix">
				<ul class="nav nav-pill pull-left">
					<li>
						<a href=" {{ route('home')}} ">
							<img src="img/misc/PVR - Lines.svg" alt="Paris Valley Ranch Logo" title="Paris Valley Ranch Logo">
						</a>
					</li>
					
				</ul>
				<ul class="nav nav-pill pull-right" id="nav-right">
					<li class="dropdown">
						<a href="#">Accomodations
							<b class="caret"></b>
						</a>
						<ul class="subnav">
							<li>
								<a href="{{ route('main house')}} ">Main House</a>
							</li>
							<li>
								<a href="{{ route('bunk_house')}} ">Bunk House</a>
							</li>
							<li>
								<a href="{{ route('party pad')}} ">Party Pad</a>
							</li>
						</ul>
					</li>
					<li><a href="{{ route('hunting')}} ">Hunt Packages</a></li>
					<li><a href="{{ route('about') }} ">About</a></li>
					<li><a href="{{ route('info') }} ">Around the Ranch</a></li>
					<li><a href="{{ route('contact') }} ">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>