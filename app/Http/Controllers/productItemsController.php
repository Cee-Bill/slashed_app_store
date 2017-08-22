<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\productsController;
// use App\Http\Controllers\productsController;
use Illuminate\Database\Eloquent\Collection;
use App\product;
use App\productItem;

// $table='product_items';

class productItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = productItem::all();
        return view('admin.productItem.indexItem',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $productsCat=productsController::pluck('name','id');
        $productsCat = product::pluck('name','id')->all();
        return view('admin.productItem.create',compact('productsCat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Retreiving All form input
        $formInput = $request->except('image');


        //Validation Rules
        $this->validate($request, [
            'productId' => 'required',
            'name' => 'required',
            'colour' => 'required',
            'sizeLen' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:10000',
            'image2' => 'required|image|mimes:png,jpg,jpeg|max:10000',
            'image3' => 'nullable|image|mimes:png,jpg,jpeg',
            'status' => 'required'
        ]);


        // Retreiving Uploaded Images seperately
        $image=$request->image;
        $image2=$request->image2;
        $image3=$request->image3;
        if($image) {
            $imageName = $image->getClientOriginalName();
            $image->move('img/adminProdItem', $imageName);
            $formInput['image']=$imageName;
        }
        if($image2) {
            $imageName2 = $image2->getClientOriginalName();
            $image2->move('img/adminProdItem', $imageName2);
            $formInput['image2']=$imageName2;
        }
        if($image3) {
            $imageName3 = $image3->getClientOriginalName();
            $image3->move('img/adminProdItem', $imageName3);
            $formInput['image3']=$imageName3;
        }


        productItem::create($formInput);
        return redirect()->route('productItem.index');
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
