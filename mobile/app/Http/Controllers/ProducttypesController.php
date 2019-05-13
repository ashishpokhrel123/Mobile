<?php
namespace App\Http\Controllers;
use App\Producttypes;
use Illuminate\Http\Request;
use DB;
class ProducttypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producttypes = DB::table ('producttypes')->get();
        return view ('pages/producttype', compact('producttypes'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $producttypes =new producttypes;
        $producttypes->producttypename=$request->producttypename;   
        $producttypes->save();
        return redirect()->to('pages/producttype')->with('Success','Product type  name added');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producttype  $producttype
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {    
       $producttypes= producttypes::find($id);
        return view ('pages/producttypeupdate', ['producttypes'=>$producttypes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producttype  $producttype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $ptype=producttypes::find($id);   
        $up_req=$request->all();
        $ptype->producttypename=$up_req['producttypename'];
        $ptype->save();
        return redirect()->to('pages/producttype')->withSuccess('Product type name updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producttype  $producttype
     * @return \Illuminate\Http\Response
     */
    public function destroy($producttypeid)
    {
         $producttypes= Producttypes::Find($producttypeid);
         $producttypes->delete();
         return redirect()->to('pages/producttype')->withSuccess('Product type name deleted!!!');
    }
}
