<x-dashboard-layout>
    <x-slot name="titleSlot">Auto toevoegen</x-slot>
    <x-car-form :action="route('dashboard.cars.store')"></x-car-form>
</x-dashboard-layout>
