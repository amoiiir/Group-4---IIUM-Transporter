

<body onload="hello()">

    <x-guest-layout>
        <x-jet-authentication-card>
            <x-slot name="logo">

            </x-slot>

            <img src="{{url('/images/Logo-black.png')}}" alt="" class="logo"/>

            <style>
                .logo{
                display: block;
                /* float: left; */
                margin-left: 70px;
                margin-top: 5px;
                width: 250px;
                }
                </style>

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">

            <div>
                @csrf
                <div class="mt-4">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="role_ID" value="{{ __('Register as') }}" />
                    <select select onchange="hello()" name="role_ID" id="role_ID" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="Student">Student</option>
                        <option value="Runner">Runner</option>
                    </select>
                </div>

                <div class="mt-4" id=vehicleModel-field>
                    <x-jet-label for="vehicle_model" value="{{ __('Vehicle Model') }}" />
                    <x-jet-input id="vehicle_model" class="block mt-1 w-full" type="text" name="vehicle_model"/>
                </div>

                <div class="mt-4" id=plateNo-field>
                    <x-jet-label for="plate_no" value="{{ __('Plate Number') }}" />
                    <x-jet-input id="plate_no" class="block mt-1 w-full" type="text" name="plate_no"/>
                </div>


                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'._('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'._('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button class="ml-4">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </div>
            </form>
        </x-jet-authentication-card>
    </x-guest-layout>

    <script>
        function hello() {
            if (document.getElementById("role_ID").value == "Runner"){
                    document.getElementById("vehicleModel-field").style.display = "block";
                    document.getElementById("plateNo-field").style.display = "block";
                    document.getElementById("vehicleModel").required = true;
                    document.getElementById("plateNo").required = true;
            }
            else {
                    document.getElementById("vehicleModel-field").style.display = "none";
                    document.getElementById("plateNo-field").style.display = "none";
                    document.getElementById("vehicleModel").required = false;
                    document.getElementById("plateNo").required = false;
            }
        }
        </script>
