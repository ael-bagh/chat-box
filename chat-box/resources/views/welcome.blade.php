<x-guest-layout>
    <div class="flex flex-row border-4 border-t-0 border-l-0 border-r-0 border-gray-300 shadow-xl">
        <div class=" flex-shrink-0 pl-5 pt-2 p-2 bg-gray-300 w-50"><img class="mt-2 w-10 h10" src="{{ asset('img/logo.png') }}" alt=""></div>
        <div class="lg:pt-4 pl-4 bg-gray-300 w-full"></div>
        <div class="flex flex-row-reverse bg-gray-300">
            <a href="/register"><div class="bg-gray-800 border-2 border-gray-400 rounded-xl mr-6 mt-2 mb-2 p-2 text-center text-white">Register</div></a>
        </div>
    </div>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="{{ asset('img/logo.png') }}" class="ml-32 object-center w-32 h-32 fill-current text-gray-500" />
            </a>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Login') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
