<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\User;
use App\CartItem;
use App\Product;
use App\Order;
use App\OrderItem;


class OrderController extends Controller
{
  public function index(){
    $order = Order::where('user_id',Auth::user()->id)->first();
    $products = array("iphone", "ipad", "macbook","watch");
    $img=array();
    if(!$order){
        $order =  new Order();
        $order->user_id=Auth::user()->id;
        $order->save();
    }
     $items = $order->orderItems;
  /*  */foreach ($items as $item) {
           if($item->product->name=="Macbook") {
               $img[]="Macbook";
           }elseif(strpos($item->product->name,"Watch")){
             $img[]="watch";
           }else{
             $a=strpos($item->product->name," ");
             $img[]=substr($item->product->name,0,$a);
           }

        }

       return view('order.index',['items'=>$items,'imgar'=>$img]);
   }
   public function store($productId){
    if(Auth::check()){
      $order = Order::where('user_id',Auth::user()->id)->first();

      if(!$order){
          $order =  new Order();
          $order->user_id=Auth::user()->id;
          $order->save();
      }

      $orderitem  = new Orderitem();
      $orderitem->product_id=$productId;
      $orderitem->order_id=$order->id;
      $orderitem->address='test 101';

       $a=date("Y/m/d");
       $b=TIME($a);
       $b+=600000;
       $a=date("Y/m/d",$b);
      $orderitem->deliver=$a;
      $orderitem->save();
      $del=CartItem::where('product_id',$productId)->first();
      if ($del) {
        CartItem::destroy($del->id);
      }

       return view('order.placeorder',['item'=>$orderitem]);

    }else{
          return redirect('/login');
    }

  }




  public function store2(Request $request){
     $item=OrderItem::find($request->input("itemid"));

     $a=$request->input("adr");
     $item->address=$a;
     $item->save();
    return redirect('/order');
  }


   public function destroy($id){
       OrderItem::destroy($id);
       return redirect('/order');
     }

}
