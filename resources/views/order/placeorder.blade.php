@extends('layouts.app')

@section('content')
  <div class="container">
   <h3>Place Order</h3>
   <div class="row">

     <div class="col-md-3 col-xs-6" >
       <ul class="nav nav-pills nav-stacked">

         <li class="active"><a data-toggle="tab" href="#menu1">Login/Register</a></li>
         <li><a data-toggle="tab" href="#menu2">Address</a></li>
         <li><a data-toggle="tab" href="#menu3">Review Order</a></li>
         <li><a data-toggle="tab" href="#menu4">Make Payment</a></li>
       </ul>
     </div>
     <div class="col-md-6 col-xs-6">
       <form action="/orderstore2" >
     <div class="form-group">
         <div class="tab-content">
     <div id="menu1" class="tab-pane fade in active">
       <h3>You are logged in</h3>
       <p>User name:{{ Auth::user()->name }}</p>
       <p>User email:{{ Auth::user()->email }}</p>
        <p> We will send order details to the above email address</p>
       <a class="test btn btn-default" data-toggle="tab" href="#menu2">next</a>
     </div>
     <div id="menu2" class="tab-pane fade">
       <h3>Confirm Address</h3>
       <p>We will deliver you order here</p>
       <div class="form-group">
        <textarea name="adr" class="form-control" rows="3"></textarea>
        </div>
        <a class="test btn btn-default" data-toggle="tab" href="#menu3">next</a>

     </div>
     <div id="menu3" class="tab-pane fade">
       <h3>Review Order</h3>
       <p>Item details</p>
       <h2>Name:{{ $item->product->name }}</h2>
       <h3>Price: {{$item->product->price }}</h3>

       <a class="test btn btn-default" data-toggle="tab" href="#menu4">Proceed to payment</a>
     </div>
     <div id="menu4" class="tab-pane fade">
       <h3>You pay:Rs</h3>
       <h2>Pay using Cash On Delivery</h2>
       <div class="radio">
  <label>
    <input type="radio" checked>
    Cash on delivery(COD)
  </label>
</div>
       <input type="text" class="hidden" name="itemid" value={{ $item->id }}>
       <button type="submit" class="btn btn-default">Place order</button>
     </div>
   </div>
 </div>
 </form>
      </div>
     <div class="clearfix visible-lg"></div>
   </div>
 </div>


@endsection
