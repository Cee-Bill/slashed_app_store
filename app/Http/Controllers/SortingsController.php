<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\STOCK;
use App\productItem;

class SortingsController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodCats = product::all();
        $stocks = STOCK::all();
        // $products = productItem::all();
        return view('admin\sortings\catIndex',compact('prodCats','stocks'));
    
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
        $prodCats = product::all();
        $stocks = STOCK::all();

        $products = productItem::find($id)->where('product_Id',$id)->get();
        $prodCats ->find($id)->where('s_t_o_c_k_id',$id)->get();
        
        // $products = productItem::all();
        // $products = product::find($id);
        // $products = productItem::find($id)->productItems;
        // $products = product::with('productItems')->where('id',$id)->get();
        // $prodCats = STOCK::with('productList')->where('id',$id)->get();
        // $prodCats = STOCK::find($id)->productList;
        // $products = productItem::all();
        // var_dump($prodCats);
        
        return view('admin\sortings\catIndex',compact(['prodCats','stocks','products']));
        
    
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
