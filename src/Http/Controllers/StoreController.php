<?php

namespace Apackage\Astore\Http\Controllers;

use Apackage\Astore\Models\Product;
use Apackage\Astore\Models\Order;
use Apackage\Astore\Models\Product_Order;
use Apackage\Astore\Models\User_Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class StoreController extends Controller
{
    public function index(){
       $products =  Product::all();
       
        return view('astore::store')->with('products',$products);
    }
    public function showorder(){
        
        
         return view('astore::order');
     }
    
     public function completeorder(Request $request){
        
      
        
            $order = new Order([
                'user_id'=>1,
                'town'=>$request->town,
                'area'=>$request->area,
                'street'=>$request->street,
                'house'=>$request->house,
                'apartment'=>$request->apartment,
                'phone_number'=>$request->phone,
            ]);
             $order->save();

            $orderNumber =  DB::table('orders')->latest('id')->where('user_id','=',1)->get()->first();
            $products = User_Product::where('user_id',1)->get();
            foreach($products as $product){
                
                 $info = new Product_Order([
                    'order_id'=>$orderNumber->id,
                    'product_id'=>$product->product_id,
                    'count'=>$product->count,
                ]);
                $info->save();
            }

            User_Product::where('user_id',1)->delete();
        
            $products =  Product::all();
            return redirect('store')->with('products',$products);
    }
    public function send(Request $request){
       
        return $request->all();
    }
    public function addtocart(Request $request){
        $isEmpty = User_Product::where('user_id',1)->where('product_id',$request->id);
        if($isEmpty ){
            $cart = new User_Product([
                'user_id'=>1,
                'product_id'=>$request->id,
                'count'=>1,
            ]);
            $cart->save();
        }
        $products =  Product::all();
        return redirect('store')->with('products',$products);
    
    }
     public function showcart(){
        
        $products =  User_Product::where('user_id',1)->get();
        $info = DB::table('products')
        ->join('user_product', 'products.id' , '=', 'user_product.product_id')
        ->where('user_product.user_id', '=', 1)
       ->get();
        return view('astore::cart')->with('products',$info);
     }
     public function cartupdate(Request $request){
        User_Product::where('product_id',$request->id)->where('user_id',1)->update(['count'=>$request->quantity]);
        $info = DB::table('products')
        ->join('user_product', 'products.id' , '=', 'user_product.product_id')
        ->where('user_product.user_id', '=', 1)
       ->get();
       return redirect('cart')->with('products',$info);
     }


     public function cartremove(Request $request){
        User_Product::where('product_id',$request->id)->where('user_id',1)->delete();
        $info = DB::table('products')
        ->join('user_product', 'products.id' , '=', 'user_product.product_id')
        ->where('user_product.user_id', '=',1)
       ->get();
       return redirect('cart')->with('products',$info);
      }
}
