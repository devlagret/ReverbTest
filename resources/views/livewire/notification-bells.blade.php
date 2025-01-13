<div class="ms-3 relative">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
                <span class="inline-flex rounded-md">
                    <button type="button" id="notification-button"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0M3.124 7.5A8.969 8.969 0 0 1 5.292 3m13.416 0a8.969 8.969 0 0 1 2.168 4.5" />
                        </svg>
                       @if(count($notifications))
                        <span id="notification-badge" class="rounded-full border text-[0.6rem] size-[1rem] relative align-middle -left-[1em] -top-[1em] text-center border-red-700 text-slate-100 bg-red-600">{{count($notifications)}}</span>
                        @endif
                    </button>
                </span>
        </x-slot>

        <x-slot name="content" id="notification-content" data>
            <x-dropdown-link href="{{ route('profile.show') }}">
                <h5 class="card-title">{{Str::of("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad")->limit(12)}}</h5>
                <p>{{Str::of("Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad")->limit(20)}}</p>
          </x-dropdown-link>
            @foreach ($notifications as $key =>$val)
           <x-dropdown-link class="border-t border-gray-200" href="{{ route('profile.show') }}">
                  <h2 class="card-title">{{Str::of($val['title'])->limit(12)}}</h2>
                  <p>{{Str::of($val['msg'])->limit(20)}}</p>
            </x-dropdown-link>
           @endforeach
        </x-slot>
    </x-dropdown>
</div>
