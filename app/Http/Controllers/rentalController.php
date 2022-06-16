<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\carRental;
use App\Http\Controllers\rentalController;
use Illuminate\Http\Request;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class rentalController extends Controller
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
            return redirect('acceptRental');
        }
        else{
            return view('car');
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
    {$rental = new carRental();
        $rental -> customers_ID =  Auth::user()->id;
        $rental -> rider_id = $request->rider_id = 0;
        $rental -> FROM = date("Y-m-d", strtotime((string)$request->from));
        $rental -> TO =  date("Y-m-d", strtotime((string)$request->to));
        $rental -> save();
        return redirect('MyRentalOrders') ;
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {$orders = carRental::where('rider_ID',0)->get();
        //$orders = DB::table('foodOrders')->where('rider_ID', 0);
        return view('carRequest', compact('orders'));
        //
    }

    public function showMyRental()
    {
        $orders = carRental::where('customers_ID', Auth::user()->id)->get();
        //$orders = DB::table('foodOrders')->where('rider_ID', 0);
        return view('sview', compact('orders'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {$data=carRental::find($id)->delete();
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
    {$data=carRental::find($id);
        $data->rider_ID = Auth::user()->id;
        $data -> save();
    return redirect('acceptRental');
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
            $data=carRental::find($id);
            $data -> delete();
            Alert::success('We have cancelled your orders!');
            return redirect('MyRentalOrders');
        }

    }
