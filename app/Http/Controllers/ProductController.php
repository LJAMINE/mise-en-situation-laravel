<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {


        $products = Product::orderBy('price', 'desc')->paginate(perPage: 10);

        //sql 

        // select * 
        // from Products 
        //  order by price desc

        return view('index', compact("products"));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {


        $valid = $request->validate([

            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        Product::create($valid);

        return redirect('/');
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('/');
    }
}
