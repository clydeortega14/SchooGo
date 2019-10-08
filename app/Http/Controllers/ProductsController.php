<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Intervention\Image\ImageManagerStatic as Image;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();

        return view('admin.pages.products.index', compact('products'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* VALIDATION */

        /* CHECK IF REQUEST HAS FILE */
        if($request->hasFile('image')){

            $filename = $this->productImage($request->file('image'));

        }else{

            $filename = 'macbook.jpg';
        }

        /* CREATE PRODUCT */
        $product = new Product;
        Product::create($product->productData($request->toArray())+['status' => true, 'image' => $filename]);

        return redirect()->route('products.index')->with('success', 'new product has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $product = Product::findOrFail($id);

        return view('guest.pages.products.show');
        
            // ->with('products', $this->products)
            // ->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.pages.products.create', compact('product'));
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
        if($request->hasFile('image')){

            $filename = $this->productImage($request->file('image'));
            
        }else{

            $recent = Product::findOrFail($id);
            $filename = $recent->image;
        }

        $product = new Product;
        Product::where('id', $id)->update($product->productData($request->toArray())+['status' => true, 'image' => $filename]);

        return redirect()->route('products.index')->with('success', 'product successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::where('id', $id)->first();
        $product->delete();

        return redirect()->route('products.index');
    }

    protected function productImage($image){

        $image       = $image;
        $filename    = rand(). '.' .$image->getClientOriginalExtension();

        $resizeImage = Image::make($image->getRealPath());
        $resizeImage->resize(300, 300);
        $resizeImage->save(public_path('assets/images/products/'.$filename));

        return $filename; 
    }



    /* GUEST */
    public function guestViewProducts()
    {
        return view('guest.pages.products.index');
    }
    public function guestViewProduct()
    {
        return view('guest.pages.products.show');
    }
}
