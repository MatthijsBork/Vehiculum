<x-dashboard-layout>
    <x-slot name="titleSlot">Eigenschap bewerken</x-slot>
    <x-property-form :action="route('dashboard.properties.update', compact('property'))" :property="$property"></x-property-form>
</x-dashboard-layout>
