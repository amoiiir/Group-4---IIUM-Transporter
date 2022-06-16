<head>

    <style>
        *{
                        font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-serif	font-family: ui-serif, Georgia, Cambria, "Times New Roman", Times, serif;
            font-mono	font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        }

        body{
            padding: 0px;
        }
        .logo{
            display: block;
            float: left;
            margin-left: 330px;
            margin-top: 150px;
            width: 350px;
            }

        .bg-img {
            background-image: url("https://www.pixelstalk.net/wp-content/uploads/images6/Aesthetic-Wallpaper-White-Wallpaper-Cloud.jpg");
            width: 100%;
            height: 100%;

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            z-index: -1;
            }

        .antialiased .btn1 {
            position: absolute;
            top: 85%;
            left: 50%;
            float: right;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: #04AA6D;
            color: white;
            font-size: 16px;
            padding: 16px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            width: 74%;
            opacity: 0.9;
            }

            .antialiased .btn1:hover {
                opacity: 1;
            }

            .container {
            position: absolute;
            right:40;
            top:20%;
            margin: 20px;
            max-width: 300px;
            padding: 50px;
            height: 350px;
            border-radius:10px;
            background-color: white;
            }

            input[type=email], input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 20 22px 0;
            border: none;
            border-radius: 5px;
            background: #f1f1f1;
            }

            input[type=email]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
            }

            .btn {
            background-color: #04AA6D;
            color: white;
            font-size: 16px;
            padding: 16px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
            }

            .btn:hover {
            opacity: 1;
            }

            .centered {
            position: absolute;
            top: 60%;
            left: 37%;
            transform: translate(-50%, -50%);
            font-size: x-large;
            }

            .buttonRegister{
                position: absolute;
                top: 85%;
                left: 50%;
                float: right;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                background-color: #04AA6D;
                color: white;
                font-size: 16px;
                padding: 16px 20px;
                border: none;
                cursor: pointer;
                border-radius: 5px;
                width: 64%;
                opacity: 0.9;
                text-align: center;
                text-decoration: none;
            }
        </style>


</head>

<body>
<img src="{{url('/images/Logo-black.png')}}" alt="" class="logo"/>

<div class="bg-img">
    <div class="centered" >TransportIIUM is providing a variety of services, including picking up parcels, renting cars, delivering food, and serving as a transporter.
        TransportIIUM also provides services for those who are looking for part-time work to supplement their income.</div>
    </div>
</div>

<x-jet-authentication-card>
    <x-slot name="logo">
    </x-slot>

    <x-jet-validation-errors class="mb-4" />

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif


    <form class="container" method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                <x-jet-checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-jet-button type="submit" class="btn">
                {{ __('Log in') }}
            </x-jet-button>

            <p></p>

            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

        </div>

        <div class="antialiased">
            @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="buttonRegister">Register</a>
            @endif
        </div>
    </form>



</x-jet-authentication-card>
</body>
