<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<script src="/js/jquery.js"></script>
	<script src="/js/porder.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="/js/bootstrap.js"></script>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/style2.css">
	<title>Apple</title>
</head>
<body>
	<!--  http://bootsnipp.com/snippets/featured/form-process-steps(Process steps )  -->
<!--  http://codepen.io/CBeghin/pen/HeuiF(search wiht animation )  -->
<nav class="navbar navbar-default navbar-fixed-top ">
 <div class="container-fluid">
	 <div class="navbar-header">
		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
			 <span class="icon-bar"></span>
		 </button>
		 <a class="navbar-brand" href="/"><img height="20px" width="20px" src="/images/logo/logo.png"/></a>
	 </div>
	 <div class="collapse navbar-collapse" id="myNavbar">
		 <ul class="nav navbar-nav">
			 <li><a href="/mac">MAC</a></li>
			 <li><a href="/ipad">IPAD</a></li>
			 <li><a href="/iphone">IPHONE</a></li>
			 <li><a href="/watch">WATCH</a></li>
		 </ul>
		 <!-- Right Side Of Navbar -->
		     <ul class="nav navbar-nav navbar-right">
		           <li>
		                  <form action="/psearch" class="navbar-form navbar-right" role="search" class="searchmini">
		                 <input class="sani" id="search" type="search" name="keyword" placeholder="Search"><button type="submit" class="btn btn-link"><i class="glyphicon glyphicon-search"></i></button>
		                 </form>

		             </li>

		             <!-- Authentication Links -->
		             @if (Auth::guest())
		                 <li><a href="{{ url('/login') }}">Login</button></a></li>
		                 <li><a href="{{ url('/register') }}">Register</a></li>
		             @else
		                 <li class="dropdown">
		                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
		                         <i class="glyphicon glyphicon-user"></i>{{  Auth::user()->name }} <span class="caret"></span>
		                     </a>
		                   <ul class="dropdown-menu" role="menu">
		                         <li><a href="{{ url('/logout') }}" style="color:black;"><i class="glyphicon glyphicon-shopping-cart"></i>Logout</a></li>
		                           <li><a href="{{ url('/cart') }}"><i class="glyphicon glyphicon-shopping-cart"></i> Cart </a></li>
		                           <li><a href="{{ url('/order') }}"><i class="glyphicon glyphicon-gift"></i> Orders</a></li>
		                     </ul>
		                 </li>
		             @endif
		     </ul>
	 </div>
 </div>
</nav>


<div class="container-fluid" id="holder" style="padding:0px;">
      <div id="body" >
       @yield('content')
      </div>

      <div id="footer">
			<div class="">
        <p>More ways to shop: Visit an Apple Store, call 1-800-MY-APPLE, or find a reseller.</p>
      	<p>Copyright © 2016 Apple Inc. All rights reserved.</p>
			<p>Develped by <a href="https://www.facebook.com/ishan81">Ishan Khan</a> & <a href="https://www.facebook.com/ansarisarim55">Sarim Ansari</a>.</p>
			<p><a href="#">Back to top</a><p>
     </div>
		</div>

  </div>


 </body>
 </html>
