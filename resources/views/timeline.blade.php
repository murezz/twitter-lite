<x-app-layout>
    <x-container>
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-7">
                <x-card>
                    <form action="{{ route('statuses.store') }}" method="post">
                        @csrf
                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <img class="h-10 w-10 rounded-full" src="{{ Auth::user()->gravatar() }}"
                                    alt="{{ Auth::user()->name }}">
                            </div>
                            <div class="w-full">
                                <div class="font-semibold">
                                    {{ Auth::user()->name }}
                                </div>
                                <div class="my-2">
                                    <textarea name="body" id="body" placeholder="What is on your mind ?"
                                        class="form-textarea w-full border-gray-300 rounded-xl resize-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-200"></textarea>
                                </div>
                                <div class="text-right">
                                    <x-button>
                                        Post
                                    </x-button>
                                </div>
                            </div>
                        </div>
                    </form>
                </x-card>
                <div class="space-y-6 my-5">
                    <div class="space-y-3">
                        <x-statuses :statuses="$statuses" />
                    </div>
                </div>
            </div>
            <div class="col-span-5">
                <x-card>
                    <h1 class="font-semibold mb-5">
                        Recently Follow
                    </h1>
                    <div class="space-y-5">
                        @foreach (Auth::user()->follows()->limit(5)->get() as $user)
                        <div class="flex items-center">
                            <div class="flex-shrink-0 mr-3">
                                <img class="h-10 w-10 rounded-full" src="{{ $user->gravatar() }}"
                                    alt="{{ $user->name }}">
                            </div>
                            <div>
                                <div class="font-semibold">
                                    {{ $user->name }}
                                </div>
                                <div class="text-sm text-gray-600">
                                    {{ $user->pivot->created_at->diffForHumans() }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </x-card>
            </div>
        </div>
    </x-container>
</x-app-layout>