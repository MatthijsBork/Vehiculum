<x-dashboard-layout>
    <x-slot name="titleSlot">
        Auto's
    </x-slot>
    <x-slot name="buttonSlot">
        <x-primary-link href="{{ route('dashboard.cars.create') }}">Auto toevoegen</x-primary-link>
    </x-slot>
    <x-slot name="searchSlot">
        <x-search :action="null"></x-search>
    </x-slot>
</x-dashboard-layout>
