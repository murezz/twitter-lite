<x-app-layout>

    <x-slot name="header">
        <h1 class="font-semibold text-xl">
            Update Your Password
        </h1>
    </x-slot>

    <x-container>
        <div class="flex">
            <div class="w-full lg:w-1/2">
                @if (session()->has('message'))
                <x-alert />
                @endif
                <x-card>
                    <form action="{{ route('password.edit') }}" method="post">
                        @method('put')
                        @csrf

                        <div class="mb-5">
                            <x-label for="current_password">Current Password</x-label>
                            <x-input class="mt-1 w-full" type="password" name="current_password"
                                id="current_password" />
                            @error('current_password')
                            <div class="text-red-500 text-sm mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <x-label for="password">New Password</x-label>
                            <x-input class="mt-1 w-full" type="password" name="password" id="password" />
                            @error('password')
                            <div class="text-red-500 text-sm mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="mb-5">
                            <x-label for="password_confirmation">Confirm Password</x-label>
                            <x-input class="mt-1 w-full" type="password" name="password_confirmation"
                                id="password_confirmation" />
                            @error('password_confirmation')
                            <div class="text-red-500 text-sm mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="flex justify-between">

                            <a href="{{ route('timeline') }}"
                                class="bg-white border border-indigo-600 text-indigo-600 rounded-lg uppercase font-semibold text-xs py-2 px-4">
                                Back
                            </a>

                            <x-button>Update</x-button>
                        </div>
                    </form>
                </x-card>
            </div>
        </div>
    </x-container>

</x-app-layout>