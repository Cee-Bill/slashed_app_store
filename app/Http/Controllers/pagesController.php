<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productItem;

class pagesController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function hairs() {
        return view('pages.hairs');
    }

    public function garments() {
        $garments = productItem::all();
        return view('pages.garments', compact('garments'));
    }

    /**
     * @return mixed
     */
    public function hairItem() {
        return view('pages.hairItem');
    }

    
}
