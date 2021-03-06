<x-app-layout>
    <x-slot name="header">
        <h2 class="flex items-center justify-between font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Equipos') }} <livewire:upload-excel></livewire:upload-excel>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <livewire:equipos-table></livewire:equipos-table>
            </div>
        </div>
    </div>
</x-app-layout>
