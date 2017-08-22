<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\STOCK;
use App\product;
use App\productItem;

class productsController extends Controller
{
   


    /**
     * Display a listing of the resource..
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = product::all();
        return view('admin\productCat\indexCat',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin.productItem.create');
        $stock = STOCK::pluck('name','id')->all();
        return view('admin\productCat\createCat',compact('stock'));
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
        $formInput = $request->except('image');

        //Validation Rules

        $this->validate($request, [
            'stockId' => 'required',
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'featuredImg' => 'image|mimes:png,jpg,jpeg|max:10000',
            'status' => 'required'
        ]);


        //image upload
        $image=$request->featuredImg;
        if($image) {
            $imageName = $image->getClientOriginalName();
            $image->move('img/adminProdCat', $imageName);
            $formInput['featuredImg']=$imageName;
        }


        product::create($formInput);
        return redirect()->route('product.index');
        
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
