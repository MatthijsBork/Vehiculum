<x-layout>
    <x-slot name="menuSlot">
        <x-user-menu></x-user-menu>
    </x-slot>
    @if (!isset($cars[0]))
        <div class="w-full p-10 text-center bg-white rounded-lg">
            <h1 class="text-xl font-bold text-blue-500">Veel leegte...</h1>
            <p class="mb-4">Er zijn geen auto's gevonden</p>
        </div>
    @else
        @foreach ($cars as $car)
            <x-car-card :car="$car"></x-car-card>
        @endforeach
    @endif
</x-layout>