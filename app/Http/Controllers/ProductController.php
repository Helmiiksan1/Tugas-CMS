<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = product::orderBy('harga_barang', 'desc')->paginate(5);
        return view('product/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('harga_barang', $request->harga_barang);
        Session::flash('nama', $request->harga_barang);
        Session::flash('deskripsi', $request->harga_barang);

        $request->validate([
            'harga_barang' => 'required|numeric',
            'nama' => 'required',
            'deskripsi' => 'required',
        ],[
            'harga_barang.required' => 'Harga Barang Wajib Diisi',
            'harga_barang.numeric' => 'Harga Barang Wajib Diisi dalam Angka',
            'nama.required' => 'Nama Wajib Diisi',
            'deskripsi.required' => 'Deskripsi Wajib Diisi',
        ]);
        $data = [
            'harga_barang' => $request->input('harga_barang'),
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
        ];
        product::create($data);
        return redirect('product')->with('success', 'Berhasil Memasukan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = product::where('harga_barang', $id)->first();
        return view('product/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = product::where('harga_barang', $id)->first();
        return view('product/edit')->with('data', $data);
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
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required'
        ],[
            'harga_barang.numeric' => 'Harga Barang Wajib Diisi dalam Angka',
            'nama.required' => 'Nama Wajib Diisi',
            'deskripsi.required' => 'Deskripsi Wajib Diisi',
        ]);
        $data = [
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
        ];
        product::where('harga_barang', $id)->update($data);
        return redirect('/product')->with('success','Berhasil Melakukan Update Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        product::where('harga_barang', $id)->delete();
        return redirect('/product')->with('success','Berhasil Hapus Data');
    }
}
