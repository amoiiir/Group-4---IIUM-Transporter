<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\parcelController;
use App\Models\Parcel; //relate tables from Parcel model
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class parcelController extends Controller
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
            return redirect('/acceptParcel');

        }
        else{
            return view('student.parcel');
        }

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

        $parcel = new Parcel();
        $parcel->tracking_id=$request->trackingId;
        $parcel->cust_id = Auth::user()->id;
        // $parcel->cust_name= Auth::user()->name;
        $parcel->from = $request->from;
        $parcel->destination = $request->destination;
        $parcel->weight = $request->weight;
        $parcel->rider_id = $request->rider_id = 0;
        $parcel->save();

        $data= Parcel::all();
        return redirect('/myParcelOrder');

    }

    public function showOrder(){
        $parcel = Parcel::where('cust_id', Auth::user()->id)->get();
        // $parcel = Parcel::where('cust_name', Auth::us    er()->name)->get();
        return view('student.myOrder', compact('parcel'));
        // return "hello!";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data= Parcel::all();
        return view('runner.acceptParcel', ['parcels' => $data]);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($parcel_id)
    {
        $data=Parcel::find($parcel_id)->delete();
        // $data->delete();
        return redirect() -> back();
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
        $data=Parcel::find($id);
        $data->rider_id = Auth::user()->id;
        $data -> save();
        Alert::success('You have accepted a parcel!');
        return redirect('/acceptParcel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Parcel::find($id);
        // $data->cust_id = Auth::user()->id;
        $data -> delete();
        Alert::success('You have cancelled a parcel!');
        return redirect('/myParcelOrder');
    }

}
