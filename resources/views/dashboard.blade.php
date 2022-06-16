{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout> --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('TransportIIUM') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
    <head>
        <style>
            * {
                box-sizing: border-box;
            }

            .column {
                float: left;
                width: 25%;
                padding: 10px;
            }

            .row::after {
                content: "";
                display: table;
                clear: both;
            }

            .row {
                display: flex;
            }

            .column {
                flex: 25%;
                padding: 10px;
            }

            .menu-img {
                border-radius: 5%;
                filter: blur(1px);
                -webkit-filter: blur(1px);
            }

            .row .btn1 {
                position: absolute;
                top: 44%;
                left: 13%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                background-color: #555;
                color: white;
                font-size: 16px;
                padding: 12px 24px;
                border: none;
                cursor: pointer;
                border-radius: 5px;
            }

            .row .btn2 {
                position: absolute;
                top: 44%;
                left: 38%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                background-color: #555;
                color: white;
                font-size: 16px;
                padding: 12px 24px;
                border: none;
                cursor: pointer;
                border-radius: 5px;
            }

            .row .btn3 {
                position: absolute;
                top: 44%;
                left: 62%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                background-color: #555;
                color: white;
                font-size: 16px;
                padding: 12px 24px;
                border: none;
                cursor: pointer;
                border-radius: 5px;
            }

            .row .btn4 {
                position: absolute;
                top: 44%;
                left: 87%;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                background-color: #555;
                color: white;
                font-size: 16px;
                padding: 12px 24px;
                border: none;
                cursor: pointer;
                border-radius: 5px;
            }

            .row .btn1:hover {
                background-color: black;
            }

            .row .btn2:hover {
                background-color: black;
            }

            .row .btn3:hover {
                background-color: black;
            }

            .row .btn4:hover {
                background-color: black;
            }




        </style>

    </head>
    <body>



        <div class="mt-5 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-10 md:grid-cols-10">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold text-gray-800 dark:text-white">WE OFFER ...</div>
                        <p> </p>
        </div>

        <div class="row">
            <div class="column">
                <img class="menu-img" src="https://grab-driver.com.my/wp-content/uploads/2019/07/driving-for-uber-ride-sharing-app-759x500-1280x720.jpg" style="width:100%">
                <button class="btn1"><a href="/requestPickup">Transporter</button>
            </div>

            <div class="column">
                <img class="menu-img" src="https://imageio.forbes.com/specials-images/imageserve/5fe16bf53ba69575bb1cd088/0x0.jpg?format=jpg&crop=8995,6000,x0,y0,safe&width=1200" style="width:100%; height:84%">
                <button class="btn2"><a href="/food">Food Delivery</a></button>
            </div>

            <div class="column">
                <img class="menu-img" src="https://bmmagazine.co.uk/wp-content/uploads/2015/06/delivery-e1434710640641.jpg" style="width:100%; height:84%">
                <button class="btn3"><a href="/parcel">Parcel Delivery</a></button>
            </div>

            <div class="column">
                <img class="menu-img" src="https://edmundvehiclerental.com.sg/wp-content/uploads/2020/12/Car-Rental-2.png" style="width:100%; height:84%">
                <button class="btn4"><a href="/car">Car Rental</a></button>
            </div>
        </div>
        </div>

    </body>
</x-app-layout>

