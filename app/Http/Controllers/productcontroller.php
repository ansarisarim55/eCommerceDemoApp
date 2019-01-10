<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartItem;
use App\Product;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class productcontroller extends Controller
{
    public function showitem($id){
        $product=Product::find($id);
       return view('product.show',['product'=>$product]);

    }
    public function prosearch(Request $request){
       $key=$request->input('keyword');
       $product=Product::where('name','LIKE','%'.$key.'%')->get();

       $products = array("iphone", "ipad", "macbook","watch");
       $img=array();

       foreach ($product as $item) {
                if($item->name=="Macbook") {
                    $img[]="Macbook";
                }elseif(strpos($item->name,"Watch")){
                  $img[]="watch";
                }else{
                  $a=strpos($item->name," ");
                  $img[]=substr($item->name,0,$a);
                }

             }


      return view('product.show',['item'=>$product,'k'=>$key,'imgar'=>$img]);

  }

}
