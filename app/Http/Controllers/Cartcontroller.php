<?php

namespace App\Http\Controllers;




use App\Http\Requests;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\User;
use App\CartItem;
use App\Product;


class Cartcontroller extends Controller
{
    public function index(){
      $cart = Cart::where('user_id',Auth::user()->id)->first();
      $products = array("iphone", "ipad", "macbook","watch");
      $img=array();

      if(!$cart){
          $cart =  new Cart();
          $cart->user_id=Auth::user()->id;
          $cart->save();
      }

      $items = $cart->cartItems;
      $total=0;
      $n=0;
         foreach($items as $item){
          $total+=$item->product->price;
          $n=$n+1;
          }
          foreach ($items as $item) {
                   if($item->product->name=="Macbook") {
                       $img[]="Macbook";
                   }elseif(strpos($item->product->name,"Watch")){
                     $img[]="watch";
                   }else{
                     $a=strpos($item->product->name," ");
                     $img[]=substr($item->product->name,0,$a);
                   }

                }
      return view('cart.index',['items'=>$items,'total'=>$total,'no'=>$n,'imgar'=>$img]);
       }

       public function store($productId){
        if(Auth::check()){
        $cart = Cart::where('user_id',Auth::user()->id)->first();

        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }

        $cartItem  = new Cartitem();
        $cartItem->product_id=$productId;
        $cartItem->cart_id= $cart->id;
        $cartItem->save();

        return redirect('/cart');}else {
          return redirect('/login');
        }
      }
      public function destroy($id){
           Cartitem::destroy($id);
           return redirect('/cart'); }



}
