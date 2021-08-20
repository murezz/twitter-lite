<div
    class="flex justify-center items-center m-1 mb-2 font-medium py-1 px-2  rounded-md text-green-100 bg-green-500 border border-green-500 ">
    <div slot="avatar">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="feather feather-check-circle w-5 h-5 mx-2">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
            <polyline points="22 4 12 14.01 9 11.01"></polyline>
        </svg>
    </div>
    <div class="text-xl font-normal  max-w-full flex-initial">
        <div class="py-2">
            {{ session('message') }}
        </div>
    </div>
</div>