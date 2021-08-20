<x-container>
    <div class="flex justify-between items-center">
        <div class="flex">
            <a href="{{ route('profile', $user) }}"
                class="px-10 py-5 font-semibold text-center border-r border-1 border-l">
                <div class="text-xl mb-1">{{ $user->statuses->count() }}</div>
                <div class="uppercase text-xs text-gray-500">status</div>
            </a>
            <a href="{{ route('follower', $user) }}" class="px-10 py-5 font-semibold text-center border-r border-1">
                <div class="text-xl mb-1">{{ $user->followers->count() }}</div>
                <div class="uppercase text-xs text-gray-500">follower</div>
            </a>
            <a href="{{ route('following', $user) }}" class="px-10 py-5 font-semibold text-center border-r border-1">
                <div class="text-xl mb-1">{{ $user->follows->count() }}</div>
                <div class="uppercase text-xs text-gray-500">following</div>
            </a>
        </div>
        <div>
            @if (Auth::user()->isNot($user))

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

            @else

            <a href="{{ route('profile.edit') }}"
                class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-500 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                Edit profile
            </a>

            @endif
        </div>
    </div>
</x-container>