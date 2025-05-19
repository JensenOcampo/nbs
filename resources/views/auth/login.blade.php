<x-guest-layout>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Login</title>
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
            <h1 class="text-center text-black text-xl font-semibold mb-8">LOG IN TO YOUR ACCOUNT</h1>
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-black text-sm mb-1">{{ __('Email') }}</label>
                    <input id="email" type="email" name="email" placeholder="Email"
                        class="w-full border border-gray-300 text-gray-400 text-sm px-3 py-2 focus:outline-none focus:ring-1 focus:ring-black"
                        value="{{ old('email') }}" required autofocus autocomplete="username" />
                </div>

                <div>
                    <label for="password" class="block text-black text-sm mb-1">{{ __('Password') }}</label>
                    <div class="flex border border-gray-300">
                        <input id="password" type="password" name="password" placeholder="Password"
                            class="flex-grow text-gray-400 text-sm px-3 py-2 focus:outline-none" required
                            autocomplete="current-password" />
                        <button type="button" class="w-10 bg-gray-400 flex justify-center items-center text-black">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>

                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" name="remember" type="checkbox" class="mr-2" />
                        <span class="text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="text-center text-xs text-black mb-6 cursor-pointer">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}"
                            class="underline text-sm text-gray-600 hover:text-gray-900">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <button type="submit"
                    class="block mx-auto bg-black text-white text-xs px-6 py-2 mb-6 hover:opacity-90">
                    {{ __('Log in') }}
                </button>
            </form>

            <hr class="border-gray-300" />
            <p class="text-center text-xs text-black mt-6">
                No account? <span class="font-semibold cursor-pointer"><a href="{{ route('register') }}">Create one
                        here</a></span>
            </p>
        </main>
    </body>

    </html>
</x-guest-layout>
