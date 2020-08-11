<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

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
        
        $products=Product::paginate(15);
        return view('dashboard.products.product_list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::all();
        return view('dashboard.products.create',compact('categories'));
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
        // dd($request->file('logo'));
    
    
        $newProduct= new Product(); 


            if($request->hasFile('logo'))
            {
            
                $file = $request->file('logo');
                $extension1 =$request->file('logo')->getClientOriginalExtension();
                $logoname = rand(11111111, 99999999). '.' . $extension1;
                $fullPath1 = $logoname; 
                $request->file('logo')->move(
                    base_path() . '/public/assets/images/clients/', $logoname
                );
            }
    
        if($request->hasFile('image'))
        {
            
            $file = $request->file('image');
            $extension =$request->file('image')->getClientOriginalExtension();
            $imagename = rand(11111111, 99999999). '.' . $extension;
            $fullPath2 = $imagename;
        
            $request->file('image')->move(
                base_path() . '/public/assets/images/announce/', $imagename
            );
        } 
     

        $yt_url = $request->viedo;
   $url_parsed_arr = parse_url($yt_url);
   if ($url_parsed_arr['host'] == "www.youtube.com" && substr($url_parsed_arr['path'], 0,6) == "/embed" && substr($url_parsed_arr['path'], 6) != "") {
    $newProduct->viedo=$request->viedo;
   } else {
    $newProduct->viedo="";
   }

        
        
        $newProduct->name=$request->name;
        $newProduct->client=$request->client;
        $newProduct->viedo=$request->viedo;
        $newProduct->logo=$logoname;
        $newProduct->image=$imagename;
        $newProduct->category_id=$request->category;
        $newProduct->save();
    
        
        return redirect()->back()->with('message', 'IT WORKS!');
    
       
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
        dd($id);
        $product =Product::where('id',$id)->first();
        $products->delete();
        return redirect()->back()->with('message', 'deleted successfly!');

    }
}
