@foreach ($users as $user)
<x-card>
    <div class="flex items-center p-3">
        <div class="flex-shrink-0 mr-3">
            <img class="h-12 w-12 rounded-full" src="{{ $user->gravatar() }}" alt="{{ $user->name }}">
        </div>
        <div>
            <div class="font-semibold">
                {{ $user->name }}
            </div>
            <div class="text-sm text-gray-600">
                @if ($user->pivot)
                {{ $user->pivot->created_at->diffForHumans() }}
                @endif
            </div>
            @if (request()->routeIs('user.index'))
            <div class="mt-2">
                <form action="{{ route('following.store', $user) }}" method="post">
                    @csrf
                    @if (Auth::user()->follows()->where('following_user_id', $user->id)->first())
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 border border-indigo-600 rounded-md font-semibold text-xs text-indigo-600 uppercase tracking-widest focus:outline-none focus:border-indigo-700 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                        unfollow
                    </button>
                    @else
                    <x-button>
                        follow
                    </x-button>
                    @endif
                </form>
            </div>
            @endif
        </div>
    </div>
</x-card>
@endforeach