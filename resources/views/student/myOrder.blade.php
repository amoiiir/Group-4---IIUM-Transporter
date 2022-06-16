@php
    use app\Models\User;
    use app\Models\Parcel;


@endphp

<style>

.parcelTable {
      border-collapse: collapse;
      border: 2px solid black;
      letter-spacing: 1px;
      font-size: 1rem;
      width: 100%;
      radius: 0.8rem;
    }

    .th-parcel{
      border: 1px solid black;
      padding: 10px 20px;
      text-align: center;
      background-color: lightblue;
    }

    .td-parcel {
      border: 1px solid black;
      padding: 10px 20px;
      text-align: center;
    }

    .acceptButton-back {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 2px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 20px;
        }

        .acceptButton-back {
        background-color: white;
        color: black;
        border: 2px solid #0e3267;
        }

        .acceptButton-back:hover {
        background-color:#0e3267;
        color: white;
        }

        .acceptButton-cancel {
        background-color: #ff0000; /* Green */
        border: none;
        color: white;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 2px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 20px;
        }

        .acceptButton-cancel {
        background-color: white;
        color: black;
        border: 2px solid #ff0000;
        }

        .acceptButton-cancel:hover {
        background-color:#ff0000;
        color: white;
        }


</style>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Order Details') }}
        </h2>
   </x-slot>
        <x-jet-authentication-card>

        <table class="parcelTable">
        <tr>
                <th class="th-parcel">Tracking Number</th>
                <th class="th-parcel">From</th>
                <th class="th-parcel">Destination</th>
                <th class="th-parcel">Price</th>
                <th class="th-parcel">Runner Name</th>
                <th class="th-parcel"></th>
        </tr><br>
        @foreach ($parcel as $parcels)
        <tr>
                <td class="td-parcel">{{$parcels['tracking_id']}}</td>
                <td class="td-parcel">{{$parcels['from']}}</td>
                <td class="td-parcel">{{$parcels['destination']}}</td>
                <td class="td-parcel">{{$parcels['weight']}}</td>
                <td class="td-parcel">
                @if($parcels->rider_id == 0)
                     No runner yet
                @else
                    {{User::find($parcels->rider_id)->name}}
                @endif
                </td>
                <td class="td-parcel">
                    @if($parcels->rider_id == 0)
                    <a href="{{ url('/cancelParcelOrder'.$parcels->id)}}">
                        @csrf
                        {{-- @method('delete') --}}
                    <button id="acceptButton" class="acceptButton-cancel">Cancel</button>
                    @else
                        Order Delivered
                    @endif
                </a>
                </td>

        </tr>

        @endforeach
        </table><br>



    <form action="parcel">
        <div class="flex items-center justify-end mt-4">


            <button class="acceptButton-back">
                {{ __('Back') }}
            </button>
        </div>
    </form>
    @include('sweetalert::alert')
</x-jet-authentication-card>
</x-app-layout>
