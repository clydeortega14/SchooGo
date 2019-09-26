<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;

class OrdersController extends Controller
{

    public function __construct()
    {
        $this->carts = Cart::orderBy('created_at', 'desc')->get();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('guest.pages.orders')

            ->with('carts', $this->carts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //check if product already exist in the cart
        $item = Cart::findOrFail($request->prod_id);

        if(!is_null($item)){

            return redirect()->route('products.show', $request->prod_id)->with('error', 'Item has already been added to your cart, please select another one');
        }

        $total = $request->prod_price;

        if($request->quantity > 1){

            //MULTIPLY PRODUCT PRICE TO QUANITY
            $total*=$request->quantity;
        }

        Cart::create([
            
            'product_id' => $request->prod_id,
            'quantity'   => $request->quantity,
            'total'      => $total
        ]);

        return redirect()->route('orders.index')->with('message', 'New Item has been added to your cart');

        

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
