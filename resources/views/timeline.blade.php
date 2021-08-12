<x-app-layout>
    <x-container>
        <div class="grid grid-cols-12 gap">
            <div class="col-span-7">
                <div class="space-y-6">
                    @foreach ($statuses as $item)
                    <div class="flex">
                        <div class="flex-shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full" src="https://i.pravatar.cc/150"
                                alt="{{ $item->user->name }}">
                        </div>
                        <div>
                            <div class="font-semibold">
                                {{ $item->user->name }}
                            </div>
                            <div class="leading-relax">
                                {{ $item->body }}
                            </div>
                            <div class="text-sm text-gray-600">
                                {{ $item->created_at }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-span-5">
                fried
            </div>
        </div>
    </x-container>
</x-app-layout>