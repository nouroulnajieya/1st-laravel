<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('IWK RSTP Putrajaya 1 (WPJ001) Energy Demand Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-2 py-2">
                    <iframe
                        width="1200"
                        height="500"
                        seamless
                        frameBorder="0"
                        scrolling="no"
                        src="http://localhost:8080/superset/explore/p/eOXModo9NZ2/?standalone=1&height=500"
                        >
                    </iframe>
                </div> 
                <div class="flex flex-row gap-4 px-2 py-2">
                    <iframe
                        width="800"
                        height="400"
                        seamless
                        frameBorder="0"
                        scrolling="no"
                        src="http://localhost:8080/superset/explore/p/2739r8jq4de/?standalone=1&height=400"
                        >
                    </iframe>
                    <iframe
                        width="400"
                        height="400"
                        seamless
                        frameBorder="0"
                        scrolling="no"
                        src="http://localhost:8080/superset/explore/p/XV6Mxx8MroW/?standalone=1&height=400"
                        >
                    </iframe> 
                </div>
            </div>
        </div>
    </div>
</x-app-layout>