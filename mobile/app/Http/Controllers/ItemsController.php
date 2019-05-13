<?php

namespace App\Http\Controllers;
use App\Items;
use Illuminate\Http\Request;
Use DB;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
          $item = DB::table ('items')->get();
         return view ('pages/itemslist', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         
        $items =new items;

        $picInfo = $request->file ('image');
        $picName = $picInfo->getClientOriginalName();
        $picfolder = "gallery/imgs/";
        $picInfo->move($picfolder,$picName);
        $picUrl=$picfolder.$picName;
        if (items::where('image', '=', $picUrl)->exists())
        {

            return redirect('pages/additems')->with('imageNameExits', 'image file name already exits');
        }
        else
        {
        $items->add_title=$request->add_title;
        $items->product_name=$request->product_name;
        $items->model=$request->model;
        $items->description=$request->description;
        $items->price=$request->price;
        $items->price_negotiation=$request->price_negotiation;
        $items->condition=$request->condition;
        $items->used_for=$request->used_for;
        $items->image=$picUrl;
        $items->documentation=$request->documentation;
        $items->sim_slot=$request->sim_slot;
        $items->screen_size=$request->screen_size;
        $items->smatphone_os=$request->smatphone_os;
        $items->back_camera=$request->back_camera;
        $items->font_camera=$request->font_camera;
        $items->internal_storage=$request->internal_storage;
        $items->home_delivery=$request->home_delivery;
        $items->delivery_area=$request->delivery_area;
        $items->delivery_charges=$request->delivery_charges;
        $items->warrenty_types=$request->warrenty_types;
        $items->warrenty_period=$request->warrenty_period;
        $items->warrenty_inludes=$request->warrenty_inludes;
        $items->save();
        return redirect()->to('pages/additems')->with('Success','items added');
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
          $items=Items::find($id);
     
         return view ('pages/updateitems',  ['items'=>$items]);
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
        $a=Items::find($id);
        if ($request->hasfile('image'))
         {
            app('files')->delete($a->image);
            $picInfo = $request->file('image');
            $picName = $picInfo->getClientOriginalName();
            $picfolder = "gallery/imgs/";
            $picInfo->move($picfolder,$picName);
            $picUrl=$picfolder.$picName;
            if (Items::where('image', '=', $picUrl)->exists())
            {
    
                return redirect('pages/updateitems')->with('imageNameExits', 'image file name already exits');
            }
            else
             {
                $a->image=$picUrl;
            }
        }
    
        $up_req=$request->all();
        $a->add_title=$up_req['add_title'];
        $a->product_name=$up_req['product_name'];
        $a->model=$up_req['model'];
        $a->description=$up_req['description'];
        $a->price=$up_req['price'];
        $a->price_negotiation=$up_req['price_negotiation'];
        $a->condition=$up_req['condition'];
        $a->used_for=$up_req['used_for'];
        $a->image=$up_req['image'];
        $a->documentation=$up_req['documentation'];
        $a->sim_slot=$up_req['sim_slot'];
        $a->screen_size=$up_req['screen_size'];
        $a->smatphone_os=$up_req['smatphone_os'];
        $a->back_camera=$up_req['back_camera'];
        $a->font_camera=$up_req['font_camera'];
        $a->internal_storage=$up_req['internal_storage'];
        $a->home_delivery=$up_req['home_delivery'];
        $a->delivery_area=$up_req['delivery_area'];
        $a->delivery_charges=$up_req['delivery_charges'];
        $a->warrenty_types=$up_req['warrenty_types'];
        $a->warrenty_period=$up_req['warrenty_period'];
        $a->warrenty_inludes=$up_req['warrenty_inludes'];
       
        $a->save();
        
        return redirect()->to('pages/updateitems')->withSuccess('Items updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Items::find($id);
        $items->delete();
      
        return redirect()->to('pages/itemslist')->withSuccess('Items deleted!!!');
    }
}
