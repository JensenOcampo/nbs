<x-guest-layout>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Register</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

            body {
                font-family: 'Montserrat', sans-serif;
            }
        </style>
    </head>

    <body class="bg-white flex justify-center items-center min-h-screen p-4">
        <main class="w-full max-w-sm">
            <h1 class="text-center text-black text-xl font-semibold mb-8">CREATE AN ACCOUNT</h1>
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="name" class="block text-black text-sm mb-1">{{ __('Name') }}</label>
                    <input id="name" type="text" name="name" placeholder="Name"
                        class="w-full border border-gray-300 text-gray-400 text-sm px-3 py-2 focus:outline-none focus:ring-1 focus:ring-black"
                        value="{{ old('name') }}" required autofocus autocomplete="name" />
                </div>

                <div>
                    <label for="email" class="block text-black text-sm mb-1">{{ __('Email') }}</label>
                    <input id="email" type="email" name="email" placeholder="Email"
                        class="w-full border border-gray-300 text-gray-400 text-sm px-3 py-2 focus:outline-none focus:ring-1 focus:ring-black"
                        value="{{ old('email') }}" required autocomplete="username" />
                </div>

                <div>
                    <label for="phone" class="block text-black text-sm mb-1">{{ __('Phone') }}</label>
                    <input id="phone" type="number" name="phone" placeholder="Phone"
                        class="w-full border border-gray-300 text-gray-400 text-sm px-3 py-2 focus:outline-none focus:ring-1 focus:ring-black"
                        value="{{ old('phone') }}" required />
                </div>

                <div>
                    <label for="address" class="block text-black text-sm mb-1">{{ __('Address') }}</label>
                    <input id="address" type="text" name="address" placeholder="Address"
                        class="w-full border border-gray-300 text-gray-400 text-sm px-3 py-2 focus:outline-none focus:ring-1 focus:ring-black"
                        value="{{ old('address') }}" required />
                </div>

                <div>
                    <label for="password" class="block text-black text-sm mb-1">{{ __('Password') }}</label>
                    <input id="password" type="password" name="password" placeholder="Password"
                        class="w-full border border-gray-300 text-gray-400 text-sm px-3 py-2 focus:outline-none focus:ring-1 focus:ring-black"
                        required autocomplete="new-password" />
                </div>

                <div>
                    <label for="password_confirmation"
                        class="block text-black text-sm mb-1">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" type="password" name="password_confirmation"
                        placeholder="Confirm Password"
                        class="w-full border border-gray-300 text-gray-400 text-sm px-3 py-2 focus:outline-none focus:ring-1 focus:ring-black"
                        required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="flex items-center mt-4">
                        <input name="terms" id="terms" type="checkbox" class="mr-2" required />
                        <label for="terms" class="text-sm text-gray-600">{!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' =>
                                '<a target="_blank" href="' .
                                route('terms.show') .
                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                __('Terms of Service') .
                                '</a>',
                            'privacy_policy' =>
                                '<a target="_blank" href="' .
                                route('policy.show') .
                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                __('Privacy Policy') .
                                '</a>',
                        ]) !!}</label>
                    </div>
                @endif

                <div class="flex items-center justify-center mt-6">
                    <button type="submit"
                        class="block mx-auto bg-black text-white text-xs px-6 py-2 mb-6 hover:opacity-90">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>

            <hr class="border-gray-300" />
            <p class="text-center text-xs text-black mt-6">
                Already have an account? <span class="font-semibold cursor-pointer"><a href="{{ route('login') }}"
                        class="underline text-sm text-gray-600 hover:text-gray-900">{{ __('Log in here') }}</a></span>
            </p>
        </main>
    </body>

    </html>
</x-guest-layout>
