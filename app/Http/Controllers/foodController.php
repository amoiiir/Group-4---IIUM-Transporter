<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\foodOrders;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $role = Auth::user()->role_ID;

        if($role == 'Runner'){
            //return view('runner.acceptOrder');
            return redirect('/acceptOrder');
        }
        else{
            return view('student.orderFood');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('dashboard');
        //return 'This is the create function';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new foodOrders();
        $order -> food_destination = $request -> food_destination;
        $order -> vendor = $request -> vendor;
        $order -> food = (string)$request->shawarma.
                        " ".(string)$request->chickrice.
                        " ".(string)$request->canai.
                        " ".(string)$request->burger;
        $order -> cust_ID =  Auth::user()->id;
        $order -> rider_ID = 0;
        $order -> delivery_charge = 0;
        $order -> order_total = (double)$request->orderTotal;
        $order -> save();
        Alert::success('We have received your orders!');
        return redirect('/food');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $orders = foodOrders::where('rider_ID',0)->get();
        //$orders = DB::table('foodOrders')->where('rider_ID', 0);
        return view('runner.acceptOrder', compact('orders'));
    }

    public function showMyOrders()
    {
        $orders = foodOrders::where('cust_ID', Auth::user()->id)->get();
        //$orders = DB::table('foodOrders')->where('rider_ID', 0);
        return view('student.myFoodOrders', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders = foodOrders::where('cust_ID', Auth::user()->id)->get();

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
        $orders = foodOrders::find($id);
        $orders -> rider_ID = Auth::user()->id;
        $orders -> delivery_charge = $request->delivery_charge;
        $orders -> save();
        Alert::success('You have accepted an order!');
        return redirect('/acceptOrder');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = foodOrders::find($id);
        $orders -> delete();
        Alert::success('We have cancelled your orders!');
        return redirect('/MyFoodOrders');
    }
}
