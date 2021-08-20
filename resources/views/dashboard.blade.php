<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center">
        <div class="relative py-3">
            <div
                class="hidden sm:block absolute inset-0 bg-gradient-to-br from-indigo-500 to-indigo-400 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-12 sm:rounded-3xl">
            </div>
            <div
                class="hidden sm:block absolute inset-0 bg-gradient-to-br from-indigo-200 to-indigo-100 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
            </div>
            <div class="relative px-4 py-10 bg-white sm:shadow-lg sm:rounded-3xl sm:p-20">
                <div class="space-y-3">
                    <div class="flex justify-center">
                        <a href="/">
                            <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                        </a>
                    </div>
                    <h1 class="font-semibold text-5xl">
                        Welcome to twitter lite
                    </h1>
                    <h3 class="text-gray-600 text-2xl text-center">
                        web applications like twitter
                    </h3>
                    <div class="flex justify-center space-x-2">
                        <a class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl text-sm text-white capitalize font-medium tracking-widest hover:bg-indigo-700 active:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150"
                            href="{{ route('register') }}">Register</a>
                        <a class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-xl text-sm text-white capitalize font-medium tracking-widest hover:bg-indigo-700 active:bg-indigo-700 focus:outline-none focus:border-indigo-700 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150"
                            href="{{ route('login') }}">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>