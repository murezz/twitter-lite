<x-app-layout>

    <x-slot name="header">
        <h1 class="font-semibold text-xl">
            Update Your Profile Information
        </h1>
    </x-slot>

    <x-container>
        <div class="flex">
            <div class="w-full lg:w-1/2">
                @if (session()->has('message'))
                <x-alert />
                @endif
                <x-card>
                    <form action="{{ route('profile.update') }}" method="post">
                        @method('put')
                        @csrf

                        <div class="mb-5">
                            <x-label for="username">Username</x-label>
                            <x-input value="{{ old('username', Auth::user()->username) }}" class="mt-1 w-full"
                                type="text" name="username" id="username" />
                            @error('username')
                            <div class="text-red-500 text-sm mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <x-label for="email">email</x-label>
                            <x-input value="{{ old('email', Auth::user()->email) }}" class="mt-1 w-full" type="email"
                                name="email" id="email" />
                            @error('email')
                            <div class="text-red-500 text-sm mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-5">
                            <x-label for="name">name</x-label>
                            <x-input value="{{ old('name', Auth::user()->name) }}" class="mt-1 w-full" type="text"
                                name="name" id="name" />
                            @error('name')
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