@php
    use app\Models\User;
    use app\Models\Parcel;


@endphp

<style>

.parcelTable {
      border-collapse: collapse;
      border: 2px solid darkgreen;
      letter-spacing: 1px;
      font-size: 1rem;
      width: 100%;
    }

.td-parcel {
      border: 1px solid darkgreen;
      padding: 10px 20px;
      text-align: center;
}

.th-parcel{
    border: 1px solid black;
      padding: 10px 20px;
      text-align: center;
      background-color: #32de84;
}

.acceptButton-parcel {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.acceptButton-parcel {
  background-color: white;
  color: black;
  border: 2px solid #4CAF50;
}

.acceptButton-parcel:hover {
  background-color: #4CAF50;
  color: white;
}

</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Order Details') }}
        </h2>
   </x-slot>

   <div class="orderTable">
        <x-jet-authentication-card>
        <table class="parcelTable">
        <tr>
                <td class="th-parcel">Tracking Number</td>
                <td class="th-parcel">From</td>
                <td class="th-parcel">Destination</td>
                <td class="th-parcel">Name</td>
                <td class="th-parcel">Delivery Fees</td>
        </tr><br>
        @foreach($parcels as $parcel)
        @if($parcel['rider_id'] == 0)
        <tr>
                    <td class="td-parcel">{{$parcel['tracking_id']}}</td>
                    <td class="td-parcel">{{$parcel['from']}}</td>
                    <td class="td-parcel">{{$parcel['destination']}}</td>
                    <td class="td-parcel">{{User::find($parcel['cust_id'])->name}}</td>
                    <td class="td-parcel">
                        <form action={{ url('/acceptParcelOrder'.$parcel->id)}} method="POST" >
                            @csrf
                            @method('PUT')
                        <button id="acceptButton-parcel" class="acceptButton-parcel">RM {{$parcel['weight']}}</button>

                    </form>
                    </td>
        </tr>
        @endif
        @endforeach

        </table>


</div>
@include('sweetalert::alert')
</x-jet-authentication-card>
</x-app-layout>


