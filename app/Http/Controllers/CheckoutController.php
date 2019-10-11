<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Order;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Product;

class CheckoutController extends Controller
{

    public function __construct()
    {
        $this->cart = Cart::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::where('user_id', auth()->user()->id)
            ->where('confirmed', false)
            ->orderBy('created_at', 'desc')->get();

        return view('guest.pages.checkout')->with('carts', $carts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = auth()->user();
        
        // USER VALIDATION
        $this->validation($request);

        DB::beginTransaction();

        try {

            // CHECK IF USER INFORMATION IS NULL IN DATABASE  
            if(is_null($user->firstname) || is_null($user->lastname) || is_null($user->contact) || is_null($user->address)){

                User::where('id', $user->id)->update([

                    'firstname' => $request->firstname,
                    'lastname'  => $request->lastname,
                    'contact'   => $request->contact,
                    'address'   => $request->address

                ]);
            }

            // STORE ORDERS
            $order = Order::create($this->orderData($request->toArray()));

            if($order){

                foreach($order->user->carts as $userCart) {

                    if($userCart->confirmed == false){

                        $products = Product::where('id', $userCart->product_id)->get();

                        foreach($products as $product){
                            //GET REMAINING PRODUCT QUANTITY
                            $totalQty = $product->quantity - $userCart->quantity;
                            //UPDATE PRODUCTS QUANTITY
                            Product::where('id', $userCart->product_id)->update(['quantity' => $totalQty]);
                        }

                        //UPDATE CART TO CONFIRMED
                        Cart::where('user_id', $userCart->user_id)
                            ->where('confirmed', false)
                            ->update(['confirmed' => true]);
                    }
                }
            }
            
        } catch (Exception $e) {
            
            DB::rollBack();

            return back()->with('message', 'Oops! something went wrong');
        }

        DB::commit();

        return redirect()->route('orders.index')->with('success', 'Thank you for purchasing with us');
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
    protected function validation(Request $request)
    {
        return $this->validate($request, [

            'firstname'      => 'required',
            'lastname'       => 'required',
            'contact'        => 'required',
            'address'        => 'required',
            'location'       => 'required', 
            'contact_person' => 'required',
            'contact_number' => 'required'

        ]);
    }
    protected function orderData(Array $data)
    {
        $user = auth()->user();

       return [

            'user_id' => $user->id,
            'order_number' => $user->id.'-'.date('Ymd'),
            'description' => 'Online Shopping',
            'total_price' => $data['total_price'],
            'address' => $data['location'],
            'contact_person' => $data['contact_person'],
            'contact_number' => $data['contact_number'],
            'status' => 1
        ];
    }
}
