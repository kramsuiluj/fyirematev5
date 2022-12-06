<x-layout>
    @include('_header')
    @include('_side-nav')

    <x-sub-header>
        <div class="flex items-center justify-between">
            <h2 class="font-daysone">CHIEFS</h2>

            <div>
                <a href="{{ route('administrators.chiefs.create') }}" class="font-opensans flex items-center border-2
                 border-slate-700 hover:bg-gray-200
                font-semibold
                px-2 py-0.5 rounded-full w-32
                justify-between">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3
                    .org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6m0
                     0v6m0-6h6m-6 0H6"></path></svg>

                    <span class="text-sm">Add Chief</span>
                </a>
            </div>
        </div>
    </x-sub-header>

    <x-containers.main>

    </x-containers.main>
</x-layout>
