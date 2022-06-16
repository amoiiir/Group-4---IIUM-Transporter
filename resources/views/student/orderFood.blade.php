<title>TransportIIUM</title>
<body onload="countTotal()">

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Order Food') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="/makeOrder" method="POST">
                    @csrf
                    <div class="mt-4 food-forms" id=food-destination>
                        <x-jet-label for="food_destination" value="{{ __('Deliver to') }}" />
                        <x-jet-input id="food_destination" class="block mt-1" type="text" name="food_destination" required/>
                    </div>

                    <div class="mt-4 food-forms">
                        <x-jet-label for="vendor" value="{{ __('Order From') }}" />
                        <select required select name="vendor" id="vendor" class=" block mt-1 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option value="" disabled selected>Select mahallah</option>
                            <option value="Siddiq">Siddiq</option>
                            <option value="Ali">Ali</option>
                            <option value="Saffiyah">Saffiyah</option>
                            <option value="Hafsah">Hafsah</option>
                        </select>
                    </div>

                    <br>
                    <hr>
                   <strong><p class="mt-4 food-menu">Menu</p></strong>
                    {{-- grid --}}

                    <div class="mt-4 food-grid">

                        <div class="menu-item">
                            <img src="{{url('/images/shawarma.png')}}" alt="" class="food-image"/>
                        <label class="container">Shawarma</label>
                        <input type="number" class="counter" id="shawarma" value="0" name="shawarma" min="0"  onclick="countTotal()">
                        <p>RM5</p>
                        </div>

                        <div class="menu-item">
                            <img src="{{url('/images/Nasi ayam.jpg')}}" alt="" class="food-image"/>
                        <label class="container">Chicken Rice<label>
                            <input type="number" class="counter" id="chickrice" value="0" name="chickrice" min="0" onclick="countTotal()">
                            <p>RM6</p>
                        </div>

                        <div class="menu-item"></label>
                            <img src="{{url('/images/roti canai.jpg')}}" alt="" class="food-image"/>
                        <label class="container">Roti Canai
                            <input type="number" class="counter" id="canai" value="0" name="canai" min="0"  onclick="countTotal()">
                            <p>RM1</p>
                        </div>

                        <div class="menu-item"></label>
                            <img src="{{url('/images/burger.jpg')}}" alt="" class="food-image"/>
                            <label class="container">Burger
                                <input type="number" class="counter" id="burger" value="0" name="burger" min="0"  onclick="countTotal()">
                                <p>RM5</p>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <input type="number" id="orderTotal" name="orderTotal" value="0" style="display: none">
                        <p style="text-align: center" id="display">Total: RM</p>
                        <div class="food-center">
                            <button class="food-button">Order Now</button>
                            <a href="{{url('/MyFoodOrders')}}" class="link-button-food">View my orders</a>
                        </div>

                    </div>
                    {{-- grid --}}
                </form>
            </div>
        </div>
    </div>

</x-app-layout>

<script>
    function check(idVal){
        var obj = document.getElementByName(idVal);
        if(obj.style.display == none){
            // obj.disabled = false;
            obj.style.display = "block";
            obj.value = '0';

        }
        else{
            // obj.disabled = true;
            obj.style.display = "none";
        }
    }



    function countTotal(){
        var shawarma = 5*parseFloat(document.getElementById("shawarma").value);
        var chicken = 6*parseFloat(document.getElementById("chickrice").value);
        var canai = 1*parseFloat(document.getElementById("canai").value);
        var burger = 3*parseFloat(document.getElementById("burger").value);

        document.getElementById("orderTotal").value = shawarma+chicken+canai+burger;
        document.getElementById("display").innerHTML = "Total: RM" + document.getElementById("orderTotal").value;

        // total = shawarma+chicken+canai+burger;
        //shawarma = 15;
        // shawarma = 15;
        //total = (shawrma_prc*shawarma)+(chicken_prc*chickrice)+(canai_prc*canai)+(burger_prc*burger);
    }
</script>
@include('sweetalert::alert')
