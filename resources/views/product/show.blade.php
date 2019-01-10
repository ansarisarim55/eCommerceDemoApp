@extends('layouts.app')

@section('content')
  @if($k=="")
    <div class="container">
      <h1 style="color:red;">Please enter some product!</h1>
      <a href="/" class="btn btn-lg btn-default">Back</a>
    </div>
  @elseif(count($item)==0)
    <div class="container">
      <h1 style="color:red;">Poduct Not Found!</h1>
      <a href="/" class="btn btn-lg btn-default">Back</a>
    </div>
  @else
    <div class="container">
    <h5>Results for: {{$k }}</h5>
  @foreach($item as  $key => $item)
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
                 <h4 class="media-heading">{{ $item->name }} </h4>
               <div class="pull-right">
                  <form action="/order/{{$item->id}}" method="GET" style="">
                                                     {{ csrf_field() }}

                                                     <button type="submit" class="btn btn-default btn-md" style="margin:2px;" >
                                                         Buy Now
                                                     </button>
                 </form>
                 <form action="/cart/{{$item->id}}" method="GET" style="">
                                                    {{ csrf_field() }}

                                                    <button type="submit" class="btn btn-default btn-md" style="margin:2px;;" >
                                                        Add To Carts
                                                    </button>
                </form>

                </div>
                 <p style="margin-bottom:0px;">Price: {{ $item->price}}</p>


               </div>
             </div>

            </div>
           </div>
         </div>
          @endforeach
      </div>
  @endif
@endsection
