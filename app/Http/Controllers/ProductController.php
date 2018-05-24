<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $products = product::All();
        $data = array(
            'title'     => 'Data Product',
            'products'   => $products,
            'no'        => 1
        );
        return view('product.test',$data);
    }
    public function index()
    {
        $products = product::All();
        $data = array(
            'title'     => 'Data Product',
            'products'   => $products,
            'no'        => 1
        );
        return view('product.test',$data);
    }


    public function tambah()
    {
        $data = array('title'   => 'Add Product');
        return view('product.tambah',$data);
    }


    public function store()
    {
        product::create([
            'makanan'           => request('makanan'),
            'minuman'           => request('minuman'),
            'harga_makanan'     => request('harga_makanan'),
            'harga_minuman'     => request('harga_minuman')
        ]);
        return redirect('/product/show');
    }


    // public function show($id)
    // {
    //     //
    // }


    // public function edit(product $product)
    // {
    //     $data = array(
    //         'title'         => 'Edit Product',
    //         'product'      => $product
    //     );
    //     return view('product.edit',$data);
    // }

    public function edit(product $product)
    {
        $data = array(
            'title'         => 'Edit Product',
            'product'      => $product
        );
        return view('product.update',$data);
    }

    public function update(product $product)
    {
        $product->update([
            'makanan'           => request('makanan'),
            'minuman'           => request('minuman'),
            'harga_makanan'     => request('harga_makanan'),
            'harga_minuman'     => request('harga_minuman')
        ]);
        return redirect('/product/show');
    }

    
    public function destroy(product $product)
    {
        $product->delete();
        return redirect()->route('product.test');
    }
}
