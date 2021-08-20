<x-app-layout>
    <div class="border-b -mt-8 py-16">
        <x-container>
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}"
                        class="rounded-full w-16 h16 border-2 border-blue-500 p-1">
                </div>
                <div>
                    <h1 class="font-semibol mb-3">
                        {{ $user->name }}
                    </h1>
                    <div class="text-sm text-gray-500">
                        {{ $user->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
        </x-container>
    </div>

    <div class="border-b mb-5">
        <x-statistic :user="$user" />
    </div>

    <x-container>
        <div class="grid grid-cols-3 gap-5">
            <x-following :users="$following"></x-following>
        </div>
    </x-container>
</x-app-layout>