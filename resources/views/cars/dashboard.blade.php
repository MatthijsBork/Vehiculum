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
    @if (!isset($cars[0]))
        <div class="w-full p-10 text-center bg-white rounded-lg">
            <h1 class="text-xl font-bold text-blue-500">Veel leegte...</h1>
            <p class="mb-4">Er zijn geen auto's gevonden</p>
        </div>
    @else
        <table class="w-full text-left bg-white table-auto sm:rounded-lg">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-3">Titel</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr class="border-b even:bg-gray-50">
                        <td class="px-4 py-3">{{ $car->title }}</td>
                        <td class="flex justify-end py-3 text-right">
                            <a title="Bewerken" href="{{ route('dashboard.cars.edit', compact('car')) }}"
                                class="text-blue-700 hover:underline">
                                <x-edit-icon></x-edit-icon>
                            </a>
                            <a title="Verwijderen" href="{{ route('dashboard.cars.delete', compact('car')) }}"
                                class="text-red-500 hover:underline"
                                onclick="return confirm('Weet u zeker dat u dit wilt verwijderen?');">
                                <x-trash-icon></x-trash-icon>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</x-dashboard-layout>
