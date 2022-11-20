<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="content-center">
        <img class="h-36 w-full mb-10 object-cover object-center" src="{{ asset('images/Icons/Balls.jpeg') }}"
            alt="">
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div
                    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                    {{-- Component o parcial --}}
                    <div class="container mx-auto">
                        @livewire('field-sport')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
