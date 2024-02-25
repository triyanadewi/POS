<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodbeverage(){
        return view('products')
            ->with('category','Food and Beverage')
            ->with('products',['Nasi Goreng','Mie Goreng','Es Teh', 'Es Jeruk']);
    }

    public function beautyhealth(){
        return view('products')
            ->with('category','Beauty Health')
            ->with('products',['Facial Wash','Toner','Moisturizer','Sunscreen','Acne Patch']);
    }

    public function homecare(){
        return view('products')
            ->with('category','Home Care')
            ->with('products',['Deterjen','Pewangi Pakaian','Sabun Cuci Piring']);
    }

    public function babykid(){
        return view('products')
            ->with('category','Baby Kid')
            ->with('products',['Sabun','Minyak Telon','Parfum','Bedak']);
    }
}
