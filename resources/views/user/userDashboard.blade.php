<x-home-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Hello, {{ Auth::user()->firstName }}
            </h2>
            <div class="space-x-4">
                <a href="#" class="hover:border-b-2 border-gray-500">Request Permit</a>
                <a href="#" class="hover:border-b-2 border-gray-500">Request barangay ID</a>
                <a href="#" class="hover:border-b-2 border-gray-500">Set up appointment</a>
                <a href="#" class="hover:border-b-2 border-gray-500">Incident report</a>
                hello from home user
            </div>
        </div>
    </x-slot>

    <div class="flex h-screen overflow-hidden">
        <div class="flex-1 overflow-y-scroll">
            <div class="py-12">
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
</x-home-layout>
