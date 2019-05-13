<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
Use DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /*veiwing data in home page*/

     protected $image_dir = "upload/pics";
     public function show()
     {
         $product=new Products();
         $product = $product->get();
         return view('pages.index', [
             'product' => $product
         ]);
 
     }
    public function index()
    {

        $producttypes=DB::table('producttypes')->get();
        $products=DB::table('product')->join('producttypes', 'producttypes.producttypeid','=','product.productid')->get();
        return view ('/adminpanel',compact('producttypes','products'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $products=new products;

        $picInfo = $request->file ('image');
        $picName = $picInfo->getClientOriginalName();
        $picfolder = "upload/pics/";
        $picInfo->move($picfolder,$picName);
        $picUrl=$picfolder.$picName;
        if (products::where('image', '=', $picUrl)->exists())
        {

            return redirect('adminpanel')->with('imageNameExits', 'image file name already exits');
        }
        else
        {
    
        $products->productname=$request->productname;
        $products->model=$request->model;
        $products->Price=$request->Price;
        $products->description=$request->description;
        $products->image=$picUrl;
        $products->producttypeid=$request->producttypeid;
    
      

        $products->save();
        return redirect()->to('adminpanel')->with('Success','product added');
        }
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
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    /*public function show(Products $products)
    {
        
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $products = products::find($id);

        $producttypes = new producttypes();
        $producttypes = $producttypes->get();
        return view('pages/updateproduct',['products'=>$products],[
            'producttypename'=>$producttypename]);
        // $product= Products::find($id);
        // return view ('pages/updateproduct', ['product'=>$product]);
    }

    /**
     * 
     * 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $pro=products::find($id);
        if ($request->hasfile('image'))
         {
            app('files')->delete($pro->image);
            $picInfo = $request->file ('image');
            $picName = $picInfo->getClientOriginalName();
            $picfolder = "upload/pics/";
            $picInfo->move($picfolder,$picName);
            $picUrl=$picfolder.$picName;
            if (products::where('image', '=', $picUrl)->exists())
            {
    
                return redirect('adminpanel')->with('imageNameExits', 'image file name already exits');
            }
            else
             {
                $pro->image=$picUrl;
            }
        }
    
        $up_req=$request->all();

        $pro->productname=$up_req['productname'];
        $pro->model=$up_req['model'];
        $pro->Price=$up_req['Price'];
        $pro->model=$up_req['model'];
        $pro->description=$up_req['description'];

        $pro->save();
        
        return redirect()->to('/adminpanel')->withSuccess('Product updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($productid)
    {
        $products = products::Find($productid);
        $products->delete();
      
        return redirect()->to('/adminpanel')->withSuccess('Product deleted!!!');
    }


}
