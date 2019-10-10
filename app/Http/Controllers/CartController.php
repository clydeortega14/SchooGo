<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::orderBy('created_at', 'desc')->get();
        
        return view('guest.pages.carts.index')

            ->with('carts', $carts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $total = $request->prod_price;

        if($request->quantity > 1){

            //MULTIPLY PRODUCT PRICE TO QUANITY
            $total*=$request->quantity;
        }

        $item = Cart::where('product_id', $request->prod_id)->where('user_id', auth()->user()->id)->first();

        if(!is_null($item)){

            $totalQty = $item->quantity + $request->quantity;

            Cart::where('product_id', $request->prod_id)->where('user_id', auth()->user()->id)->update([
                'quantity' => $totalQty,
                'total' => $request->prod_price * $totalQty
            ]);

            return redirect()->route('carts.index')->with('success_message', 'Item already exist, it has been updated');
        }

        Cart::create([

            'user_id' => auth()->user()->id,
            'product_id' => $request->prod_id,
            'quantity'   => $request->quantity,
            'total'      => $total,
            'confirmed'  => false

        ]);

        return redirect()->route('carts.index')->with('success_message', 'New Item has been added to your cart');
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
