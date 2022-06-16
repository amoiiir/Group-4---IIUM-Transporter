@php

use App\Models\User;

@endphp

<title>TransportIIUM</title>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table class="food-table">

                    <tr class="food-table">
                        <td class="food-td">Order</td>
                        <td class="food-td">From</td>
                        <td class="food-td">To</td>
                        <td class="food-td">Total (RM)</td>
                        <td class="food-td">Rider Name</td>
                        <td class="food-td">Delivery Charge (RM)</td>
                        <td class="food-td">Action</td>
                    </tr>

                    @foreach ($orders as $data)

                    <tr class="food-table">
                        <td class="food-td">
                        @php
                        $pieces = explode(" ",$data->food)
                        @endphp

                        @foreach ($pieces as $item)
                        @if ($item != 0)
                        @switch($loop->index)
                            @case(0)
                                Shawarma x {{$item}}
                                @break
                            @case(1)
                                Chicken Rice x {{$item}}
                                @break
                            @case(2)
                                Roti Canai x {{$item}}
                                @break
                            @case(3)
                                Burger x {{$item}}
                                @break
                            @default
                        @endswitch
                        <br>
                        {{-- <br>{{$item}} --}}
                        @endif
                        @endforeach
                        </td>
                        <td class="food-td">{{$data->vendor}}</td>
                        <td class="food-td">{{$data->food_destination}}</td>
                        <td class="food-td">{{$data->order_total}}</td>
                        <td class="food-td">
                            @if ($data->rider_ID == 0)
                                pending
                            @else
                                {{User::find($data->rider_ID)->name}}
                            @endif
                            </td>
                        <td class="food-td">
                            @if ($data->rider_ID != 0)
                            {{$data->delivery_charge}}
                            @else
                            -
                            @endif
                            </td>
                        <td class="food-td">
                            @if ($data->rider_ID == 0)
                            <button onclick="showPopup({{$data->id}})">Cancel</button>

                            <div id="{{$data->id}}" class="popup">
                            <div class="blocker" onclick="hidePopup({{$data->id}})"></div>
                            <div class="contents-cancel">
                            <label><b>Are you sure to cancel the order?</b></label>
                            <br><br><div class="button-green"><a href={{url('/cancelFoodOrder'.$data->id)}}>Yes, cancel my order</a></div>
                            <div class="button-red"><button onclick="hidePopup({{$data->id}})">No, don't cancel my order</button></div>
                            </div>

                            </div>
                            @else
                            Order Delivered
                            @endif

                        </td>
                    </tr>


                    @endforeach

                </table>


            </div>
        </div>

    </div>
    <div class="food-center">
    <a href="/makeOrder" class="food-button-middle">Create a New Order</a>
    </div>
</x-app-layout>

<script>

    function openForm(idVal) {

      document.getElementById(idVal).style.display = "block";

    }

    function closeForm(idVal) {
      document.getElementById(idVal).style.display = "none";
    }

    function showPopup(idVal) {
        const popup = document.getElementById(idVal);
      popup.classList.add('open');
    }
    function hidePopup(idVal) {
        const popup = document.getElementById(idVal);
      popup.classList.remove('open');
    }

    </script>
    @include('sweetalert::alert')

