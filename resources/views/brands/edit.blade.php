<x-dashboard-layout>
    <x-slot name="titleSlot">Merk bewerken</x-slot>
    <x-brand-form :action="route('dashboard.brands.update', compact('brand'))" :brand="$brand"></x-brand-form>
</x-dashboard-layout>
