<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
class ProductController extends Controller
{
        //   show product
     public function showproduct()
    {
        $category = category::all();
return view('product',compact('category'));
    }
    // addproduct
      public function addprod(Request $req)
    {
        $product["pro_Name"] = $req ->input('prod_name');
        $product["pro_Desc"] = $req ->input('prod_desc');
        $product["pro_price"] = $req ->input('prod_price');
        $product["pro_cate_id"] = $req ->input('prod_select');
        product::create($product);
        return redirect()->route('product');
    }
             // fatech product
    public function getprod()
    {
        $product = product::all();
return view('disprod',compact('product'));
    }



             // delete product

             public function delprod($pro_ID)
             {
                 product::where('pro_ID',$pro_ID)->delete();
         return redirect()->route('disprod');
             }

                 // update product

                 public function updateprod($pro_ID)
                 {
                   $product =  product::where('pro_ID',$pro_ID)->get();
                   $category = category::all();
             return view('updateprod',compact('product','category'));
                 }

            }

