<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex flex-col items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="w-full mt-4 mb-4">

                {{ __('Login') }}
            </x-primary-button>
            <x-link-button href="{{ route('social.redirect', ['provider' => 'google']) }}" class="w-full">
                Login By 
                <svg width="24px" height="24px" viewBox="0 -0.5 25 25" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M9.78353 7.74971C10.1976 7.73814 10.5239 7.39311 10.5123 6.97906C10.5007 6.565 10.1557 6.23873 9.74164 6.25029L9.78353 7.74971ZM5.50158 11.5L6.25132 11.52C6.25167 11.5067 6.25167 11.4933 6.25132 11.48L5.50158 11.5ZM9.76258 16L9.74164 16.7497C9.7556 16.7501 9.76957 16.7501 9.78353 16.7497L9.76258 16ZM14.0236 11.5L14.7733 11.48C14.7625 11.0737 14.43 10.75 14.0236 10.75V11.5ZM9.76258 10.75C9.34837 10.75 9.01258 11.0858 9.01258 11.5C9.01258 11.9142 9.34837 12.25 9.76258 12.25V10.75ZM19.3276 9.679C19.7418 9.679 20.0776 9.34321 20.0776 8.929C20.0776 8.51479 19.7418 8.179 19.3276 8.179V9.679ZM17.5016 8.179C17.0874 8.179 16.7516 8.51479 16.7516 8.929C16.7516 9.34321 17.0874 9.679 17.5016 9.679V8.179ZM17.5016 9.679C17.9158 9.679 18.2516 9.34321 18.2516 8.929C18.2516 8.51479 17.9158 8.179 17.5016 8.179V9.679ZM15.6756 8.179C15.2614 8.179 14.9256 8.51479 14.9256 8.929C14.9256 9.34321 15.2614 9.679 15.6756 9.679V8.179ZM16.7516 8.929C16.7516 9.34321 17.0874 9.679 17.5016 9.679C17.9158 9.679 18.2516 9.34321 18.2516 8.929H16.7516ZM18.2516 7C18.2516 6.58579 17.9158 6.25 17.5016 6.25C17.0874 6.25 16.7516 6.58579 16.7516 7H18.2516ZM18.2516 8.929C18.2516 8.51479 17.9158 8.179 17.5016 8.179C17.0874 8.179 16.7516 8.51479 16.7516 8.929H18.2516ZM16.7516 10.857C16.7516 11.2712 17.0874 11.607 17.5016 11.607C17.9158 11.607 18.2516 11.2712 18.2516 10.857H16.7516ZM9.74164 6.25029C6.90939 6.32941 4.67644 8.68761 4.75185 11.52L6.25132 11.48C6.19794 9.47505 7.77861 7.80571 9.78353 7.74971L9.74164 6.25029ZM4.75185 11.48C4.67644 14.3124 6.90939 16.6706 9.74164 16.7497L9.78353 15.2503C7.77861 15.1943 6.19794 13.5249 6.25132 11.52L4.75185 11.48ZM9.78353 16.7497C12.6158 16.6706 14.8487 14.3124 14.7733 11.48L13.2738 11.52C13.3272 13.5249 11.7466 15.1943 9.74164 15.2503L9.78353 16.7497ZM14.0236 10.75H9.76258V12.25H14.0236V10.75ZM19.3276 8.179H17.5016V9.679H19.3276V8.179ZM17.5016 8.179H15.6756V9.679H17.5016V8.179ZM18.2516 8.929V7H16.7516V8.929H18.2516ZM16.7516 8.929V10.857H18.2516V8.929H16.7516Z"
                            fill="#ffffff"></path>
                    </g>
                </svg>
            </x-link-button>
        </div>
    </form>
</x-guest-layout>
