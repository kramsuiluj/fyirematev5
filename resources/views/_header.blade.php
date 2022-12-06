<header class="bg-white border-t-4 border-gray-300 border-b z-10 fixed w-full top-0 h-16">
    <div class="flex items-center justify-between px-5 py-3">
        <section class="flex items-center space-x-5">
            <div id="toggle" class="p-1 rounded-full hover:bg-gray-100 cursor-pointer">
                <svg id="close" style="display: none" class="w-6 h-6 text-blue-900 hover:text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>

                <svg id="open" class="w-6 h-6 text-blue-900 hover:text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </div>

            <a href="javascript:void(0)" class="font-daysone text-lg" style="font-weight: bold">
                <span class="text-orange-500">FYIRE</span><span class="text-blue-900">MATE</span>
            </a>
        </section>

        <section id="dropdown-container" class="relative font-opensans text-slate-700">
            <button id="options" class="flex items-center space-x-1">
                <span class="text-sm" style="font-weight: 500">{{ auth()->user()->firstname }}</span>

                <svg class="w-4 h-4 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>

            <div id="option-items" class="absolute text-sm bg-white border right-0 mr-1.5 mt-1 rounded shadow" style="display: none">
                <ul class="w-28 text-right">
                    <li class="pt-2 pb-1 px-4 hover:bg-gray-100 cursor-pointer border-b border-gray-200">Profile</li>
                    <li id="logout" class="pt-1 pb-2 px-4 hover:bg-gray-100 cursor-pointer">
                        <span>Log out</span>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            @method('DELETE')
                        </form>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</header>
