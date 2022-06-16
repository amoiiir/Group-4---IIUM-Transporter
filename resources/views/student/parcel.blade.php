<title>TransportIIUM</title>

<style>
.acceptButton {
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

.acceptButton {
  background-color: white;
  color: black;
  border: 2px solid #0e3267;
}

.acceptButton:hover {
  background-color:#0e3267;
  color: white;
}




</style>


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Parcel Details') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}

    {{-- form for submitting --}}
    <x-guest-layout>
        <x-jet-authentication-card>
            {{-- <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot> --}}

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="parcel">

            <div>
                @csrf
                <div class="mt-4">
                    <x-jet-label for="trackingId" value="{{ __('Tracking ID') }}" />
                    <x-jet-input id="trackingId" class="block mt-1 w-full" type="text" name="trackingId" :value="old('trackingId')" required autofocus autocomplete="trackingId" />
                </div>

                <div class="mt-4">
                    <x-jet-label for="from" value="{{ __('From') }}" />
                    <x-jet-input id="from" class="block mt-1 w-full" type="text" name="from" :value="old('from')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="destination" value="{{ __('Destination') }}" />
                    <x-jet-input id="destination" class="block mt-1 w-full" type="text" name="destination" :value="old('destination')" required />
                </div>

                <div class="mt-4">
                    <x-jet-label for="weight" value="{{ __('Weight') }}" />
                    <select select onchange="hello()" name="weight" id="weight" class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                        <option value="5.00">Less Than 5 Kg</option>
                        <option value="10.00">More Than 10 Kg</option>
                        <option value="15.00">More Than 50 Kg</option>
                    </select>
                </div>


                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

                <div class="flex items-center justify-end mt-4">

                    <button class="acceptButton">
                        {{ __('Request For Runner') }}
                    </button>

                    <button class="acceptButton">
                        <a href={{ url('/myParcelOrder')}} class="ml-4">{{ __('View Orders') }}</a>
                    </button>
                </div>

            </div>

            </form>

        </x-jet-authentication-card>
    </x-guest-layout>
</x-app-layout>

