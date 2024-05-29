<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hello, {{ Auth::user()->firstName }}
        </h2>
    </x-slot>

    <div class="flex h-screen overflow-hidden">
        @include('components.sidebar')
        <div class="flex-1 overflow-y-scroll">
            <div class="py-12 mr-60">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-lg rounded-lg">
                        <!-- Add a div with a specified height and overflow-auto -->
                        <div class="p-6 text-gray-900">
                            <div>
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
