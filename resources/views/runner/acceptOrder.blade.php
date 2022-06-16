@php

use App\Models\User;

@endphp

<title>TransportIIUM</title>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accept Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table class="food-table">

                    <tr class="food-table">
                        <td class="food-td">Items</td>
                        <td class="food-td">From</td>
                        <td class="food-td">To</td>
                        <td class="food-td">Customer Name</td>
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
                        <td class="food-td">{{User::find($data->cust_ID)->name}}</td>
                        <td class="food-td">
                            <button onclick="showPopup({{$data->id}})">Accept</button>
                            {{-- <form action={{url('/acceptFoodOrder'.$data->id)}} method="POST">
                                @csrf
                                @method("PUT")
                                <button class="accept-button">Accept</button>
                            </form> --}}

                                <form action={{url('/acceptFoodOrder'.$data->id)}} method="POST" class="form-container">
                                @csrf
                                @method("PUT")

                                {{-- <button type="submit" class="btn" onclick="showPopup({{$data->id}})">Accept Order</button> --}}

                                <div id="{{$data->id}}" class="popup">
                                <div class="blocker" onclick="hidePopup({{$data->id}})"></div>
                                <div class="contents">

                                <label for="delivery_charge"><b>Please enter delivery charge</b></label>
                                <x-jet-input id="delivery_charge" name="delivery_charge" type="text" required/>
                                <button type="submit" class="button-green">Accept order</button>
                                </div>

                                </div>
                                </form>

                        </td>
                    </tr>
                    @endforeach

                </table>

            </div>
        </div>

    </div>

</x-app-layout>

<script>

// function openForm(idVal) {
//   document.getElementById(idVal).style.display = "block";
// }

// function closeForm(idVal) {
//   document.getElementById(idVal).style.display = "none";
// }

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


