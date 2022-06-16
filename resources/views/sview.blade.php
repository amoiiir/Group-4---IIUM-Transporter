@php
use App\Models\User;
@endphp

<x-app-layout>

    <style>
        *{
                        font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-serif	font-family: ui-serif, Georgia, Cambria, "Times New Roman", Times, serif;
            font-mono	font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        h1{
            text-align:center;
              color: black;
              font-size: 250%;
        }

        .rentalTable {
          border-collapse: collapse;
          width: 80%;
          margin-left: 200px;
          padding: 16px;
          box-sizing: border-box;
        }

        input[type=submit], select, textarea {
        background-color: #04AA6D;
        color: white;
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        .th-rental {
          background-color:#04AA6D;
          text-align: left;
          padding: 16px;
          color: white;
        }

        .td-rental {
          text-align: left;
          padding: 16px;
        }

        tr:nth-child(even){background-color: rgb(240, 239, 239)}

        tr:nth-child(odd){background-color: white}

        /* .open-button {
          background-color:  #04AA6D;
          color: black;
          cursor: pointer;
        } */
    /*
        .btn{
          background-color: white;
          outline: white;
        } */

        input[type=submit]:hover {
        background-color: #45a049;
        }
        </style>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('My Orders') }}
    </h2>
</x-slot>
        <br>
        <table class="rentalTable">
              <tr>
                  <th class="th-rental">From</th>
                  <th class="th-rental">To</th>
                  <th class="th-rental">Runner Name</th>
                  <th class="th-rental">Vehicle Model </th>
                  <th class="th-rental">No Plat </th>
                  <th class="th-rental">Cancel</th>

                </tr>

                @foreach ($orders as $data)

                <tr>
                  <td class="td-rental"> {{$data->from}} </td>
                  <td class="td-rental"> {{$data->to}} </td>
                  {{-- <td> {{$data->customers_ID}} </td> --}}


                <td class="td-rental">
                    @if ($data->rider_ID == 0)
                    No runner yet
                    @else
                    {{User::find($data->rider_ID)->name}}
                    @endif
                </td>
                <td class="td-rental">
                    @if ($data->rider_ID ==0)
                        -
                    @else
                        {{User::find($data->rider_ID)->vehicle_model}}
                    @endif
                </td>
                <td class="td-rental">
                    @if ($data->rider_ID ==0)
                        -
                    @else
                        {{User::find($data->rider_ID)->plate_no}}
                    @endif
                </td>
                <td class="td-rental">

                @if($data->rider_ID == 0)
                  <a href="{{ url('cancelRentalOrder'.$data->id)}}">
                    @csrf
                    {{-- @method('delete') --}}
                    <button id="acceptButton" class="acceptButton">Cancel</button>
                @else
                Order Delivered
                @endif

            </a>
             </td>
                </tr>

                @endforeach

        </table>
    </x-app-layout>
