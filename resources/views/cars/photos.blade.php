<x-dashboard-layout>
    @csrf

    <x-slot name="titleSlot">
        <p>{{ $car->title }}</p>
    </x-slot>

    <x-slot name="buttonSlot">
        <x-primary-link href="">Foto's bewerken</x-primary-link>
    </x-slot>

    <x-car-tab-menu :car="$car"></x-car-tab-menu>

    <div class="p-6 text-gray-900">
        <div class="flex md:flex-row w-full flex-col-reverse justify-between">
            <div class="flex flex-col">
                <h2 class="text-xl font-bold">Informatie</h2>
                <p class="pt-5">Titel: {{ $car->title }}</p>
            </div>

            <div class="flex flex-col">
                @if (($car->img ?? null) != null)
                    <div>
                        <img id="current_image" src="{{ asset('images/companies/' . $car->id . '/' . $car->img) }}"
                            alt="Huidige Afbeelding" class="h-[400px] max-w-[400px] p-1 border-gray-400 rounded-lg">
                @endif
            </div>
        </div>
    </div>
</x-dashboard-layout>
