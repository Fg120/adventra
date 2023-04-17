<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = Request()->validate([
            'name' => 'required|unique:products,name',
            'price' => 'required',
            'desc' => 'required',
            'stock_available' => 'required',
            'stock_true' => 'required',
            'photo' => 'required',
        ], [
            'name.required' => 'Masukkan nama produk!',
            'name.unique' => 'Nama produk telah dipakai!',
            'price.required' => 'Masukkan harga produk!',
            'desc.required' => 'Masukkan deskripsi produk!',
            'stock_available.required' => 'Masukkan Stock available produk!',
            'stock_true.required' => 'Masukkan Stock true produk!',
            'photo.required' => 'Upload foto produk!',
        ]);

        if ($request->photo != null) {
            $file = $request->file('photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            $photo_path = $request->file('photo')->storeAs('public/product', $filename);
            //menghapus string 'public/' karena dapat menyulitkan pemanggilan di blade.

            $photo_path = str_replace('public/', '', $photo_path);
            try {
                $data = [
                    'name' => $request->name,
                    'price' => $request->price,
                    'desc' => $request->desc,
                    'stock_available' => $request->stock_available,
                    'stock_true' => $request->stock_true,
                    'photo' => $photo_path,
                ];
                $products = Product::create($data);

                Alert::success('Product berhasil ditambahkan');
                return redirect('/admin/product');
            } catch (\Throwable $th) {
                //throw $th;
            }
        } 
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
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($request->id_photo != '') {
            Storage::delete('public/' . $product->id_photo);
            $file = $request->file('id_photo');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            $photo_path = $request->file('id_photo')->storeAs('public/product/id', $filename);
            //menghapus string 'public/' karena dapat menyulitkan pemanggilan di blade.
            $photo_path = str_replace('public/', '', $photo_path);
        }

        $product->name = $request->name;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->stock_available = $request->stock_available;
        $product->stock_true = $request->stock_true;
        if ($request->id_photo != '') {
            $product->id_photo = $photo_path;
        }
        $product->save();

        Alert::success('Product berhasil diupdate');
        return redirect()->route('admin.product.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product->photo != null) {
            try {
                Storage::delete('public/' . $product->photo);
                $product->delete();
            } catch (\Throwable $th) {
                //throw $th;
            }
        } elseif ($product->photo == null) {
            try {
                $product->delete();
            } catch (\Throwable $th) {
                //throw $th;
            }
        }
        Alert::success('Product berhasil dihapus');
        return redirect()->route('admin.product.index');
    }
}
