<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\transport;
use App\Http\Controllers\transportController;
use Illuminate\Http\Request;
use Carbon\Carbon;

class transportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {$role = Auth::user()->role_ID;

        if($role == 'Runner'){
            //return view('runner.acceptOrder');
            return redirect('acceptTransport');
        }
        else{
            return view('requestPickup');
        }
        //
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
    {$pickups = new transport();
        $pickups -> customers_ID =  Auth::user()->id;
        $pickups -> rider_id = $request->rider_id = 0;
        $pickups -> from = $request->from;
        $pickups -> to =  $request->to;
        $pickups -> passenger = $request->passengers;
        $pickups -> save();
        return redirect('myBookings') ;
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {$pickupOrder = transport::where('rider_ID',0)->get();
        //$orders = DB::table('foodOrders')->where('rider_ID', 0);
        return view('acceptPickup', compact('pickupOrder'));
        // return 'Hello';
        //
    }

    public function showMyBookings()
    {
        $pickupOrder = transport::where('customers_ID', Auth::user()->id)->get();
        //$orders = DB::table('foodOrders')->where('rider_ID', 0);
        return view('cancelRequest', compact('pickupOrder'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {$data=transport::find($id)->delete();
        // $data->delete();
        return redirect() -> back();
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
    {$data=transport::find($id);
        $data->rider_ID = Auth::user()->id;
        $data -> save();
    return redirect('acceptTransport');
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
            $data=transport::find($id);
            // $data->cust_id = Auth::user()->id;
            $data -> delete();
            return redirect('myBookings');
        }

    }
