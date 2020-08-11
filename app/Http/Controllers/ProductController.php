<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImages;
use View;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function getProduct($id,$cat_id)
    {
        //
        $product=Product::find($id);

        // branding id=4
        if($cat_id==4)
        {
            $product_images=ProductImages::where('product_id',$product->id)->get();
            return view("productbrand",["product"=>$product,"product_images"=>$product_images]);
        }
        else{
        return view("product",["product"=>$product]);
        }
    }
    public function getProductsbyid($id)
    {
       
        
        $products=Product::where('category_id',$id)->get();
        
        return $products;
        
    }
    
     public function getProductwebsite($id)
    {
        
        //
        $products=Product::where('category_id',2)->get();
        // $productnext=Product::where('category_id',2)->where('id','!=',$id)->first();
        // $productlast=Product::where('category_id',2)->where('id','!=',$id)->get()->last();
        if( Product::where('category_id',2)->where('id','>',$id)->first())
        {
              $productnext=Product::where('category_id',2)->where('id','>',$id)->first();
        }
        else{
             $productnext=Product::where('category_id',2)->where('id','!=',$id)->first();
        }
          if( Product::where('category_id',2)->where('id','<',$id)->get()->last())
        {
              $productlast=Product::where('category_id',2)->where('id','<',$id)->get()->last();
        }
        else{
             $productlast=Product::where('category_id',2)->where('id','!=',$id)->get()->last();
        }
        // $productlast=Product::where('category_id',2)->where('id','!=',$id)->inRandomOrder()->get();
        $product=Product::find($id);
      
        $product_images=ProductImages::where('product_id',$product->id)->get();
        
        return view("productapp",["product"=>$product,"product_images"=>$product_images,"productnext"=>$productnext,"productlast"=>$productlast,"products"=>$products]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
