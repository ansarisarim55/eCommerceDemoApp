@extends('layouts.app')

@section('content')
  <div class="container">
    <h3>Order Items </h3>
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
               <form action="/order/{{$item->id}}" method="POST" style="">
                                                  {{ csrf_field() }}
                                                  {{ method_field('DELETE') }}

                                                  <button type="submit" class="btn btn-default btn-md" style="margin:2px;" >
                                                      <i class="glyphicon glyphicon-trash"></i> Delete
                                                  </button>
                                              </form>

             </div>
             <p style="margin-bottom:0px;">Price: {{ $item->product->price}}</p>
             <p style="margin-bottom:0px;">Deliver before: {{ $item->deliver}}</p>

           </div>
          </div>
       </div>
      </div>
     </div>
   @endforeach
  </div>
@endsection
