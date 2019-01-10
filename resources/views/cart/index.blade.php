@extends('layouts.app')


@section('content')
  <div class="container-fluid">
    <div id="body">

            <div class="row" style="">
                <div class="col-md-8" style="">
                   <h1>Cart Items </h1>
  @foreach($items as  $key => $item)

                   <div class="row">
                     <div class="panel panel-default">
                         <div class="panel-body">
                           <div class="media">
                             <div class="media-left">
                               <a href="#">  {{-- "/images/iphone/iphone6.jpg" --}}
                                 <img class="media-object" src="/images/{{ $imgar[$key] }}.jpg"  width="60px" alt="...">
                               </a>
                             </div>
                             <div class="media-body">
                               <h4 class="media-heading">{{ $item->product->name }} </h4>
                               <div class="pull-right">
                                 <form action="/cart/{{$item->id}}" method="POST" style="">
                                                                    {{ csrf_field() }}
                                                                    {{ method_field('DELETE') }}

                                                                    <button type="submit" class="btn btn-default btn-md" style="margin:2px;" >
                                                                        <i class="glyphicon glyphicon-trash"></i> Delete
                                                                    </button>
                                </form>
                                <form action="/order/{{$item->product->id}}" method="GET" style="">
                                                                   {{ csrf_field() }}

                                                                   <button type="submit" class="btn btn-default btn-md" style="margin:2px;" >
                                                                       Checkout
                                                                   </button>
                               </form>



                               </div>
                               <p style="margin-bottom:0px;">Price: {{ $item->product->price}}</p>


                             </div>
                            </div>


                         </div>
                     </div>

                   </div>
                 @endforeach
                </div>
                <div class="col-md-4" style="height:15em;border-style:solid;margin-top:5px;padding:2px;">
                  <center><h1>Cart Summary</h1></center><hr style="height:2px;">
                  <h3>Total items: {{ $no}}</h3>
                  <h3>Total Amount: RS {{ $total }}</h3>

                </div>
            </div>

  </div>
</div>


@endsection
