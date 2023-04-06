<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        //$data = product::all();
        $data = product::orderBy('harga_barang', 'desc')->paginate(1);
        return view('product/index')->with('data', $data);
    }
    function detail($id)
    {
        //return '<h1>Saya Product dari Controller dengan Id $id</h1>';
        $data = product::where('harga_barang', $id)->first();
        return view('product/show')->with('data', $data);
    }
}
